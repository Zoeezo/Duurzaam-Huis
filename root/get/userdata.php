<?php
session_start();

if($_SESSION['loggedIn'] != true) {
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

$row = mysqli_fetch_assoc($result);

echo json_encode($row);