// Handle request to server
const usernameError = document.getElementById('username-error');
const passwordError = document.getElementById('password-error');
const loginButton = document.getElementById('login-button');
const loginForm = document.getElementById('login-form');
const url = '../post/login.php';

let loggingIn = false;

loginButton.addEventListener('click', event => {
    event.preventDefault();

    if(loggingIn== false) {
        loggingIn = true;

        let request = new XMLHttpRequest();

        request.onreadystatechange = () => {
            if(request.readyState == 4 && request.status == 200) {
                let responseJSON = JSON.parse(request.responseText);

                handleResponse(responseJSON);
            }
        }

        let formData = new FormData(loginForm);

        request.open('POST', url, true);
        request.send(formData);
    }
});

function handleResponse(responseJSON) {
    let success = responseJSON['success'];
    console.log(responseJSON)

    if(success) {
        window.location.href = '../user/dashboard';
    } else {
        let errors = responseJSON['errors'];

        usernameError.innerText = '';
        passwordError.innerText = '';

        errors.forEach(error => {
            let errorType = error['errorType'];
            let errorText = error['error'];

            if(errorType == 'username') {
                usernameError.innerText = errorText;
            }

            else if(errorType == 'password') {
                passwordError.innerText = errorText;
            }
        });
    }

    loggingIn = false;
}