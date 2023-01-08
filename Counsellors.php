<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    // Redirect the user to the login page
    header("location: login.php");
    exit;
}
?>
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

// Get the list of counsellors from the database
$result = mysqli_query($conn, "SELECT id, name FROM counsellors");

// Generate the options for the select field
$options = "";
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $options .= "<option value='$id'>$name</option>";
}

// Close the connection
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Métier Advisors | Counsellors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Template.css">
    <link rel="stylesheet" href="Dark-Template.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
                        data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="Main.html" class="navbar-brand scroll-top"><em>M</em>étier <em>A</em>dvisors</a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="Main.html" class="scroll-link" data-id="Main">Main</a></li>
                        <li><a href="Counsellors.php" class="scroll-top">Counsellors</a></li>
                        <li><a href="Careers.php" class="scroll-link" data-id="Careers">Careers</a></li>
                        <li><a href="Blog.php" class="scroll-link" data-id="Blog">Blog</a></li>
                        <li><a href="Contact.php" class="scroll-link" data-id="Contact">Contact Us</a></li>
                        <li><a href="login.php" class="scroll-link" data-id="Profile">My Profile</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->

    <div class="container">
        <div class="card-1">
            <h1>Counsellors</h1>
        </div>
        <div class="bookbtn">
            <a href='#' id='book-button' class='btn btn-primary' data-toggle='modal' data-target='#bookingModal'>
                <h4>Book Appointment</h4>
            </a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php include 'counsellors-connection.php'; ?>
            </div>
            <!-- Modal -->
            <div id="bookingModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Booking Form</h4>
                        </div>
                        <div class="modal-body">
                            <form action="book.php" method="post">
                                <div class="form-group">
                                    <label for="counsellor-select">Counsellor:</label>
                                    <select class="form-control" id="counsellor-select" name="counsellor-select">
                                        <?php echo $options; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date-input">Date:</label>
                                    <input type="date" class="form-control" id="date-input" name="date-input">
                                </div>
                                <div class="form-group">
                                    <label for="time-input">Time:</label>
                                    <input type="time" class="form-control" id="time-input" name="time-input">
                                </div>
                                <div class="form-group">
                                    <label for="message-input">Message:</label>
                                    <textarea class="form-control" id="message-input" name="message-input"
                                        rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="payment-select">Payment Option:</label>
                                    <select class="form-control" id="payment-select" name="payment-select">
                                        <option>Bank Transfer</option>
                                    </select>
                                </div>

                                <button type="submit" id="standard-button" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="free">
        <br>
    </div>

    <!-- Footer-->
    <div class="footer-bottom">
        Copyright &copy; Métier Advisors . 2022
        <label class="switch">
            <input type="checkbox" id="dark-mode-checkbox">
            <span class="slider"></span>
        </label>
    </div>

    <script>
        // Get the toggle button
        const toggleButton = document.getElementById("dark-mode-checkbox");

        // Check if the "dark-mode" class is stored in local storage
        const isDarkMode = localStorage.getItem("dark-mode") === "true";

        // Update the checked state of the toggle button
        toggleButton.checked = isDarkMode;

        // Update the "dark-mode" class on the body and navbar elements based on the checked state of the toggle button
        if (isDarkMode) {
            document.body.classList.add("dark-mode");
            document.querySelector(".navbar").classList.add("dark-mode");
        } else {
            document.body.classList.remove("dark-mode");
            document.querySelector(".navbar").classList.remove("dark-mode");
        }

        // Listen for changes to the checked state of the toggle button
        toggleButton.addEventListener("change", function () {
            // Update the "dark-mode" class on the body and navbar elements
            if (this.checked) {
                document.body.classList.add("dark-mode");
                document.querySelector(".navbar").classList.add("dark-mode");

                localStorage.setItem("dark-mode", "true");
            } else {
                document.body.classList.remove("dark-mode");
                document.querySelector(".navbar").classList.remove("dark-mode");
                // Remove the "dark-mode" class from local storage
                localStorage.removeItem("dark-mode");
            }
        });
    </script>

    <!--Footer-->

    <!--Counsellor description script-->
    <script>
        const bioTextElements = document.querySelectorAll("#bio-text");
        const expandButtonElements = document.querySelectorAll("#expand-button");

        bioTextElements.forEach((bioTextElement, index) => {
            expandButtonElements[index].addEventListener("click", function () {
                bioTextElement.classList.toggle("truncated");
                if (bioTextElement.classList.contains("truncated")) {
                    expandButtonElements[index].innerHTML = "See less";
                    expandButtonElements[index].style.outline = "none";
                } else {
                    expandButtonElements[index].innerHTML = "Read more";
                    expandButtonElements[index].style.outline = "none";
                }
            });
        });
    </script>
    <!--Counsellor description script-->

</body>

</html>