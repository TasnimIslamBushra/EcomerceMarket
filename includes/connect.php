<?php
$servername = "localhost";
$username = "root";
$password = ""; // your MySQL password
$database = "mystore"; // your MySQL database name

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
