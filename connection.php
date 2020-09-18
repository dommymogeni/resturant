<?php
//creating variables to enable database connection
$server="localhost";
$username="root";
$password="";
$database="amin";
// Create connection
$conn = mysqli_connect($server, $username, $password, $database);
// Checking the connection if not succesfull
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};

?>