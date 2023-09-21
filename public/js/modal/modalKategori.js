~var editModal = document.getElementById('editModal')
editModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var id = button.getAttribute('data-bs-whatever')
  var name = button.getAttribute('data-bs-name')
  var ModalId = editModal.querySelector('.modal-body input#id')
  var ModalName = editModal.querySelector('.modal-body input#name')

  ModalId.value = id
  ModalName.value = name
})

var hapusModal = document.getElementById('hapusModal')
hapusModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var id = button.getAttribute('data-bs-whatever')
  var name = button.getAttribute('data-bs-name')
  var ModalId = hapusModal.querySelector('.modal-body input#id')
  var ModalNama = hapusModal.querySelector('.modal-body label#name')

  ModalId.value = id
  ModalNama.textContent = "Apakah anda yakin menghapus kategori " + name
})
