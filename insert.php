<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tetraining";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usertable(username, password) VALUES ('".$_POST['username']."','".$_POST['password']."')";

if ($conn->query($sql) === TRUE) {
   header("Location:index.php?status=Yes");
}  

$conn->close();
?> 