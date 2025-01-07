import './bootstrap';
import 'bootstrap';


document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('exampleInputPassword1');
    const toggleButton = this;

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleButton.textContent = 'Nascondi Password';
    } else {
        passwordField.type = 'password';
        toggleButton.textContent = 'Mostra Password';
    }
});