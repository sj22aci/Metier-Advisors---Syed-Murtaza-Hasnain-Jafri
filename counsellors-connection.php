<?php
// Connect to the database

/*
$host = "localhost";
$username = "sj22aci";
$password = "tuP4VFTHRAm8";
$dbname = "dbsj22aci";
*/

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

// Query the database for counsellors
$sql = "SELECT * FROM counsellors";
$result = mysqli_query($conn, $sql);

// Display the counsellors
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='card-3'>";
    echo "<img src='" . $row['image'] . "' class='card-img-top img-fluid' style='width: 100px; height: 100px;' alt='" . $row['name'] . "'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
    echo "<p style='font-weight: bold;'>" . $row['pay'] . "</p>";
    echo "<div id='bio-text'>";
    echo "<p class='card-text'>" . $row['bio'] . "</p>";
    echo "</div>";
    echo "<button id='expand-button' class='btn btn-primary'>Read more</button>";
    echo "<a href='#' id='book-button' class='btn btn-primary'>Book Appointment</a>";
    echo "</div>";
    echo "</div>";
  }
} else {
  echo "0 results";
}

// Close the connection
mysqli_close($conn);
?>

