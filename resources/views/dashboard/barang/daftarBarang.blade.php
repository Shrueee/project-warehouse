@extends('layouts.master')
@section('container')
<h1 class="h3 mb-3 text-gray-800">Data Barang</h1>
<div class="d-sm-flex align-items-center justify-content-end mb-4">
    
    <!-- Button trigger modal -->
    <a href="/barang-deleted" class="btn btn-secondary mr-3">Data Yang Dihapus</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus"></i>&nbsp;
        Tambah Barang
    </button>

    <!-- Modal -->
    @include('dashboard.barang.modal.barangModal')
</div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Stok Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->Category->name }}</td>
                                <td>{{ $product->qty }}</td>
                                <td>
                                    <a class="btn btn-warning" href="/daftar-barang/edit/{{ $product->id }}">Edit</a>
                                    <a class="btn btn-danger" href="/daftar-barang/hapus/{{ $product->id }}">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
