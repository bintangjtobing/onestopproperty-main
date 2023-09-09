@extends('dashboard.template')
@section('title', 'Account')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account setting /</span> List account user
                </h4>
            </div>
            <div class="col-lg-4 text-right">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddAccount">
                    <i class='bx bx-plus'></i> New Account
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalAddAccount" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Add New Account</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="/app/dashboard/account" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Name</label>
                                            <input type="text" id="nameWithTitle" name="name" class="form-control"
                                                placeholder="Enter Name" />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Username</label>
                                            <input type="text" id="nameWithTitle" name="username" class="form-control"
                                                placeholder="Enter Name" />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Email</label>
                                            <input type="text" id="emailWithTitle" name="email" class="form-control"
                                                placeholder="xxxx@xxx.xx" />
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Password</label>
                                            <input type="password" id="dobWithTitle" name="password" class="form-control"
                                                placeholder="*****" />
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 order-0">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card my-3">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="vertical-align : middle;text-align:left;">Nama</th>
                                    <th style="vertical-align : middle;text-align:left;">Email</th>
                                    <th style="vertical-align : middle;text-align:left;">Username</th>
                                    <th style="vertical-align : middle;text-align:left;">Status</th>
                                    <th style="vertical-align : middle;text-align:left;">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @if ($users->count() >= 1)
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}
                                            </td>
                                            <td>{{ $user->email }}
                                            </td>
                                            <td>{{ $user->username }}
                                            </td>
                                            <td>
                                                @if ($user->status == 0)
                                                    <span class="badge bg-label-danger me-1">Tidak aktif</span>
                                                @else
                                                    <span class="badge bg-label-success me-1">Aktif</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{-- <a class="mr-1" href="#"><i class="bx bx-edit me-1"></i>
                                                    Edit</a> --}}
                                                <a class="mr-1"
                                                    href="/app/dashboard/account/delete/{{ $user->id }}"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
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
                    {{ $users->onEachSide(5)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
