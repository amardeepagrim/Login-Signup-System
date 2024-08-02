<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "animeture";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo"connected succesfully";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
