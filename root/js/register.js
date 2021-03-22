// username browser validation (cant be trusted but we can catch errors before users submit data)
const usernameInput = document.getElementById('username');
const usernameError = document.getElementById('username-error');

let usernameValid = false;

usernameInput.onkeyup = function() {
    if(usernameInput.value.length == 0) {
        usernameError.innerText = "Field Can't be empty!";
        usernameValid = false;
    } else if(usernameInput.value.length < 3) {
        usernameError.innerText = "Min. length is 3 characters!";
        usernameValid = false;
    } else if(usernameInput.value.length > 12) {
        usernameError.innerText = "Max. length is 12 characters!";
        usernameValid = false;
    }
    else {
        usernameError.innerText = '';
        usernameValid = true;
    }
}

// email browser validation (cant be trusted but we can catch errors before users submit data)
const emailInput = document.getElementById('email');
const emailError = document.getElementById('email-error');
const regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

let emailValid = false;

function isValidEmail(email) {
    return regex.test(email);
}

emailInput.onkeyup = function() {
    if(emailInput.value.length == 0) {
        emailError.innerText = "Field Can't be empty!";
        emailValid = false;
    } else if(!isValidEmail(emailInput.value)) {
        emailError.innerText = 'Invalid email address!';
        emailValid = false;
    }
    else {
        emailError.innerText = '';
        emailValid = true;
    }
}

// password browser validation (cant be trusted but we can catch errors before users submit data)
const passwordInput = document.getElementById('password');
const passwordError = document.getElementById('password-error');

let passwordValid = false;

passwordInput.onkeyup = function() {
    if(passwordInput.value.length == 0) {
        passwordError.innerText = "Field Can't be empty!";
        passwordValid = false;
    } else if(passwordInput.value.length < 6) {
        passwordError.innerText = "Min. length is 6 characters!";
        passwordValid = false;
    } 
    else {
        passwordError.innerText = '';
        passwordValid = true;
    }
}

// Handle request to server
const registerButton = document.getElementById('register-button');
const registerForm = document.getElementById('register-form');
const url = '../post/register.php';

let registering = false;

registerButton.addEventListener('click', event => {
    event.preventDefault();

    if(usernameValid == false || emailValid == false || passwordValid == false) {
        return;
    }

    if(registering == false) {
        registering = true;

        let request = new XMLHttpRequest();

        request.onreadystatechange = () => {
            if(request.readyState == 4 && request.status == 200) {
                console.log(request.responseText);

                registering = false;
            }
        }

        let formData = new FormData(registerForm);

        request.open('POST', url, true);
        request.send(formData);
    }
});