<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "metier-advisors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Check if the file was uploaded successfully
if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
    // Generate a unique file name
    $file_name = uniqid() . '-' . $_FILES['resume']['name'];

    // Set the target directory
    $target_dir = '/path/to/upload/directory/';

    // Set the target file path
    $target_file = $target_dir . $file_name;

    // Attempt to move the uploaded file
    if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file)) {
        // Construct the INSERT statement
        $sql = "INSERT INTO table_name (name, email, resume_path)
    VALUES ('$name', '$email', '$target_file')";

        // Execute the query and handle any errors
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // An error occurred
        echo "Error uploading file";
    }
} else {
    // An error occurred
    echo "Error uploading file";
}

// Close the connection
$conn->close();

?>