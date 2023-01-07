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

// Query the database for blog posts
$sql = "SELECT * FROM blog_posts";
$result = mysqli_query($conn, $sql);

// Display the blog posts
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='card-2'>";
    echo "<h4>" . $row['title'] . "</h4>";
    echo "<div id='bio-text'>";
    echo "<p class='card-text'>" . $row['content'] . "</p>";
    echo "</div>";
    echo "<button id='expand-button' class='btn btn-primary'>Read more</button>";
    echo "</div>";
  }
} else {
  echo "No blog posts found.";
}

// Close the connection
mysqli_close($conn);

?>