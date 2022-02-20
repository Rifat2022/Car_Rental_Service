
<?php

include_once 'database.php';

$result3 = mysqli_query($conn,"SELECT * FROM contact");

session_start();
$email = $_SESSION["email"];
$admin = $_SESSION["utype"];


if ($admin=="admin") {


}
else{
		header("location: logout.php");
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>VIEW MESSAGE</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

				<!-- CSS here -->
				<link rel="stylesheet" href="css/bootstrap.min.css">
				 <link rel="stylesheet" href="css/owl.carousel.min.css">
				 <link rel="stylesheet" href="css/magnific-popup.css">
				 <link rel="stylesheet" href="css/font-awesome.min.css">
				 <link rel="stylesheet" href="css/themify-icons.css">
				 <link rel="stylesheet" href="css/nice-select.css">
				 <link rel="stylesheet" href="css/flaticon.css">
				 <link rel="stylesheet" href="css/gijgo.css">
				 <link rel="stylesheet" href="css/animate.min.css">
				 <link rel="stylesheet" href="css/slicknav.css">

				 <link rel="stylesheet" href="css/style.css">

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
                                            <li><a href="admin.php">Admin panel</a></li>


                                           <li><a href="viewmessage.php">View Message</a></li>
                                                <li><a href="post_review.php">List a car</a></li>
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






       <div class="bradcam_area_2 bradcam_bg_2">
        <div class="container">

            <div class="row">
                <div class="col-xl-5">
                    <div class="bradcam_text">
<h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> User messages</h3>

                    </div>
                </div>


            </div>
        </div>
          </div>


  <div class="container-fluid">

        <div class="job_listing_area p-5">
        <div class="container">

            <div class="job_lists">
                <div class="row">

                   <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result3)) {
                    ?>

					  <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">

                                    <img src="img/person.png" alt="">

                                <div class="jobs_conetent">
                             <h4><?php echo $row["message"];?></h4>
                                    <div class="links_locat d-flex align-items-center">
                                      <div class="location">
                                            <p> <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $row["name"]; ?></p>
                                        </div>
                                       <div class="location">
                                            <p><i class="fa fa-id-card" aria-hidden="true"></i> <?php echo $row["email"]; ?></p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-key" aria-hidden="true"></i> <?php echo $row["phone"]; ?></p>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
                        $i++;
                        }
                        ?>

                </div>
            </div>
        </div>
    </div>

      </div>
    </div>

  </body>

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

		<script src="js/jquery.slicknav.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/plugins.js"></script>

		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/main.js"></script>


</html>
