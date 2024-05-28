import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const allDeleteButtons = document.querySelectorAll('.js-delete-btn');
allDeleteButtons.forEach((deleteButton) => {
    deleteButton.addEventListener('click', function(event) {
        event.preventDefault();
        
        const deleteModal = document.getElementById('confirmDeleteModal');
        
        const movieTitle = this.dataset.movieTitle;
        deleteModal.querySelector('.modal-body').innerHTML = `Sei sicuro di voler eliminare ${movieTitle}?`;

        const bsDeleteModal = new bootstrap.Modal(deleteModal);
        bsDeleteModal.show();

        const modalConfirmDeletionBtn = document.getElementById('modal-confirm-deletion');
        modalConfirmDeletionBtn.addEventListener('click', function() {

            deleteButton.parentElement.submit();
        });
    });
});