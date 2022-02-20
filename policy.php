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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Policy</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">

    <link rel="stylesheet" href="css/flaticon.css">

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/style.css">



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

                                         <li><a href="mypost.php">View my cars</a></li>
                                         <li><a href="contact.html">Contact</a></li>
                                         <li><a  href="post_review.php">List your car</a></li>
                                          <li><a  href="logout.php">Logout</a></li>
                                       </ul>
                                   </nav>
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



													 <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> Privacy & Policy</h3>


									 </div>
							 </div>

					 <div class="col-xl-6 d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">

			 <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/3.svg">

					 </div>

					 </div>
			 </div>
				 </div>



         <div class="review_details_area">
        <div class="container">
          <div class="review_form white-bg">

        <h2>Privacy Policy of <span class="website_url">www.therightjob.bd</span></h2>

<p>At <span class="website_name">The Right Job</span>, we collect and manage user data according to the following Privacy Policy.</p>

<h3>Data Collected</h3>

<p>We collect information you provide directly to us. For example, we collect information when you create an account, subscribe, participate in any interactive features of our services, fill out a form, request customer support or otherwise communicate with us. The types of information we may collect include your name, email address, postal address, credit card information and other contact or identifying information you choose to provide.</p>

<p>We collect anonymous data from every visitor of the Website to monitor traffic and fix bugs. For example, we collect information like web requests, the data sent in response to such requests, the Internet Protocol address, the browser type, the browser language, and a timestamp for the request.</p>

<p>We also use various technologies to collect information, and this may include sending cookies to your computer. Cookies are small data files stored on your hard drive or in your device memory that helps us to improve our services and your experience, see which areas and features of our services are popular and count visits. We may also collect information using web beacons (also known as "tracking pixels"). Web beacons are electronic images that may be used in our services or emails and to track count visits or understand usage and campaign effectiveness.</p>

<h3>Use of the Data</h3>

<p>We only use your personal information to provide you the <span class="website_name">The Right Job</span> services or to communicate with you about the Website or the services. Our Privacy Policy was created with the help of the <a href="https://www.privacy-policy-template.com">Privacy Policy Template</a> and the <a href="https://www.termsandcondiitionssample.com">Terms and Conditions Template</a>.</p>

<p>We employ industry standard techniques to protect against unauthorized access of data about you that we store, including personal information.</p>

<p>We do not share personal information you have provided to us without your consent, unless:</p>



<h3>Sharing of Data</h3>

<p>We don't share your personal information with third parties. Aggregated, anonymized data is periodically transmitted to external services to help us improve the Website and service.</p>

<p>We may allow third parties to provide analytics services. These third parties may use cookies, web beacons and other technologies to collect information about your use of the services and other websites, including your IP address, web browser, pages viewed, time spent on pages, links clicked and conversion information.</p>

<p>We also use social buttons provided by services like Twitter, Google+, LinkedIn and Facebook. Your use of these third party services is entirely optional. We are not responsible for the privacy policies and/or practices of these third party services, and you are responsible for reading and understanding those third party services' privacy policies.</p>

<h3>Cookies</h3>

<p>We may use cookies on our site to remember your preferences.</p>

<p>For more general information on cookies, please read <a href="https://www.cookieconsent.com/what-are-cookies/">"What Are Cookies"</a>.</p>

<h3>Opt-Out, Communication Preferences</h3>

<p>You may modify your communication preferences and/or opt-out from specific communications at any time. Please specify and adjust your preferences.</p>

<h3>Security</h3>

<p>We take reasonable steps to protect personally identifiable information from loss, misuse, and unauthorized access, disclosure, alteration, or destruction. But, you should keep in mind that no Internet transmission is ever completely secure or error-free. In particular, email sent to or from the Sites may not be secure.</p>

<h3>About Children</h3>

<p>The Website is not intended for children under the age of 13. We do not knowingly collect personally identifiable information via the Website from visitors in this age group.</p>

<h3>Changes to the Privacy Policy</h3>

<p>We may amend this Privacy Policy from time to time. Use of information we collect now is subject to the Privacy Policy in effect at the time such information is used.</p>

<p>If we make major changes in the way we collect or use information, we will notify you by posting an announcement on the Website or sending you an email.</p>

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
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
<script src="js/nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/main.js"></script>



</html>
