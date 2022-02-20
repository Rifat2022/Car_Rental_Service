<?php

$carId = $_GET['id'];


?>

<?php

session_start();

if (isset($_SESSION['email'])) {
   $email=$_SESSION['email'];
}elseif (isset($_SESSION['user_email_address'])) {
    $email=$_SESSION['user_email_address'];
}else{
   header("location: login.php");
}




?>


<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Car details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS here -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
           <link rel="stylesheet" href="css/owl.carousel.min.css">
           <link rel="stylesheet" href="css/magnific-popup.css">
           <link rel="stylesheet" href="css/font-awesome.min.css">
           <link rel="stylesheet" href="css/themify-icons.css">

           <link rel="stylesheet" href="css/flaticon.css">

           <link rel="stylesheet" href="css/animate.min.css">
           <link rel="stylesheet" href="css/slicknav.css">

           <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/nice-select.css">
           <link rel="stylesheet" href="css/custom.css">

</head>

<body>

  <header>
      <div class="header-area ">
          <div id="sticky-header" class="main-header-area">
              <div class="container-fluid ">
                  <div class="header_bottom_border">
                      <div class="row align-items-center">
                          <div class="col-xl-3 col-lg-2">
                              <div class="logo">

                              </div>
                          </div>
                          <div class="col-xl-6 col-lg-7">
                              <div class="main-menu  d-none d-lg-block">
                                  <nav>
                                      <ul id="navigation">
                                          <li><a href="home.php">home</a></li>
                                          <li><a href="browse_cars.php">Browse Cars</a></li>
                                         <li><a href="policy.php">privacy & policy</a></li>

                                        <li><a href="post_review.php">List your car</a></li>
                                          <li><a href="contact.html">Contact</a></li>
                                          <li><a href="logout.php">Logout</a></li>
                                      </ul>
                                  </nav>
                              </div>
                          </div>
                          <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                              <div class="Appointment">


                              </div>
                          </div>
                          <div class="col-12">
                              <div class="mobile_menu d-block d-lg-none"></div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </header>
  <!-- header-end -->

   <div class="bradcam_area_2 bradcam_bg_2">
      <div class="container">

          <div class="row">
              <div class="col-xl-5">

                  <div class="bradcam_text">



                          <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Car details</h3>


                  </div>
              </div>

          <div class="col-xl-6 d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">

      <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/4.svg">

          </div>

          </div>
      </div>
        </div>


    <div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">

                                <div class="jobs_conetent">


                                <?php


                                        $conn = new mysqli("localhost", "root", "", "car_rental");

                        $query = "SELECT * FROM `car_table` where `carId` = '$carId'";

                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {

  $id = $row['carId'];
                                $cata = $row['carCatagory'];
                                $cname = $row['companyName'];
                                 $seats = $row['seats'];
                                  $cost = $row['cost'];
                                     $address = $row['address'];
                                     $status = $row['status'];
                                      $rating = $row['rating'];
                                      $author = $row['author'];
                                      $model = $row['model'];
                                        $number = $row['number'];





                              echo  '<div class="descript_wrap white-bg" >
                                <a href="car_details.php?id='.$row['carId'].'"><img class="card-img-top" src="data:image/png;base64,'.base64_encode($row['picFile']).'" alt="Card image">
                                </div>';

                                 echo  "<div class='links_locat d-flex align-items-center'>
                                        <div class='location'>
                                            <h4> <i class='fa fa-map-marker'></i><span class='badge badge-danger'> {$address}</span></h4>
                                        </div>
                                        <div class='location'>
                                            <h4> <i class='fa fa-car'></i> {$model}</h4>
                                        </div>
                                        <div class='location'>
                                            <h4>posted by:<span class='badge badge-success'> {$author}</span></h4>
                                        </div>
                                    </div>"
                                ;


                            }
                        }
                                    ?>

                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
                     echo "<div class='descript_wrap white-bg'>

                    <div class='single_wrap'>
                            <h3>Manufactur company</h3>
                            <h5>{$cname}</h5>

                        </div>
                        <div class='single_wrap'>
                            <h3>Car catagory</h3>
                            <h5>{$cata}</h5>

                        </div>
                        <div class='single_wrap'>
                            <h3>Rent per hour</h3>
                            <h5> <i class='fa fa-money'></i> <span class='badge badge-success'>{$cost} taka</h5>

                        </div>
                        <div class='single_wrap'>
                            <h3>Car rating</h3>
                            <h5>{$rating}</h5>

                        </div>
                        <div class='single_wrap'>
                            <h3>Car status</h3>

<h5>  <i class='fa fa-phone'></i> <span class='badge badge-warning'> {$status}</span></h5>
                        </div>
                        <div class='single_wrap'>
                            <h3>Call for booking</h3>
                            <div class='location'>
                                <h4>  <i class='fa fa-phone'></i> <span class='badge badge-success'> 0{$number}</span></h4>
                            </div>
                        </div>

                    </div>
                   ";
                    ?>


                </div>

            </div>
        </div>
    </div>

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top" style="padding: 50px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="#">

                                </a>
                            </div>
                            <p>
                               North South University <br>
                                #Plot 15 <br>
                                ROAD NO 8, BLOCK B<br>
                                BASHUNDHARA R/A, DHAKA <br>
                                +880-2-55668200 <br>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="www.facebook.com">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.google.com">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.twitter.com">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.instagram.com">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>



                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="post_data.php" method="post" class="newsletter_form">
                                <input type="text" name="email" placeholder="Enter your mail">
                                <button type="submit" value="submit" name="save_subscribe">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Subcribe your email for more exciting deals and offers!!</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-5 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">


                             <img width="60%" src="img/6.svg" alt="">
                        </div>
                    </div>


            </div>
        </div>
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">

                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Car Rental
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </footer>

    <!-- JS here -->

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
