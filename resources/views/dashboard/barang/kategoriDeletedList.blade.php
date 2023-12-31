@extends('layouts.master')
@section('container')
<h1 class="h3 mb-0 text-gray-800">Kategori</h1>
<div class="d-sm-flex align-items-center justify-content-end mb-4">

    <!-- Button trigger modal -->
    <a href="/daftar-kategori" class="btn btn-secondary">Kembali</a>

    <!-- Modal -->
    @include('dashboard.barang.modal.KategoriModal')
</div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Banyak Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deletedCategory as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><b>{{ $category->name }}</b></td>
                            <td>{{ $category->Products->count() }}</td>
                            <td>
                                <a class="btn btn-danger" href="/kategori-barang/{{ $category->id }}">Pulihkan</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
