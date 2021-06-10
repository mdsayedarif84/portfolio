<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title> Contact  </title>
         <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/bootstrap.css"/>
         <link rel="stylesheet" href="assets/css/style.css"/>
</head>
    <body >
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
        <!-- form section  -->
        <div class="container contact-height">
            <div class="row">
                <!-- form section left-->
                <div class="col-xl-3 col-sm-4 col-md-4 col-lg-4"></div>

                    <!-- form -->
                <div class="col-xl-6 col-sm-4 col-md-4 col-lg-4">
                    <form action="#" method="post">
                        <div class="form-group">
                            <h1 class="text-center font-weight-bold contactMe">CONTACT ME</h1>
                            <hr/>
                            <label for="firstName">First name</label>
                            <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Enter your First Name"/>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Enter your last name"
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="@gmail.com"/>
                        </div>
                        <div class="form-group">
                             <textarea class="form-control" name="message" type="text" rows="7" placeholder="Pls write your some speech"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="btn-success btn-block" name="btn" value="Submit"/>
                        </div>
                    </form>
                </div>
                <!-- form end -->
                <div class="col-xl-3 col-sm-4 col-md-4 col-lg-4"></div>
            </div>
        </div>
        <!--login modal-->
        <div class="modal fade" id="login">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Log In </h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="fsmoon84@gmail.com"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="passpword"/>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-outline-warning">
                                                <label for="forgetPassword"><a href=""  class="text-primary" style="text-decoration: none;" id="forgetPassword"><strong>Forget Passoword</strong></a></label>
                                            </button>
                                        </div>
                                        <div class="">
                                            <input type="submit" name="btn" class="btn btn-outline-dark btn-block" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <h3>Not registered? To click
                            <a href="" class="btn btn-outline-warning  text-danger" data-toggle="modal" data-target="#signUp" style="text-decoration: none;">
                                <strong>HERE</strong>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!--    logIn modal end-->
        <!--sign up modal start -->
        <div class="modal fade"  id="signUp">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Sign Up</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="#" method="post">
                                        <div class="form-group row">
                                            <label for="" class="col-form-label col-sm-3">Fist Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="firs_name" id="firstName" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-form-label col-sm-3">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="lastName" name="lastName" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mail" class="col-form-label col-sm-3">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" id ="mail" name="email" class="form-control" placeholder="fsmoon84@gmail.com"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pass" class="col-form-label col-sm-3">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" id="pass" name="password" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-3">ConfirmPassword</label>
                                            <div class="col-sm-9">
                                                <input type="password" id="confirmPassword" name="confirm_password" class="form-control" placeholder="passpword"/>
                                            </div>
                                            <span id="confirmPasswordError"></span>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phoneNumber" class="col-form-label col-sm-3">Phone Number</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="phoneNumber" name="phone" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="date_of_birth" class="col-form-label col-sm-3">Date Of Birth</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="date_of_birth" name="birth" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gender" class="col-form-label col-sm-3">Gender</label>
                                            <div class="col-sm-9">
                                                <label><input type="radio" name="gender" id="gender" value="male"/>Male </label>
                                                <label><input type="radio" name="gender" id="gender" value="feMale"/>Female </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-form-label-lg col-sm-3">Address</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" name="address" id="address" row="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3" for="districtName">District Name</label>
                                            <div class="col-sm-9">
                                                <select  name="district_name" class="form-control" id="districtName">
                                                    <option>---Select Distirct Name</option>
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Noakhali">Nokhali</option>
                                                    <option value="Comilla">Comilla</option>
                                                    <option value="Narayanganj">Narayanganj</option>
                                                    <option value="Barisal">Barisal</option>
                                                    <option value="Rangpur">Rangpur</option>
                                                    <option value="Rajshai">Dhaka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3" for="img">Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="image" id="img" multiple accept="image/*"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3"></label>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="agree" class="form-check-input">
                                                        I am agree with ur all condition.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <input type="submit" name="btn" class="btn btn-outline-info btn-block" value="Submit"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <h3>Please Input Information to sign up.</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--    signUp modal end-->
        <script src="assets/js/jquery-3.2.1.js"></script>
        <script src="assets/js/proper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>