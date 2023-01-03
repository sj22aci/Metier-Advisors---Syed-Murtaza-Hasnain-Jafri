<!DOCTYPE html>
<html lang="en">

<head>
    <title>Métier Advisors | Careers</title>
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
                    <ul class="nav navbar-nav">
                        <li><a href="Main.html" class="scroll-link" data-id="Main">Main</a></li>
                        <li><a href="Counsellors.php" class="scroll-link" data-id="Counsellors">Counsellors</a></li>
                        <li><a href="Careers.html" class="scroll-top">Careers</a></li>
                        <li><a href="Blog.html" class="scroll-link" data-id="Blog">Blog</a></li>
                        <li><a href="Contact.html" class="scroll-link" data-id="Contact">Contact</a></li>
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
            <h1>Careers</h1>
        </div>
        <div class="card-2">
            <h3>Senior Guidance Counselor</h3>
            <p>Job description:<br>
                The Senior Guidance Counselor is responsible for providing academic, personal, and career counseling to students in a high school 
                or post-secondary educational institution. The Counselor works with students to develop academic plans, set goals, and make informed 
                decisions about their future. They also provide support and resources to students facing personal or social challenges.</p>
            <p>Requirements:</p>
            <ul>
                <li>A Master's degree in Counseling or a related field</li>
                <li>At least 5 years of experience working as a Counselor in a school or post-secondary educational setting</li>
                <li>Proficiency with computer programs and databases for record-keeping and reporting purposes</li>
            </ul>
            <p>Pay Range: $80/hr</p>
            <h3>Apply</h3>
            <form action="/process-form.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="resume">Resume:</label><br>
                <input type="file" id="resume" name="resume"><br>
                <input id='standard-button' type="submit" value="Submit">
            </form>
        </div>
        <div class="card-2">
            <h3>Junior Guidance Counselor</h3>
            <p>Job Description:<br>
                The Junior Guidance Counselor is responsible for providing academic, personal, and career counseling to students in a high school or 
                post-secondary educational institution. The Counselor works with students to develop academic plans, set goals, and make informed 
                decisions about their future. They also provide support and resources to students facing personal or social challenges.</p>
            <p>Requirements:</p>
            <ul>
                <li>A Master's degree in Counseling or a related field</li>
                <li>At least 1 year of experience working as a Counselor in a school or post-secondary educational setting</li>
                <li>Ability to work independently and as part of a team</li>
            </ul>
            <p>Pay Range: $40/hr</p>
            <h3>Apply</h3>
            <form action="/process-form.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="resume">Resume:</label><br>
                <input type="file" id="resume" name="resume"><br>
                <input id='standard-button' type="submit" value="Submit">
            </form>
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

</body>

</html>