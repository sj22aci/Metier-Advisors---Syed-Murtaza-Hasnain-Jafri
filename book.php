<?php

session_start();

// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "metier-advisors";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$counsellor = $_POST['counsellor-select'];
$date = $_POST['date-input'];
$time = $_POST['time-input'];
$message = $_POST['message-input'];
$payment = $_POST['payment-select'];
$user_id = $_SESSION['id'];

// Insert the data into the MySQL database
$sql = "INSERT INTO appointments (counsellors_id, date, time, message, payment, user_id)
VALUES ('$counsellor', '$date', '$time', '$message', '$payment', '$user_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
