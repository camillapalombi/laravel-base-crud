require('./bootstrap');

import 'bootstrap';


var deleteConfirm = document.getElementById('delete-confirm');

if (deleteConfirm) {
  var confirmationForm = deleteConfirm.querySelector('form');
  document.querySelectorAll('.btn-delete').forEach(function (button) {
    button.addEventListener('click', function () {
      // mostrare l'overlay di conferma
      deleteConfirm.classList.remove('d-none');
      confirmationForm.action = confirmationForm.dataset.base + '/' + this.dataset.id;
    });
  });
  document.getElementById('btn-no').addEventListener('click', function () {
    confirmationForm.action = '';
    deleteConfirm.classList.add('d-none');
  });
}
