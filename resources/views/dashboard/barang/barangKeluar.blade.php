@extends('layouts.master')
@section('container')
<h1 class="h3 mb-3 text-gray-800">Data Barang Keluar</h1>
<div class="d-sm-flex align-items-center justify-content-end mb-4">

    <!-- Button trigger modal -->

    <!-- Modal -->
    {{-- @include('dashboard.barang.modal.barangModal') --}}
</div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Stok Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
