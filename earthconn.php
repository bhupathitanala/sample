<?php
$servername = "spotcoders.com";
$username = "admin";
$password = "Job@9198";
$db="rearthbased";

// Create asaconnection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>