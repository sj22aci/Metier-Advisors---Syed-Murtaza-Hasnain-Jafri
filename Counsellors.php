<!DOCTYPE html>
<html lang="en">

<head>
    <title>Métier Advisors | Counsellors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Template.css">
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
                    <a href="#" class="navbar-brand scroll-top"><em>M</em>étier <em>A</em>dvisors</a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="Main.html" class="scroll-link" data-id="Main">Main</a></li>
                        <li><a href="Counsellors.php" class="scroll-top">Counsellors</a></li>
                        <li><a href="Careers.html" class="scroll-link" data-id="Careers">Careers</a></li>
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
            <h1>Counsellors</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php include 'counsellors-connection.php';?>
            </div>
            <div class="col-md-6">
                <div class="card-3">
                    <img src="Images/ava3-bg.webp" alt="Counsellor 2" class="card-img-top" style="width: 100px"
                        height="100px" />
                    <div class="card-body">
                        <h5 class="card-title">Counsellor 2</h5>
                        <p class="card-text">Counsellor 2's bio goes here...</p>
                        <a href="#" class="btn btn-primary">Book Appointment</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-3">
                    <img src="Images/ava6-bg.webp" alt="Counsellor 3" class="card-img-top" style="width: 100px"
                        height="100px" />
                    <div class="card-body">
                        <h5 class="card-title">Counsellor 3</h5>
                        <p class="card-text">Counsellor 3's bio goes here...</p>
                        <a href="#" class="btn btn-primary">Book Appointment</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-3">
                    <img src="Images/ava3-bg.webp" alt="Counsellor 4" class="card-img-top" style="width: 100px"
                        height="100px" />
                    <div class="card-body">
                        <h5 class="card-title">Counsellor 4</h5>
                        <p class="card-text">Counsellor 4's bio goes here...</p>
                        <a href="#" class="btn btn-primary">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="free">
        <br>
    </div>

    <div class="footer-bottom">
        Copyright &copy; Métier Advisors . 2022
    </div>
</body>

</html>