<?php
$servername="";
$username="";
$password="";
$dbname ="project";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error);

$settimezone = "SET time_zone = '+02:00';";
mysqli_query($conn, $settimezone);
?>
