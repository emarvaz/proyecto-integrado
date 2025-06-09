document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    if (!form) return;

    const nameField = document.getElementById('ability_category_name');
    const descriptionField = document.getElementById('ability_category_description');

    const showError = (field, message) => {
        field.classList.add('is-invalid');
        const errorContainer = document.createElement('div');
        errorContainer.className = 'form-error-message';
        errorContainer.innerText = message;
        field.parentNode.insertBefore(errorContainer, field.nextSibling);
    };

    const clearErrors = () => {
        document.querySelectorAll('.form-error-message').forEach(e => e.remove());
        document.querySelectorAll('.is-invalid').forEach(f => f.classList.remove('is-invalid'));
    };

    form.addEventListener('submit', (event) => {
        clearErrors();
        let isValid = true;

        if (nameField.value.trim() === '') {
            showError(nameField, 'El nombre de la categoría no puede estar vacío.');
            isValid = false;
        } else if (nameField.value.trim().length < 3 || nameField.value.trim().length > 50) {
            showError(nameField, 'El nombre debe tener entre 3 y 50 caracteres.');
            isValid = false;
        }

        const description = descriptionField.value.trim();
        if (description.length > 0 && (description.length < 10 || description.length > 1000)) {
            showError(descriptionField, 'Si se incluye una descripción, debe tener entre 10 y 1000 caracteres.');
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});
