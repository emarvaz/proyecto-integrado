document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    if (!form) {
        return;
    }

    const usernameField = document.getElementById('user_username');
    const emailField = document.getElementById('user_email');
    const passwordField = document.getElementById('user_password');
    const nameField = document.getElementById('user_name');
    const lastnameField = document.getElementById('user_lastname');

    const showError = (field, message) => {
        field.classList.add('is-invalid');
        const errorContainer = document.createElement('div');
        errorContainer.className = 'form-error-message';
        errorContainer.innerText = message;
        field.parentNode.insertBefore(errorContainer, field.nextSibling);
    };

    const clearErrors = () => {
        document.querySelectorAll('.form-error-message').forEach(error => error.remove());
        document.querySelectorAll('.is-invalid').forEach(field => field.classList.remove('is-invalid'));
    };

    const validatePasswordStrength = (password) => {
        if (password.length < 8) {
            return 'La contraseña debe tener al menos 8 caracteres.';
        }

        if (!/\d/.test(password)) {
            return 'La contraseña debe contener al menos un número.';
        }

        if (!/[@$!%*#?&^._-]/.test(password)) {
            return 'La contraseña debe contener al menos un carácter especial.';
        }
        return null;
    };

    form.addEventListener('submit', (event) => {
        clearErrors();
        let isValid = true;

        if (usernameField) {
            const username = usernameField.value.trim();
            if (username === '') {
                showError(usernameField, 'El nombre de usuario es obligatorio.');
                isValid = false;
            } else if (username.length < 3 || username.length > 25) {
                showError(usernameField, 'Debe tener entre 3 y 25 caracteres.');
                isValid = false;
            }
        }

        if (emailField) {
            const email = emailField.value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === '') {
                showError(emailField, 'El correo electrónico es obligatorio.');
                isValid = false;
            } else if (!emailRegex.test(email)) {
                showError(emailField, 'El formato del email no es válido.');
                isValid = false;
            }
        }

        if (passwordField) {
            const password = passwordField.value;
            if (passwordField.required && password === '') {
                showError(passwordField, 'La contraseña es obligatoria.');
                isValid = false;
            } else if (password.length > 0) {
                const passwordError = validatePasswordStrength(password);
                if (passwordError) {
                    showError(passwordField, passwordError);
                    isValid = false;
                }
            }
        }

        if (nameField && nameField.value.trim().length > 25) {
            showError(nameField, 'El nombre no puede superar los 25 caracteres.');
            isValid = false;
        }
        if (lastnameField && lastnameField.value.trim().length > 60) {
            showError(lastnameField, 'Los apellidos no pueden superar los 60 caracteres.');
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});