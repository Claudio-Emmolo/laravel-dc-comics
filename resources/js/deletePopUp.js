const deleteBtn = document.querySelectorAll('form.delete');

deleteBtn.forEach((formDelete) => {
    formDelete.addEventListener('submit', function (event) {
        event.preventDefault();
        const popUp = window.confirm('Sei sicuro di voler eliminare?');
        if (popUp) this.submit();
    });

});