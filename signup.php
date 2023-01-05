<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "metier-advisors";

$conn = mysqli_connect($host, $user, $password, $dbname);

// Check if the login form has been submitted
if (isset($_POST["login"])) {
    // Get the login credentials from the request
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Escape the email and password to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Construct the SQL query to retrieve the user from the database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query returned a result
    if (mysqli_num_rows($result) > 0) {
        // Login is valid, redirect the user to the dashboard page
        header("Location: dashboard.php");
    } else {
        // Login is invalid, display an error message
        echo "Invalid email or password. Please try again.";
    }
}

// Check if the signup form has been submitted
if (isset($_POST["signup"])) {
    // Get the signup details from the request
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Escape the name, email, and password to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if the email is already in use
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Email is already in use, display an error message
        echo "This email is already in use. Please use a different email or login.";
    } else {
        // Email is available, insert the new user into the database
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        mysqli_query($conn, $sql);

        // Redirect the user to the login page
        header("Location: login.php");
    }
}
?>