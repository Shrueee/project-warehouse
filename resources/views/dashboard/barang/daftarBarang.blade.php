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
                            <th>Kode</th>
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
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->Category->name }}</td>
                                <td>{{ $product->qty }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="{{ $product->id }}" data-bs-name="{{ $product->name }}" data-bs-kateg="{{ $product->Category->name }}" data-bs-qty="{{ $product->qty }}">Edit</button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-whatever="{{ $product->id }}" data-bs-name="{{ $product->name }}">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/modal/modalBarang.js') }}"></script>
@endsection
