@extends('dashboard.template')
@section('title', 'Data Relawan ' . $order->blogID)
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 text-left">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Detail Konten /</span>
                    #{{ $order->blogID }} - @if ($order->status == 0)
                        <span>Publish</span>
                    @elseif ($order->status == 1)
                        <span style="color:red;">Tidak Terpublish / Cancel Publish</span>
                    @endif
                </h4>
            </div>
            <div class="col-lg-4 text-right">
                <a class="fw-bold py-3 mb-4" href="/blog/{{ $order->slug }}" target="_blank"><i class='bx bx-search-alt'></i>
                    Lihat blog</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 order-0">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Detail konten <b>{{ $order->judul }}</b></h3>
                        <span>Dibuat pada tanggal {{ $order->created_at }}</span>

                        <hr>
                        <p class="card-text">
                        <div class="row">
                            <div class="col-lg-4">
                                Judul Konten
                                <br><span class="orderDetailText"
                                    style="text-transform:capitalize;">{{ $order->judul }}</span> <br><br>
                            </div>
                            <div class="col-lg-4">
                                Kategori
                                <br><span class="orderDetailText">{{ $order->categories['title'] }}</span> <br><br>
                            </div>
                            <div class="col-lg-8">
                                Deskripsi konten
                                <br><span class="orderDetailText">{!! $order->description !!}</span>
                                <br><br>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-0">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                        <h3>Gambar cover</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ URL::to('/blog_cover') }}/{{ $order->image_cover }}"
                                    style="max-width:300px;border:1px solid #d0d0d0; border-radius:.25rem;"
                                    data-lightbox="gallery-item" class="img-fluid">
                                    <img src="{{ URL::to('/blog_cover') }}/{{ $order->image_cover }}"
                                        alt="Foto Diri - {{ $order->blogID }}" class="img-fluid mx-2">
                                </a>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
