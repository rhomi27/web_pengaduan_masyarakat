const passwordInput = document.getElementById('password');
const showPasswordCheckbox = document.getElementById('showPassword');

    showPasswordCheckbox.addEventListener('change', function () {
        if (showPasswordCheckbox.checked) {
            // Jika checkbox diceklis, ubah tipe input menjadi "text"
            passwordInput.setAttribute('type', 'text');
        } else {
            // Jika checkbox tidak diceklis, ubah tipe input menjadi "password"
            passwordInput.setAttribute('type', 'password');
        }
    });