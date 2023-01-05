<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "metier-advisors";

$conn = mysqli_connect($host, $username, $password, $dbname);


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