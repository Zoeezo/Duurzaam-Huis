<?php
$host = "127.0.0.1";
$user = "c2769Streats1";
$pass = "test1234!";
$database = "c2769BO";


/*$host = "localhost";
$user = "root";
$pass = "root";
$database = "energie";*/

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
echo "Datum van invoer " . $row["datum"]. " | " . $row["item"]. " | " .$row["stand"] . "<br>"; 
}
} else {
echo "0 results";
}
$conn->close();

?>

