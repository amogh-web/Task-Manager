<?php 
$servername = "localhost";
$username = "root";
$password = "";
$DBName = "tm";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$DBName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
  // echo "done";
}
?>