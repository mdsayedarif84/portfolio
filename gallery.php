<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title> Gallery </title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">
</head>
    <body>
        <!-- ?menu section? -->
        <nav class="navbar navbar-dark bg-dark navbar-expand-sm fixed-top">
            <div class="container">
                <a href="" class="navbar-brand">LOGO</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="myMenu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item dropdown" ><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                            <ul class="dropdown-menu bg-secondary dropdown-menu-end">
                                <li><a href="" class="nav-link">Education</a></li>
                                <li><a href="" class="nav-link">Details</a></li>
                                <li><a href="" class="nav-link">Personal History</a></li>
                                <li><a href="" class="nav-link">My Profile</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="portfolio.php" class="nav-link">Portfolio</a></li>
                        <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#login">Login</a></li>
                        <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#signUp">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card m-auto">
                        <div class="card-body">
                            <div class="carousel-inner">
                                <img src="assets/imgs/card.jpg" class="gallery-main-image" id="galleryMainImage">
                                <div class="carousel-caption">
                                    <h2 class="text-info">This Show of big picture</h2>
                                    <p class="bg-danger text-uppercase">Please! Click the minimize picture..</p>
                                </div>
                            </div>
                            <div>
                                <img src="assets/imgs/card.jpg" id="img1" alt="" class="sub-image">
                                <img src="assets/imgs/2.jpg" id="img2" alt="" class="sub-image">
                                <img src="assets/imgs/3.jpg" id="img3" alt="" class="sub-image">
                                <img src="assets/imgs/4.jpg" id="img4" alt="" class="sub-image">
                                <img src="assets/imgs/5.jpg" id="img5" alt="" class="sub-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        gallery section start-->
        <section class="gallery-section">
            <div class="container gallery-height">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card col-sm-6 m-auto" >
                            <label class="col-form-label col-sm-3">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="col-form-label" placeholder="Input Your Name">
                            </div>
                        </div>
                        <div class="card col-sm-6 m-auto" >
                            <label class="col-form-label col-sm-3">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="col-form-label" placeholder="Input Your Name">
                            </div>
                        </div>
                        <div class="card col-sm-6 m-auto" >
                            <label class="col-form-label col-sm-3">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="col-form-label" placeholder="Input Your Name">
                            </div>
                        </div>
                        <div class="card col-sm-6 m-auto" >
                            <label class="col-form-label col-sm-3">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="col-form-label" placeholder="Input Your Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="assets/js/jquery-3.2.1.js"></script>
        <script src="assets/js/proper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/my-script.js"></script>
    </body>
</html>