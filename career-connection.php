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

// Construct the SELECT statement
$sql = "SELECT job_title, job_description, requirements, pay_range FROM jobs";

// Execute the query and store the result
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the data from the result as an associative array
    while ($row = $result->fetch_assoc()) {
        // Extract the values from the array
        $job_title = $row['job_title'];
        $job_description = $row['job_description'];
        $requirements = $row['requirements'];
        $pay_range = $row['pay_range'];

        // Split the text into lines
        $lines = explode("\n", $requirements);

        // Output the data in the desired format
        echo "<div class='card-2'>";
        echo "<h3>$job_title</h3>";
        echo "<p>Job Description:<br>$job_description</p>";
        echo "<p>Requirements:</p>";
        echo "<ul>";
        foreach ($lines as $line) {
            echo "<li>$line</li>";
        }
        echo "</ul>";
        echo "<p>Pay Range: $pay_range</p>";
        echo "<h3>Apply</h3>";
        // Output the form
        echo '<form action="process-form.php" method="post" enctype="multipart/form-data">';
        echo '<input type="text" id="name" name="name" placeholder="Name" required><br>';
        echo '<input type="email" id="email" name="email" placeholder="Email" required><br>';
        echo '<label for="resume" style="font-size: 17px;">Resume:</label><br>';
        echo '<input type="file" id="resume" name="resume" required><br>';
        echo '<input id="standard-button" type="submit" value="Submit">';
        echo '</form>';
        echo "</div>";
    }
} else {
    // The query failed
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>