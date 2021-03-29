<!DOCTYPE html>
<html lang="en">

<?php
    session_start();                                // Start/Resumes the user session so we can track them accross the site.

    if($_SESSION['loggedIn'] == true) {             // If the user is logged in already
        header("Location: ../user/dashboard");      // Redirect them to the dashboard
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/login.css">

    <title>Login</title>
</head>
<body>

    <div class="content">
        <h1 class="logo-text">Login</h1>

        <form id="login-form" method="post">
            <label for="username">Username</label><br>  
            <input type="text" name="username" id="username">
            <p class="error-text" id="username-error"></p>

            <label for="password">Password</label><br>
            <input type="password" name="password" id="password">
            <p class="error-text" id="password-error"></p>

            <a href="../register">Don't have an account?</a><br>
            <input type="submit" value="Login" id="login-button">
        </form>
    </div>

    <script src="../js/login.js"></script>
</body>
</html>