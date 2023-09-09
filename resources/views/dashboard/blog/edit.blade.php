@extends('dashboard.template')
@section('title', 'Edit Laporan Aduan ')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tindak Lanjut Laporan {{ $order->type }} Masyrakat
                /</span>
            #{{ $order->reportID }}
        </h4>
        <div class="row">
            <div class="col-lg-8 order-0">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Proses Laporan {{ $order->type }}</h3>
                        <div class="card-subtitle text-muted mb-3">#{{ $order->reportID }}</div>
                        <p class="card-text">
                        <form id="event-registration" action="/app/dashboard/complaint/edit/{{ $order->reportID }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-4 form-group my-2">
                                    <label>Nama PIC: <span class="required">*</span></label>
                                    <input type="text" name="fullname" id="fullname" class="form-control" disabled
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-4 form-group my-2">
                                    <label>Status: <span class="required">*</span></label>
                                    <select name="status" id="" class="form-control">
                                        <option checked>Pilih Status</option>
                                        <option value="1">On Progress</option>
                                        <option value="3">Pending</option>
                                        <option value="4">Done</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-4 form-group my-2">
                                    <label>Jelaskan deskripsi tindak-lanjutnya: <span class="required">*</span></label>
                                    <textarea name="descriptionUpdate" id="" cols="30" rows="10" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-lg button-rounded mt-3"
                                        style="border-radius: 5rem; font-weight:700;"> Update</button>
                                </div>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-0">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Detail Singkat Laporan {{ $order->type }}</h3>
                        <div class="card-subtitle text-muted mb-3">#{{ $order->reportID }} - @if ($order->status == 0)
                                <span class="text-primary">Telah terkirim ke pusat aduan</span>
                            @elseif($order->status == 1)
                                <span class="text-primary">On Progress</span>
                            @elseif($order->status == 3)
                                <span class="text-primary">Pending (Sedang menunggu update pelapor)</span>
                            @elseif($order->status == 4)
                                <span class="text-primary">Laporan Selesai</span>
                            @endif
                        </div>
                        <p class="card-text">
                        <div class="row">
                            <div class="col-lg-6">
                                Tipe laporan
                                <br><span class="orderDetailText"
                                    style="text-transform:capitalize;">{{ $order->type }}</span> <br><br>
                            </div>
                            <div class="col-lg-6">
                                Tanggal Kejadian
                                <br><span class="orderDetailText">{{ $order->incidentDate }}</span> <br><br>
                            </div>
                            <div class="col-lg-12">
                                Judul Laporan
                                <br><span class="orderDetailText">{{ $order->title }}</span>
                                <br><br>
                            </div>
                            <div class="col-lg-12">
                                Description
                                <br><span class="orderDetailText">{{ $order->description }}</span>
                                <br><br>
                            </div>
                        </div>
                        <hr>
                        <h3 class="card-title">Tentang Pelapor</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                Nama Pelapor
                                <br><span class="orderDetailText">{{ $order->namaPelapor ?? '-' }}</span>
                                <br><br>
                            </div>
                            <div class="col-lg-6">
                                No.HP pelapor
                                <br><span class="orderDetailText">{{ $order->noHP ?? '-' }}</span>
                                <br><br>
                            </div>
                            <div class="col-lg-6">
                                Email pelapor
                                <br><span class="orderDetailText">{{ $order->email ?? '-' }}</span>
                                <br><br>
                            </div>
                            <div class="col-lg-12">
                                Alamat laporan
                                <br><span class="orderDetailText">{{ $order->fullAddress ?? '-' }}</span>
                                <br><br>
                            </div>
                            <div class="col-lg-12">
                                Kota / Kabupaten
                                <br><span class="orderDetailText">{{ $order->kota ?? '-' }}</span>
                                <br><br>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
