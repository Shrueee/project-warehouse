@extends('layouts.master')
@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Akun Pemasok</h1>
    
    <!-- Modal -->
    @include('dashboard.barang.modal.pegawaiModal')
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Akun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            <a class="btn btn-info" href="/akun-supplier/detail/{{ $user->id }}">Detail</a>
                            <a class="btn btn-danger" href="/akun-supplier/hapus/{{ $user->id }}">Blokir</a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection