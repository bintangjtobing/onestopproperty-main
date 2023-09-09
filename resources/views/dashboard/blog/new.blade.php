@extends('dashboard.template')
@section('title', 'Edit Laporan Aduan ')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Konten Blog Baru
        </h4>
        <div class="row">
            <div class="col-lg-8 order-0">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Konten Blog Baru</h3>
                        <p class="card-text">
                        <form id="event-registration" action="/app/dashboard/blog" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-4 form-group my-2">
                                    <label>Judul <span class="required">*</span></label>
                                    <input type="text" name="judul" id="fullname" class="form-control">
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-4 form-group my-2">
                                    <label>Status <span class="required">*</span></label>
                                    <select name="status" id="" class="form-control">
                                        <option checked>Pilih Status</option>
                                        <option value="0">Published</option>
                                        <option value="1">Un-Published</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-4 form-group my-2">
                                    <label>Cover image <span class="required">*</span></label>
                                    <input type="file" name="image_cover" class="form-control">
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-4 form-group my-2">
                                    <label>Kategori <span class="required">*</span></label>
                                    <select name="category_id" id="" class="form-control">
                                        <option checked>Pilih Kategori</option>
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-4 form-group my-2">
                                    <label>Deskripsi <span class="required">*</span></label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-lg button-rounded mt-3"
                                        style="border-radius: 5rem; font-weight:700;"> <i class='bx bx-save'></i>
                                        Submit</button>
                                </div>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-0">

            </div>
        </div>
    </div>
@endsection
