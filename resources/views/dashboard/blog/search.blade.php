@extends('dashboard.template')
@section('title', 'Laporan Aduan ')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Rekapan /</span> Hasil pencarian data
            <abbr title="{{ $keyword }}">{{ $keyword }}</abbr>
        </h4>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-6 mt-4">
                <form action="{{ route('search') }}" method="get">
                    @csrf
                    <input type="text" name="search" class="form-control" id="basic-default-name"
                        placeholder="Cari nama atau ID Transaksi" />
                    <button type="submit" class="btn" hidden>Submit</button>
                    <a href="/app/dashboard/complaint" class="btn"><i class='bx bx-refresh'></i> Refresh</a>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 order-0">
                <div class="card my-3">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="vertical-align : middle;text-align:left;">@sortablelink('reportID', 'ID #')
                                    </th>
                                    <th style="vertical-align : middle;text-align:left;">Tgl Laporan</th>
                                    <th style="vertical-align : middle;text-align:left;">Nama Pelapor</th>
                                    <th style="vertical-align : middle;text-align:left;">Judul Pelaporan</th>
                                    <th style="vertical-align : middle;text-align:left;">Tipe</th>
                                    <th style="vertical-align : middle;text-align:left;">Status</th>
                                    <th style="vertical-align : middle;text-align:left;">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @if ($orders->count() >= 1)
                                    @foreach ($orders as $order)
                                        <tr @if ($order->status == 2) style="background-color:#d916163d;" @endif>
                                            <td><a
                                                    href="/app/dashboard/complaint/view/{{ $order->reportID }}">#{{ $order->reportID }}</a>
                                            </td>
                                            <td>{{ $order->updated_at->format('d M Y H:i A') }}
                                            </td>
                                            <td style="text-transform:capitalize;">
                                                {{ Str::limit($order->namaPelapor, 17, '..') }}
                                            </td>
                                            <td>
                                                {{ $order->title }}
                                            </td>
                                            <td style="text-transform:capitalize:">
                                                @if ($order->type == 'pengaduan')
                                                    <span class="badge badge-primary"
                                                        style="background-color:blue">Pengaduan</span>
                                                @endif
                                                @if ($order->type == 'aspirasi')
                                                    <span class="badge badge-danger"
                                                        style="background-color:red">Aspirasi</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($order->status == 0)
                                                    <span class="text-primary">Telah terkirim ke pusat aduan</span>
                                                @elseif($order->status == 1)
                                                    <span class="text-primary">On Progress</span>
                                                @elseif($order->status == 2)
                                                    <span class="text-primary">Telah Di Cancel</span>
                                                @elseif($order->status == 3)
                                                    <span class="text-primary">Pending (Sedang menunggu update
                                                        pelapor)</span>
                                                @elseif($order->status == 4)
                                                    <span class="text-primary">Laporan Selesai</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($order->status != 2)
                                                    <a class="mr-1"
                                                        href="/app/dashboard/complaint/view/{{ $order->reportID }}"><i
                                                            class="bx bx-search-alt-2 me-1"></i>
                                                        View</a>
                                                    <a class="mr-1"
                                                        href="/app/dashboard/complaint/cancel/{{ $order->reportID }}"
                                                        data-method="get"><i class="bx bx-x me-1"></i>
                                                        Cancel</a>
                                                    <a class="mr-1"
                                                        href="/app/dashboard/complaint/delete/{{ $order->reportID }}"
                                                        data-method="get"><i class="bx bx-trash me-1"></i>
                                                        Delete</a>
                                                @else
                                                    <a class="mr-1" href="#">
                                                        Telah di cancel</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- {!! $orders->appends(\Request::except('page'))->render() !!} --}}
                                @else
                                    <tr>
                                        <td colspan="18" style="text-align:center;">Belum ada data...</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pagination justify-content-center">
                    {{ $orders->onEachSide(10)->links() }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="/app/dashboard/complaint/print" target="_blank" class="btn btn-primary" disabled>
                    <span class="tf-icons bx bx-printer"></span>&nbsp; Print</a>
            </div>
        </div>
    </div>
    </div>
@endsection
