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
$counsellor_id = $_POST['counsellor-select'];

$counsellor_name_query = "SELECT name FROM counsellors WHERE id = $counsellor_id";
$counsellor_name_result = mysqli_query($conn, $counsellor_name_query);
$counsellor_name = mysqli_fetch_assoc($counsellor_name_result)['name'];

$date = $_POST['date-input'];
$time = $_POST['time-input'];
$message = $_POST['message-input'];
$payment = $_POST['payment-select'];
$user_id = $_SESSION['id'];

// Insert the data into the MySQL database
$sql = "INSERT INTO appointments (counsellors_id, counsellors_name, date, time, message, payment, user_id)
VALUES ('$counsellor_id', '$counsellor_name', '$date', '$time', '$message', '$payment', '$user_id')";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('New record created successfully');</script>";
    header("location: Counsellors.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
