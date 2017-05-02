<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aliensix.com/particles-1.3/HTML/index-default-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 15:38:48 GMT -->
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Denis Samardjiev" />
	<meta name="description" content="Particles - Personal + Agency Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Spark : Dept of EEE</title>
	
	<!-- Royal Preloader CSS -->
	<link href="css/royal_preloader.css" rel="stylesheet">

	<!-- jQuery Files -->
	<script type="text/javascript" src="./jquery/2.1.3/jquery.min.js"></script>

	<!-- Parallax File -->
	<script type="text/javascript" src="js/parallax.min.js"></script>

	<!-- Royal Preloader -->
	<script type="text/javascript" src="js/royal_preloader.min.js"></script>
	<script type="text/javascript">
		Royal_Preloader.config({
		    mode:           'number',
		    showProgress:   false,
		    background:     '#1d1d1d'
		});
	</script>

	<!-- Stylesheets -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/ionicons.min.css" rel="stylesheet">
	<link href="css/pe-icon-7-stroke.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/logoiconfont.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" title="main-css">

	<!-- Style Switcher / remove for production -->
	<link href="css/style-switcher.css" rel="stylesheet">
	
	<!-- Alternate Stylesheets / choose what color and base you want and include the 2 files regularly AFTER style.css above -->

	<link rel="alternate stylesheet" type="text/css" href="css/colors/green.css" title="green">

</head>
<body class="royal_preloader" data-spy="scroll" data-target=".navbar" data-offset="70">
<?php
$con = mysql_connect("148.72.232.172:3306 ","kluspark","Kluspark2017!");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("register", $con);
 
$sql="INSERT INTO registrationdetails(name, gender,collegeid,collegename,phone,email,typeofevent)
VALUES
('$_POST[name]','$_POST[gender]','$_POST[collegeid]','$_POST[collegename]','$_POST[phone]','$_POST[email]','$_POST[typeofevent]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($con)
?>
<div id="royal_preloader"></div>

	<!-- Start Switcher / Remove for production -->
	

	<!-- Begin Header -->
	<header>
		<!-- Begin Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="row">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand scroll-link" href="#home" data-id="home"><span><img style="width:150px;height:50px" src="./images/logo.png"><strong>SPARK</strong></span></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home" data-id="home" class="scroll-link">Home</a></li>
							<li><a href="#ideology" data-id="ideology" class="scroll-link">Events</a></li>
							<li><a href="#services" data-id="services" class="scroll-link">Workshops</a></li>
							<li><a href="#about" data-id="about" class="scroll-link">Videos</a></li>
							<li><a href="#timeline" data-id="work" class="scroll-link">Sponsors</a></li>
							<li><a href="#team" data-id="team" class="scroll-link">Our Team</a></li>
							<li><a href="#contact" data-id="contact" class="scroll-link">Register</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		<!-- End Navigation -->
	</header>
	<!-- End Header -->

	<!-- Begin Jumbotron -->
	<div class="jumbotron jumbotron-main" id="home">
		<div id="particles-js"></div><!-- /.particles div -->
		<div class="container center-vertically-holder">
			<div class="center-vertically">
				<div class="col-sm-offset-1 col-lg-6 text-center ">
				
						<h6> Thank You</h6>

					<a href="index.html">Return Home</a>
					</a>
				</div><!-- /.column -->
			</div><!-- /.vertical center -->
		</div><!-- /.container -->
	</div>
	<!-- End Jumbotron -->
	<footer class="footer-padding">
		<div class="container">

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-small text-center">
				
					<p class="no-margin">&copy; K L University- <a href="#">SPARK</a> , Designed and Built by <a href="www.yaswanthredy.tech">Yaswanth Reddy Manukonda</a></p>
				</div><!-- /.column -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</footer><!-- /.footer -->
	<!-- Begin Footer -->

	<!-- Javascript Files -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArLNT3t4qsJEBmR0R9P_6ueLIQz0Jvt1M&amp;callback=initMap" async defer></script>
    <script type="text/javascript">
		/* ---- Google Maps ---- */
        function initMap() {
            var mapOptions = {
                zoom: 15,
				zoomControl: false,
				scaleControl: false,
				scrollwheel: false,
				disableDoubleClickZoom: true,
                center: new google.maps.LatLng(40.6700, -73.9400), // New York
                styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                title: 'Our Office!'
            });
        }
    </script>
	<script type="text/javascript" src="js/particles.min.js"></script>
	<script type="text/javascript" src="js/particlesRun.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.js"></script>
	<script type="text/javascript" src="js/form-validator.min.js"></script>  
	<script type="text/javascript" src="js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>  
	<script type="text/javascript">
		/* ---- Counter (our count) ---- */
		$('#ourcount').one('inview', function(event, isInView) {
			if (isInView) {
				$('.timer').countTo({speed: 3000});
			}
		});
	</script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/scrollreveal.min.js"></script>
	<script type="text/javascript" src="js/style-switcher.js"></script><!-- Remove for production -->
	<script type="text/javascript" src="js/main.js"></script>
</body>

<!-- Mirrored from aliensix.com/particles-1.3/HTML/index-default-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 15:40:40 GMT -->
</html>