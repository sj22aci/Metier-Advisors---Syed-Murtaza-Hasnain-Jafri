<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$host = "localhost";
$username = "root";
$password = "";
$dbname = "temp";

// Create connection
$link = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>