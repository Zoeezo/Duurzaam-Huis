<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/dashboard.css">

    <title>Dashboard</title>
</head>
<body>
<div id="dashboard">
    <div class="titlebar">
    <a href="../user/dashboard.php"> <img class="logo_nav" src="../images/GroenHuis_logo.jpg" style="height:65px; width: auto; padding-left: 10px;" ></img></a>
    
    <div class="buttons">
        <a class="button" href="./Settings.php">Account settings</a>
        <a class="button" id="logout-button" href="../index.php">Logout</a>
    </div>
    </div>
    <div class="widget energie"> Energie</div>
    <div class="widget gas"> Gas</div>
    <div class="widget water"> Water</div>
    <div class="widget invoer">Invoer</div>
    <div class="widget stats">Stats</div>
</div>

</body>
</html>