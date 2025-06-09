document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    if (!form) return;

    const nameField = document.getElementById('ability_name');
    const descriptionField = document.getElementById('ability_description');
    const costField = document.getElementById('ability_cost');
    const valueField = document.getElementById('ability_value');
    const categoryField = document.getElementById('ability_category');

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
            showError(nameField, 'El nombre de la habilidad no puede estar vacío.');
            isValid = false;
        } else if (nameField.value.trim().length < 3 || nameField.value.trim().length > 50) {
            showError(nameField, 'El nombre debe tener entre 3 y 50 caracteres.');
            isValid = false;
        }

        if (descriptionField.value.trim() === '') {
            showError(descriptionField, 'La descripción no puede estar vacía.');
            isValid = false;
        } else if (descriptionField.value.trim().length < 10 || descriptionField.value.trim().length > 255) {
            showError(descriptionField, 'La descripción debe tener entre 10 y 255 caracteres.');
            isValid = false;
        }

        if (costField.value.trim() === '') {
            showError(costField, 'Debes especificar un coste.');
            isValid = false;
        } else if (isNaN(parseInt(costField.value, 10)) || parseInt(costField.value, 10) < 0) {
            showError(costField, 'El coste debe ser un número igual o mayor que cero.');
            isValid = false;
        }

        if (valueField.value.trim() === '') {
            showError(valueField, 'Debes especificar un valor.');
            isValid = false;
        } else if (isNaN(parseInt(valueField.value, 10))) {
            showError(valueField, 'El valor debe ser un número.');
            isValid = false;
        }

        if (categoryField.value === '') {
            showError(categoryField, 'Debes seleccionar una categoría.');
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});
