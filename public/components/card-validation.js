document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    if (!form) return;

    const nameField = document.getElementById('card_name');
    const descriptionField = document.getElementById('card_description');
    const healthField = document.getElementById('card_health');
    const abilitiesContainer = document.getElementById('card_abilities');

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

    if (abilitiesContainer) {
        const checkboxes = abilitiesContainer.querySelectorAll('input[type="checkbox"]');
        const maxSelections = 2;

        const updateCheckboxStates = () => {
            const checkedCount = Array.from(checkboxes).filter(cb => cb.checked).length;
            if (checkedCount >= maxSelections) {
                checkboxes.forEach(cb => {
                    if (!cb.checked) {
                        cb.disabled = true;
                        cb.closest('label').classList.add('opacity-50', 'cursor-not-allowed');
                    }
                });
            } else {
                checkboxes.forEach(cb => {
                    cb.disabled = false;
                    cb.closest('label').classList.remove('opacity-50', 'cursor-not-allowed');
                });
            }
        };

        checkboxes.forEach(cb => {
            cb.addEventListener('change', updateCheckboxStates);
        });

        updateCheckboxStates();
    }

    form.addEventListener('submit', (event) => {
        clearErrors();
        let isValid = true;

        if (nameField.value.trim() === '') {
            showError(nameField, 'El nombre de la carta no puede estar vacío.');
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

        if (healthField.value.trim() === '') {
            showError(healthField, 'La salud no puede estar vacía.');
            isValid = false;
        } else if (isNaN(parseInt(healthField.value, 10)) || parseInt(healthField.value, 10) <= 0) {
            showError(healthField, 'La salud debe ser un número positivo mayor que cero.');
            isValid = false;
        }

        if (abilitiesContainer) {
            const checkedAbilities = abilitiesContainer.querySelectorAll('input[type="checkbox"]:checked');
            if (checkedAbilities.length < 1) {
                showError(abilitiesContainer, 'La carta debe tener al menos una habilidad.');
                isValid = false;
            } else if (checkedAbilities.length > 2) {
                showError(abilitiesContainer, 'No puedes seleccionar más de 2 habilidades.');
                isValid = false;
            }
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});