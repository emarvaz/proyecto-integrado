document.addEventListener('DOMContentLoaded', function () {
    const tableCellDeleteButtons = document.querySelectorAll('.table__cell__delete');

    tableCellDeleteButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            const deleteUrl = this.getAttribute('href');

            Swal.fire({
                title: '¿Estás seguro de que quieres eliminar?',
                text: 'No habrá vuelta atrás.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar'
            }).then(function (result) {
                if (result.isConfirmed) {
                    window.location.href = deleteUrl;
                }
            });
        });
    });
});
