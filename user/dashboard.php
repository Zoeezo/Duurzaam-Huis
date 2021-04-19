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
    <script src="../js/grafiek.js"></script>
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    
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
    <div class="widget gas"> <b>grafiek info:</b> 
        <p> Temp binnen dit jaar</p><div class="square1"></div>
        <p>Temp binnen vorig jaar<div class="square2"></div></p> 

        </div>
    <div class="widget water "> Water</div>
    <div class="widget invoer" id="grafiek">
    </div>
    <div id="weather" class="widget weer">
            <select id="city">
                <option value="Amsterdam">Amsterdam</option>
                <option value="Utrecht">Utrecht</option>
                <option value="Alkmaar">Alkmaar</option>
                <option value="Heerhugowaard">Heerhugowaard</option>
                <option value="Groningen">Groningen</option>
                <option value="Maastricht">Maastricht</option>
                <option value="Friesland">Friesland</option>
            </select>
        <div id="live">
            <img class="imgs" src="../images/loading.gif" />
            <h1>Klik op u huidige locatie voor u weer bericht..</h1>
            <h3 ></h3>
            <p id="neerslag"></p>
            <p id="zon"></p>
            <p id="Kansop"></p>
        </div>
    </div>
    <div class="widget tijd"> <h1>Huidige Tijd: <br></h1> 
    <div class="time" id="clock">000000</div>
    </div>


</div>

<script type="text/javascript" src="../js/tijd.js"> huidigeTijd();</script>


</body>
</html>