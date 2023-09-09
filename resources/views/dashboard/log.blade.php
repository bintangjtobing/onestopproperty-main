@extends('dashboard.template')
@section('title', 'Log Aktifitas')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Misc /</span> Log Aktifitas</h4>
        <div class="row">
            <div class="col-lg-12 order-0">
                <div class="card my-3">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="vertical-align : middle;text-align:left;">R</th>
                                    <th style="vertical-align : middle;text-align:left;">Nama User</th>
                                    <th style="vertical-align : middle;text-align:left;">Aktifitas</th>
                                    <th style="vertical-align : middle;text-align:left;">Tipe</th>
                                    <th style="vertical-align : middle;text-align:left;">Tanggal/Waktu</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @if ($logs->count() >= 1)
                                    @foreach ($logs as $log)
                                        <tr>
                                            <td>{{ $log->log_name }}
                                            </td>
                                            <td>
                                                {{ $log->userId['name'] ?? 'None' }}
                                            </td>
                                            <td>{{ $log->description }}
                                            </td>
                                            <td>
                                                @if ($log->causer_type == 'GET')
                                                    <span class="badge bg-success">GET</span>
                                                @endif
                                                @if ($log->causer_type == 'POST')
                                                    <span class="badge bg-info">POST</span>
                                                @endif
                                                @if ($log->causer_type == 'PUT')
                                                    <span class="badge bg-warning">PUT</span>
                                                @endif
                                                @if ($log->causer_type == 'DELETE')
                                                    <span class="badge bg-danger">DELETE</span>
                                                @endif
                                                @if ($log->causer_type == 'LOGOUT')
                                                    <span class="badge bg-danger">LOGOUT</span>
                                                @endif
                                                @if ($log->causer_type == 'LOGIN')
                                                    <span class="badge bg-dark">LOGIN</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $log->created_at }}
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
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
