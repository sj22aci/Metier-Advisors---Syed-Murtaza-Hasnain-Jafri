<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "metier-advisors";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);


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
    $target_dir = 'Career-Uploadfiles/upload';

    // Set the target file path
    $target_file = $target_dir . $file_name;

    // Attempt to move the uploaded file
    if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file)) {
        // Construct the INSERT statement
        $sql = "INSERT INTO form_data (name, email, resume_path)
    VALUES ('$name', '$email', '$target_file')";

        // Execute the query and handle any errors
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
    } else {
        // An error occurred
        echo "Error uploading file";

        echo "<script>alert('Error uploading file');</script>";
    }
} else {

    // An error occurred
    echo "<script>alert('Error uploading file');</script>";
}

// Close the connection
$conn->close();

?>