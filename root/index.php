<!DOCTYPE html>
<html lang="en">

<?php
    session_start();                                // Start/Resumes the user session so we can track them accross the site.

    if($_SESSION['loggedIn'] == true) {             // If the user is logged in already
        header("Location: ../User/Dashboard");      // Redirect them to the dashboard
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/index.css">

    <title>Home</title>
</head>
<body>

    <div class="content">
        <h1 class="logo-text">Duurzaam huis</h1>        <!-- please update ASAP -->

        <div class="button-wrapper">
            <a class="button" href="./login">Login</a>
            <a class="button" href="./register">Register</a>
        </div>
    </div>
</body>
</html>