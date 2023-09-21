var hapusModal = document.getElementById('hapusModal')
hapusModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var id = button.getAttribute('data-bs-whatever')
  var nama = button.getAttribute('data-bs-name')
  var ModalId = hapusModal.querySelector('.modal-body input#id')
  var ModalNama = hapusModal.querySelector('.modal-body label#name')

  ModalId.value = id
  ModalNama.textContent = "Apakah anda yakin menghapus barang " + nama
})