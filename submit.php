<?php
$stand = $_POST['stand'];
$datum = $_POST['datum'];
$water = $_POST['water'];
$gas = $_POST['gas'];
$energie = $_POST['energie'];

$host = "localhost";
$user = "root";
$pass = "root";
$database = "energie";

$conn = new mysqli($host, $user, $pass, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT datum, item, stand FROM `standen` ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["datum"].  $row["item"]. $row["stand"] . "<br>"; 
}
} else {
echo "0 results";
}
$conn->close();
?>