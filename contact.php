<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPD KIU COURSES</title>
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/contact.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- navbar starts here -->
    <nav class=" navbar navbar-expand-lg navbar-light d-flex justify-content-between navigation-bar fixed-top">
       <a class="navbar-brand mr-5 text-white ml-5 w-20" href="#" data-value="home"><img src="./assets/logo/logo.svg" alt="brand img"></a>
       <div class=" d-flex align-items-center">
            <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-align-justify text-white"></i>
            </button>
            <div class="collapse navbar-collapse menu-bar">
                <ul class=" navbar-nav">
                    <li class="nav-item active ">
                        <a class="h5" href="home.php" data-value="about">
                            <button type="button" class="btn nav-btn font-weight-normal text-white px-lg-4">Home</button><span  class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="h5" href="aboutus.php" data-value="Portfolio">
                            <button type="button" class="btn nav-btn font-weight-normal  text-white px-lg-4">About Us</button>
                        </a>
                        <div class="sub-menu-1">
                          <ul>
                              <li><a href="staff.php" class="d-block">Meet Our Team</a></li>
                              <li><a href="#" class="d-block">Our Vision</a></li>
                              <li><a href="#" class="d-block">Our Culture</a></li>
                              <li><a href="#" class="d-block">Our Services</a></li>
                              <li><a href="#" class="d-block">Our Facilities</a></li>
                          </ul>
                      </div>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="h5" href="staff.php" data-value="blog">
                            <button type="button" class="btn nav-btn font-weight-normal text-white px-lg-4">Our Staff</button>
                        </a>
                    </li> -->
                    <li class="nav-item ">
                        <a class="h5"href="courses.php" data-value="blog">
                            <button type="button" class="btn nav-btn font-weight-normal text-white px-lg-4">Courses</button>
                        </a>
                        <div class="sub-menu-1">
                          <ul>
                              <li class="hover-me"><a href="#">IT Courses <i class="fas fa-angle-right text-white"></i></a>
                                  <div class="sub-menu-2">
                                      <ul>
                                          <li><a href="#">Web Development</a></li>
                                          <li><a href="#">Graphic Desiging</a></li>
                                          <li><a href="#">Python Programming</a></li>
                                          <li><a href="#">Freelancing</a></li>
                                      </ul>
                                  </div>
                              </li>
                              <li class="hover-me"><a href="#">Language Courses <i class="fas fa-angle-right text-white"></i></a>
                                  <div class="sub-menu-2">
                                      <ul>
                                          <li><a href="#">English Language</a></li>
                                          <li><a href="#">Chinnese Language <i class="fas fa-angle-right text-white"></i></a>
                                            <div class="sub-menu-3">
                                              <ul>
                                                  <li><a href="#">HSK I</a></li>
                                                  <li><a href="#">HSK II</a></li>
                                              </ul>
                                          </div>
                                          </li>
                                      </ul>
                                  </div>
                              </li>
                              <li class="hover-me"><a href="#">Other Courses <i class="fas fa-angle-right text-white"></i></a>
                                  <div class="sub-menu-2">
                                      <ul>
                                          <li><a href="#">Shorthand Writing</a></li>
                                          <li><a href="#">IELTS Preparatory </a></li>
                                          <li><a href="#">Huawei Mechatronics </a></li>
                                      </ul>
                                  </div>
                              </li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item ">
                      <a class="h5"href="blogs.php" data-value="blog">
                          <button type="button" class="btn nav-btn font-weight-normal text-white px-lg-4">Blogs</button>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="h5"href="#" data-value="blog">
                          <button type="button" class="btn nav-btn font-weight-normal text-white px-lg-4">Contact Us</button>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="h5 "href="enroll.php" data-value="blog">
                          <button type="button" class=" font-weight-normal btn btn-success nav-btn text-white px-lg-4">Enroll Now</button>
                      </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends here -->

    <!-- contact us form starts here -->
    <div class="container-fluid home-intro">
        <!-- <h1 class="text-center py-md-5 font-weight-lighter display-4 py-2">Contact Us</h1> -->
        <div class="row ">
            <div class="col-12 col-md-5 p-0 bg-warning">

            </div>
            <div class="col-12 col-md-7 bg-dark form-main-div">
                <div class="container p-2 p-md-5 ">
                <h1 class="my-2 my-md-4 text-white font-weight-bolder">Get in Touch</h1>
                <form action="" method="post" class=" d-flex flex-column ">
                        <input placeholder="Full Name" type="text" class="m-2 bg-secondary text-light lead p-2 border-0 w-75 inputs">
                        <input placeholder="Email Address" type="email" class="m-2 bg-secondary text-light lead p-2 border-0 w-75 inputs">
                        <input placeholder="Subject" type="text" class="m-2 bg-secondary text-light lead p-2 border-0 w-75 inputs">
                    <!-- <div class="d-flex justify-content-between"> -->
                        <textarea placeholder="Your Message" name="" rows="6" id="" class="m-2 bg-secondary text-light lead p-2 border-0 w-75 inputs"></textarea>
                    <!-- </div> -->
                    <buttton type="submit" class="btn btn-info py-2 m-2 w-75"><p class="lead d-inline">Send Message</p></buttton>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us form ends here -->

           <!-- footer starts here -->
    <div class="container-fluid p-0 bg-dark pt-5">
        <div class="container d-flex flex-column justify-content-between flex-md-row py-4">
        <div class="container d-flex flex-column  text-white">
                <img src="./assets/logo/logo.svg" class="w-50" alt="">
                <p class="lead text-white py-4 m-0 w-50"> <i class="fas fa-location-pin"></i> opposite to Karakorum international university Gilgit Main Branch</p>
                <i class="fas fa-phone-alt py-2">&nbsp; &nbsp; &nbsp; 05811456789</i>
                <i class="fas fa-envelope py-2">&nbsp; &nbsp; &nbsp; ipd@gmail.com</i>
                <div class="d-flex mt-3">
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-primary rounded-circle fa-facebook"></i></a>
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-primary rounded-circle fa-twitter"></i></a>
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-success rounded-circle fa-google"></i></a>
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-white text-danger rounded-circle fa-youtube"></i></a>
                </div>
            </div>

            <div class=" text-white">
                <h3 class="text-white py-3 font-weight-bolder ml-md-5 ml-0 text-info">Quick links</h3>
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column mx-md-5 ml-0">
                        <a href="#" class="text-white lead py-2">Home</a>
                        <a href="#" class="text-white lead py-2">About Us</a>
                        <a href="#" class="text-white lead py-2">Our Team</a>
                        <a href="#" class="text-white lead py-2">Courses</a>
                        <a href="#" class="text-white lead py-2">Blogs</a>
                    </div>
                    <div class="d-flex flex-column mx-md-5 ml-0">
                        <a href="#" class="text-white lead py-2">Trainers</a>
                        <a href="#" class="text-white lead py-2">Developers</a>
                        <a href="#" class="text-white lead py-2">Testimonials</a>
                        <a href="#" class="text-white lead py-2">Services</a>
                        <a href="#" class="text-white lead py-2">FAQ'S</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-white w-75 mx-auto">
        <div class="container">
            <p class=" text-center lead text-white py-4 m-0">© 2022 Copyright KIU. All Rights Reserved | Developed by IT Section KIU</p>
        </div>
    </div>
    <!-- footer ends here -->

</body>
</html>