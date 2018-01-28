<?php
//MySQLi connection

$conn = new mysqli("localhost","root","","db_bluehacks");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$origin;
$destination;
?>