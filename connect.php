<?php
$servername = "localhost";
$email = "email";
$password = "password";
$db = "hello";
// Create connection
$conn = mysqli_connect($servername, $email, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>