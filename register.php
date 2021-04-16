<!DOCTYPE html>
<html lang="en">

<?php
    session_start();                                       // Start/Resumes the user session so we can track them accross the site.

    if($_SESSION['loggedIn'] == true) {                    // If the user is logged in already
        header("Location: ./user/dashboard.php");          // Redirect them to the dashboard
    }
    
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/register.css">

    <title>Register</title>
</head>
<body>

    <div class="content">
        <img class="logo" src="./images/GroenHuis_logo.jpg"></img>
        <h1 class="logo-text">Register</h1>

        <form action="./post/register.php" method="post">
            <label for="username">Username</label><br>  
            <input type="text" name="username" id="username"><br><br>

            <label for="email">Email</label><br>  
            <input type="text" name="email" id="email"><br><br>

            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br><br>

            <a href="./login.php">Already have an account?</a><br>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>