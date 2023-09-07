@if (isset($aksi))

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

@endif