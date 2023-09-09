@extends('dashboard.template')
@section('title', 'Konten Blog ')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Content Management /</span> Konten Blog</h4>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-6 mt-4">
                <form action="{{ route('searchBlog') }}" method="get">
                    @csrf
                    <input type="text" name="search" class="form-control" id="basic-default-name"
                        placeholder="Cari nama atau ID Transaksi" />
                    <button type="submit" class="btn" hidden>Submit</button>
                    <a href="/app/dashboard/blog" class="btn"><i class='bx bx-refresh'></i> Refresh</a>
                </form>
            </div>
            <div class="col-lg-6 mt-4 text-right">
                <a href="/app/dashboard/blog/add" class="btn btn-primary"><i class='bx bx-plus'></i> New Blog</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 order-0">
                <div class="card my-3">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="vertical-align : middle;text-align:left;">@sortablelink('blogID', 'ID #')
                                    </th>
                                    <th style="vertical-align : middle;text-align:left;">Judul</th>
                                    <th style="vertical-align : middle;text-align:left;">Kategori Konten</th>
                                    <th style="vertical-align : middle;text-align:left;">Dibuat pada</th>
                                    <th style="vertical-align : middle;text-align:left;">Status</th>
                                    <th style="vertical-align : middle;text-align:left;">Act.</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @if ($orders->count() >= 1)
                                    @foreach ($orders as $order)
                                        <tr @if ($order->status == 2) style="background-color:#d916163d;" @endif>
                                            <td>
                                                {{ $order->blogID }}
                                            </td>
                                            <td>
                                                {{ $order->judul }}
                                            </td>
                                            <td>
                                                {{ $order->categories['title'] }}
                                            </td>
                                            <td>{{ $order->created_at->format('d M Y H:i A') }}
                                            </td>
                                            <td>
                                                @if ($order->status == 0)
                                                    <span class="text-primary">Published</span>
                                                @elseif($order->status == 1)
                                                    <span class="text-primary">Tidak Terpublish</span>
                                                    {{-- @elseif($order->status == 2)
                                                    <span class="text-primary">Telah Di Cancel</span>
                                                @elseif($order->status == 3)
                                                    <span class="text-primary">Pending (Sedang menunggu update
                                                        pelapor)</span>
                                                @elseif($order->status == 4)
                                                    <span class="text-primary">Laporan Selesai</span> --}}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($order->status != 2)
                                                    <a class="mr-1"
                                                        href="/app/dashboard/blog/view/{{ $order->blogID }}"><i
                                                            class="bx bx-search-alt-2 me-1"></i>
                                                        View</a>
                                                    <a class="mr-1" href="/app/dashboard/blog/cancel/{{ $order->blogID }}"
                                                        data-method="get"><i class="bx bx-x me-1"></i>
                                                        Cancel</a>
                                                    <a class="mr-1" href="/app/dashboard/blog/delete/{{ $order->blogID }}"
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
                <a href="/app/dashboard/blog/print" target="_blank" class="btn btn-primary" disabled>
                    <span class="tf-icons bx bx-printer"></span>&nbsp; Print</a>
            </div>
        </div>
    </div>
    </div>
@endsection
