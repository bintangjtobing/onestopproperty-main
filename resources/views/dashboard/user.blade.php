@extends('dashboard.template')
@section('title', 'Account')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account setting /</span> List account user</h4>
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
                                                <a class="mr-1" href="#"><i class="bx bx-edit me-1"></i>
                                                    Edit</a>
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
    </div>
@endsection
