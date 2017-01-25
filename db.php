<?php
$server = "127.0.0.1";
$Username = "root";
$Password = "15@aws.john";
$dbname = "userlogin";
// Create connection
$conn = new mysqli($server, $Username, $Password, $dbname);

//Check connection
if (mysqli_connect_error()) {
die("Connection failed: " . mysqli_connect_error());
}
 echo "Connected successfully";
?>

