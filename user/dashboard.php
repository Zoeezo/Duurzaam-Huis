<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script type="text/javascript" src="../js/weerlive.js"></script>
    
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
    <div class="widget energie"><b> Energie:<br> </b> <?php include "../standen.php" ?> </div>
    <div class="widget gas"> Gas</div>
    <div class="widget water"> Water</div>
    <div class="widget invoer"></div>
    <div id="weather" class="widget weer">
            <select id="city">
                <option value="Amsterdam">Amsterdam</option>
                <option value="Alkmaar">Alkmaar</option>
                <option value="Utrecht">Utrecht</option>
                <option value="Heerhugowaard">Heerhugowaard</option>
            </select>
            <div id="live">
          
            <h1>Klik op u huidige locatie voor u weer bericht..</h1>
         </div>
    </div>
    <div class="widget tijd"> <h1>Huidige Tijd: <br></h1> 
    <div class="time" id="clock">000000</div>
    </div>


    </div>

<script type="text/javascript" src="../js/tijd.js"> huidigeTijd();</script>


</body>
</html>