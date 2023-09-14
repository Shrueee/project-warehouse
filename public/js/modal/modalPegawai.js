var editModal = document.getElementById('editModal')
editModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var id = button.getAttribute('data-bs-whatever')
  var nama = button.getAttribute('data-bs-name')
  var kateg = button.getAttribute('data-bs-kateg')
  var jumlah = button.getAttribute('data-bs-qty')
  var ModalId = editModal.querySelector('.modal-body input#id')
  var ModalName = editModal.querySelector('.modal-body input#name')
  var ModalKateg = editModal.querySelectorAll('.modal-body select option')
  var ModalJumlah = editModal.querySelector('.modal-body input#jumlah')

  ModalId.value = id
  ModalName.value = nama
  ModalKateg.forEach(element => {
    if (element.innerHTML == kateg) {
        element.setAttribute('selected', true)
    }else{
        element.removeAttribute('selected')
    }
  });
  ModalJumlah.value = jumlah
})

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