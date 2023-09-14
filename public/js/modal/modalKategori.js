var editModal = document.getElementById('editModal')
editModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var name = button.getAttribute('data-bs-whatever')
  var ModalName = editModal.querySelector('.modal-body input#name')

  ModalName.value = name
})

var hapusModal = document.getElementById('hapusModal')
hapusModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var name = button.getAttribute('data-bs-whatever')

  ModalId.value = id
  ModalNama.textContent = "Apakah anda yakin menghapus kategori " + name
})
