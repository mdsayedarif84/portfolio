<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Home page</title>
    <link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
    <body>
        <!--menu section -->
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
                    <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#login">
                        <span class="glyphicon glyphicon-search"></span>Login</a>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#signUp">Sign Up</a></li>
                  </ul>
                </div>
            </div>
        </nav>

        <!--slider section-->

      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-xl-12 col-md-12">
                  <div id="mySlider" class="carousel slide" data-ride="carousel" data-interval="4000">
                      <ol class="carousel-indicators">
                           <li class="active" data-target="#mySlider" data-slide-to="0"></li>
                           <li class="" data-target="#mySlider" data-slide-to="1"></li>
                           <li class="" data-target="#mySlider" data-slide-to="2"></li>
                           <li class="" data-target="#mySlider" data-slide-to="3"></li>
                           <li class=""  data-target="#mySlider" data-slide-to="4"></li>
                      </ol>
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="assets/imgs/slider1.jpg" class="d-block w-100" style="height: 400px;width: 100px;"/>
                              <div class="carousel-caption">
                                  <h2 class="text-danger">Hey! I am FS moon.</h2>
                                  <p class="bg-danger">The scenary is beautiful.I like to this.</p>
                              </div>
                            </div>
                          <div class="carousel-item">
                              <img src="assets/imgs/slider2s.jpg" class="d-block w-100" style="height: 400px;width: 100px;" />
                              <div class="carousel-caption">
                                  <h3 class="text-info">Hey! This is  Universal Truth.</h3>
                                  <p class="bg-success">""A firend in need is a friend in deed."" </p>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <img src="assets/imgs/slider3.jpg" class="d-block w-100" style="height: 400px;width: 100px;"/>
                              <div class="carousel-caption">
                                  <h3 class="text-light">Hey! This is  Universal Truth.</h3>
                                  <p class="bg-primary">""A firend in need is a friend in deed."" </p>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <img src="assets/imgs/slider4.jpg" class="d-block w-100" style="height: 400px;width: 100px;"/>
                              <div class="carousel-caption">
                                  <h3 class="text-secondary">Hey! This is  Universal Truth.</h3>
                                  <p class="bg-warning">""A firend in need is a friend in deed."" </p>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <img src="assets/imgs/slider5.png" class="d-block w-100" style="height: 400px;width:auto;"/>
                              <div class="carousel-caption">
                                  <h3 class="text-primary">Hey! This is  Universal Truth.</h3>
                                  <p>""A firend in need is a friend in deed."" </p>
                              </div>
                          </div>
                      </div>
                          <a href="#mySlider" class="carousel-control-prev" data-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                          </a>
                          <a href="#mySlider" class="carousel-control-next" data-slide="next" >
                              <span class="carousel-control-next-icon"></span>
                          </a>
                  </div>
              </div>
          </div>
      </div>

        <!-- card  start -->

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img src="assets/imgs/card2.png" alt="FS" class="card-img-top" style="height: 200px;">
                <div class="card-body">
                    <h3>My Mission</h3>
                    <p class="card-text">If you want know,What is Mission?Then you can click Read more</p>
                  <a href="" class="btn btn-success" data-toggle="modal" data-target="#readMore">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="assets/imgs/card.jpg" alt="FS" class="card-img-top" style="height: 200px;">
                <div class="card-body">
                  <h3>My Division</h3>
                  <p class="card-text">If you want know,What is division?Then you can click Read more</p>
                  <a href="" class="btn btn-success" data-toggle="modal" data-target="#readMore2">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="assets/imgs/card3.jpg" alt="FS" class="card-img-top" style="height: 200px;">
                <div class="card-body">
                    <h3>My Dream</h3>
                    <p class="card-text">If you want know,What is dream?Then you can click Read more</p>
                  <a href="" class="btn btn-success" data-toggle="modal" data-target="#readMore3">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- section start  -->

      <section class="add-section" >
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="carousel slide" data-ride="carousel" data-interval="">
                <div class="carousel-inner">
                  <div class="carousel-item active carousel-item-padding" >
                    <h2 class="text-success">WEB DESIGN & DEVELOPMENT</h2>
                    <p class="text-warning" style=" font-size: 20px;">MD. Sayed Arif</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- again card section start -->

      <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <img src="assets/imgs/2.jpg" alt="FS" class="card-img-top" style="height: 200px;">
                <div class="card-body">
                  <h3>Hello I am FS</h3>
                  <p class="card-text">This my card section one.This my card pattern.This my card pattern.</p>
                  <a href="" class="btn btn-success">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="assets/imgs/3.jpg" alt="FS" class="card-img-top" style="height: 200px;">
                <div class="card-body">
                  <h3>Hello I am FS</h3>
                  <p class="card-text">This my card section one.This my card pattern.This my card pattern.</p>
                  <a href="" class="btn btn-success">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="assets/imgs/4.jpg" alt="FS" class="card-img-top" style="height: 200px;">
                <div class="card-body">
                  <h3>Hello I am FS</h3>
                  <p class="card-text">This my card section one.This my card pattern.This my card pattern.</p>
                  <a href="" class="btn btn-success">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="assets/imgs/5.jpg" alt="FS" class="card-img-top" style="height: 200px;">
                <div class="card-body">
                  <h3>Hello I am FS</h3>
                  <p class="card-text">This my card section one.This my card pattern.This my card pattern.</p>
                  <a href="" class="btn btn-success">Read more</a>
                </div>
              </div>
            </div>
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
                                    <form action="" method="post">
                                        <div class="form-group row">
                                            <label for="firstName" class="col-form-label col-sm-3">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="first_name" id="firstName" class="form-control"/>
                                            </div>
                                            <span id="firstNameError" class="text-danger col-sm-9"></span>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lastName" class="col-form-label col-sm-3">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="lastName" name="lastName" class="form-control"/>
                                            </div>
                                            <span id="lastNameError" class="text-danger"></span>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mail" class="col-form-label col-sm-3">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" id ="mail" name="email" class="form-control" placeholder="fsmoon84@gmail.com"/>
                                            </div>
                                            <span id="emailError"></span>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pass" class="col-form-label col-sm-3">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" id="pass" name="password" class="form-control"/>
                                                <input type="checkbox" id="showPassword" name="show_password">Show Password
                                            </div>
                                            <span id="passwordError"></span>
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
                                            <span id="phoneNumberError"></span>
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
        <!--read more modal my dream-->
        <div class="modal fade " id="readMore">
            <div class="modal-dialog modal-md">
                <div class="modal-content" style="background-color: #4E5158;color: white;">
                    <div class="modal-header">
                        <h2 class="text-success">My Mission</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="card-text">
                                        Every have a misssion. I like to saw a mission. what i can do it successfully.
                                        Mission means your goal of history. if you finished a successful work with your
                                        own mind,then u can fill a your dream.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <!--modal read more2-->

        <div class="modal fade " id="readMore2">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="text-info">My Division</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <blockquote>
                                        <p>
                                            The Division field is a required field during the registration process.
                                            It is used for internal reference by FedBid Employees.  You are able to
                                            utilize this field to indicate your specific department, field, or
                                            product lines.   If you do not have a specific Division, you may type
                                            “Not Applicable” in this field.
                                        </p>
                                        <footer>--FS Asuly--</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <!--modal read more3-->

        <div class="modal fade " id="readMore3">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="text-secondary">My Dream</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span> &times; </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <blockquote>
                                        <p>
                                            Every have a misssion. I like to saw a mission. what i can do it successfully.
                                            MWhat is your dream? Will you achieve your dream in your lifetime? I'm certain that
                                            you desire to. I'm sure you hope you will. But will you actually do it? What odds would
                                            you give yourself? One in five? One in a hundred? One in a million? How can you tell
                                            whether your chances are good or whether your dream will always remain exactly that—a
                                            dream? And are you willing to put it to the test?

                                            Most people I know have a dream. In fact, I’ve asked hundreds, if not thousands, of
                                            people about their dream. Some willingly describe it with great detail and enthusiasm.
                                            Others are reluctant to talk about it. They seem embarrassed to say it out loud. These
                                            have never tested their dream. They don’t know if others will laugh at them. They’re not
                                            sure if they’re aiming too high or too low. They don’t know if their dream is something they
                                            can really achieve or if they’re destined to fail.
                                        </p>
                                        <footer>-FS Asuly moon</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.2.1.js"></script>
        <script src="assets/js/proper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/myScript.js"></script>
    </body>
</html>