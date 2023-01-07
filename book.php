<?php

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

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $date = mysqli_real_escape_string($conn, $_POST['date-input']);
  $time = mysqli_real_escape_string($conn, $_POST['time-input']);
  $message = mysqli_real_escape_string($conn, $_POST['message-input']);
  $payment = mysqli_real_escape_string($conn, $_POST['payment-select']);
  $counsellor_name = mysqli_real_escape_string($conn, $_POST['counsellor_name']);
  
  // Insert the data into the appointments table
  $query = "INSERT INTO appointments (date, time, message, payment, counsellor_name) VALUES ('$date', '$time', '$message', '$payment', '$counsellor_name')";
  
  if (mysqli_query($conn, $query)) {
      echo "Booking added successfully";
  } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}

// Close the connection
mysqli_close($conn);
?>
