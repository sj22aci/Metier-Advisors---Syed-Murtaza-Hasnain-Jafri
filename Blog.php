<!DOCTYPE html>
<html lang="en">

<head>
    <title>Métier Advisors | Blog</title>
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
                        <li><a href="Counsellors.php" class="scroll-link" data-id="Counsellors">Counsellors</a></li>
                        <li><a href="Careers.php" class="scroll-link" data-id="Careers">Careers</a></li>
                        <li><a href="Blog.php" class="scroll-top">Blog</a></li>
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
            <h1>Blog</h1>
        </div>
        
        <?php include 'blog-connection.php'; ?>
        
    </div>

    <div class="free">
        <br>
    </div>

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