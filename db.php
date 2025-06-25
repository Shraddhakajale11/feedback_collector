<?php
$servername = "localhost";
$username = "root";          // change if needed
$password = "";              // change if needed
$dbname = "feedback_system"; // from your mysql.sql

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
