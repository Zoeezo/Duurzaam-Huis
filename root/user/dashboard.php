<?php
    session_start();

    if($_SESSION['loggedIn'] != true) {
        header("Location: ../../");
        die();
    }

    $server  = 'localhost';
    $database = 'dashboard';
    $table = 'userdata';
    $name = 'root';
    $pwd = 'root';

    $connect = mysqli_connect("$server:3306", $name, $pwd, $database);

    if (mysqli_connect_errno()) {
        throw new Exception("Connect error: " . mysqli_connect_error());
    }

    $userid = $_SESSION['userid'];

    $sql = "SELECT * FROM $table WHERE userid = \"$userid\"";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) == 0) {   // If there are no rows that means there's no data for that user yet
        $sql2 = "INSERT INTO $table(`userid`, `energy`, `water`, `gas`) VALUES (\"$userid\",\"{}\",\"{}\",\"{}\")";
        mysqli_query($connect, $sql2);
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