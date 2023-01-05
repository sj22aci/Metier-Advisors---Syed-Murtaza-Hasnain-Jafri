<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "metier-advisors";

$conn = mysqli_connect($host, $username, $password, $dbname);

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
// Check if the "Forgot password" form has been submitted
if (isset($_POST["forgot"])) {
    // Get the email from the request
    $email = $_POST["email"];

    // Escape the email to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);

    // Construct the SQL query to retrieve the user from the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Check if the query returned a result
    if (mysqli_num_rows($result) > 0) {
        // The user exists, generate a new password and update the database
        $new_password = generate_password();
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password = '$hashed_password' WHERE email = '$email'";
        mysqli_query($conn, $sql);

        // Send the new password to the user via email
        send_password_email($email, $new_password);

        // Display a message to confirm that the password has been reset
        echo "A new password has been sent to your email address. Please check your email and use the new password to login.";
    } else {
        // The user does not exist, display an error message
        echo "The specified email address does not exist in our database. Please try again.";
    }
}
?>
