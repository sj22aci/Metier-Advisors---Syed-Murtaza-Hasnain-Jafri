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

  // Query the database for counsellors
  $sql = "SELECT * FROM counsellors";
  $result = mysqli_query($conn, $sql);

  // Display the counsellors
  if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div class='card-3'>";
      echo "<img src='" . $row['image'] . "' class='card-img-top img-fluid' alt='" . $row['name'] . "'>";
      echo "<div class='card-body'>";
      echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
      echo "<p class='card-text'>" . $row['bio'] . "</p>";
      echo "<a href='#' class='btn btn-primary'>Book Appointment</a>";
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "0 results";
  }

  // Close the connection
  mysqli_close($conn);
?>
