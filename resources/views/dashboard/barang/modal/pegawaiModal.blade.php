{{-- @if (isset($aksi))

<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
    style="display: block">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <div class="form-group">
                        <label>
                            {{ 'apakah anda yakin ingin memblokir '. $hapus->name .'?' }}
                        </label>
                    </div>
                    <div class="modal-footer">
                        <a href="/akun-pegawai" class="btn btn-secondary">Batal</a>
                        <input type="submit" class="btn btn-danger" value="Hapus">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif --}}

{{-- hapus --}}
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Blokir Pengguna</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/akun-pegawai/hapus" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" class="form-control" id="id" name="id" autocomplete="off" readonly hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-danger" value="Hapus">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>