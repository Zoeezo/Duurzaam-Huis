<?php
    session_start();

    if($_SESSION['loggedIn'] != true) {
        header("Location: ../../");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/dashboard.css">

    <title>Dashboard</title>
</head>
<body>
    <div class="titlebar">
        <h1 id="titlebar-text" class="logo-text">Duurzaam huis</h1>

        <div class="buttons">
            <a class="button" href="../settings">Account settings</a>
            <a class="button" id="logout-button" href="../logout">Logout</a>
        </div>
    </div>
</body>
</html>