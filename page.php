<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Ngar Mal | Page details</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>About Us</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>About Us</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!--/Page Header-->

<!--About-us-->
<section class="about_us section-padding">
<div class="container">
 <div class="section-header text-center">
   <h2>Welcome <span>to Car Ngar Mal</span></h2>
   <p>We will serve as much as we can</p>
 </div>
 <div class="text-center">
  <h3>Our<span>Mission</span></h3>
  <p>To the brighter future of Myanmar's car rental services.</p>
 </div>
 <section class="meet_team section-padding">
   <div class="container">
     <div class="section-header text-center">
       <h2>Our Team</h2>
     </div>
     <div class="row">
       <div class="col-md-4 col-sm-4">
        <div class="team_member">
          <div class="team_img">
            <img src="assets/images/member-1.png" alt="image">
            <div class="team_more_info">
            <div class="info_wrap">
              <p><span>Email:</span>
              <a href="mailto:contact@example.com">thawzinmoemyint@uit.edu.mm</a>
              </p>
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            </div>
          </div>
          <div class="team_info">
            <h6>Thaw Zin Moe Myint</h6>
            <p>Developer</p>
          </div>
        </div> 
       </div>
      <div class="col-md-4 col-sm-4">
        <div class="team_member">
          <div class="team_img">
            <img src="assets/images/member-2.png" alt="image">
            <div class="team_more_info">
            <div class="info_wrap">
              <p><span>Email:</span>
              <a href="mailto:contact@example.com">paingzaykhant@uit.edu.mm</a>
              </p>
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            </div>
          </div>
          <div class="team_info">
            <h6>Paing Zay Khant</h6>
            <p>Developer</p>
          </div>
        </div> 
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="team_member">
          <div class="team_img">
            <img src="assets/images/member-3.png" alt="image">
            <div class="team_more_info">
            <div class="info_wrap">
              <p><span>Email:</span>
              <a href="mailto:contact@example.com">kyawzaww@uit.edu.mm</a>
              </p>
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            </div>
          </div>
          <div class="team_info">
            <h6>Kyaw Zaww</h6>
            <p>Developer</p>
          </div>
        </div> 
      </div>
      </div>
    </div><br/>
    <div class="container">
      <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="team_member">
          <div class="team_img">
            <img src="assets/images/member-4.png" alt="image">
            <div class="team_more_info">
            <div class="info_wrap">
              <p><span>Email:</span>
              <a href="mailto:contact@example.com">htetarkaroo@uit.edu.mm</a>
              </p>
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            </div>
          </div>
          <div class="team_info">
            <h6>Htet Arkar Oo</h6>
            <p>Developer</p>
          </div>
        </div> 
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="team_member">
          <div class="team_img">
            <img src="assets/images/member-5.png" alt="image">
            <div class="team_more_info">
            <div class="info_wrap">
              <p><span>Email:</span>
              <a href="mailto:contact@example.com">kaungkhantnyinyi@uit.edu.mm</a>
              </p>
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            </div>
          </div>
          <div class="team_info">
            <h6>Kaung Khant Nyi Nyi</h6>
            <p>Developer</p>
          </div>
        </div> 
      </div>

    </div>
    </div> 
 </section>
</div>
</section>
      
<!-- /About-us--> 





<<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->
</html>