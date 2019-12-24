<?php
//if "email" variable is filled out, send email
  if (isset($_POST['email']))  {
  
  //Email information
  $admin_email = "aksharsharma13@gmail.com";
  $email = $_POST['email'];
  $message = "Name:".$_POST['name']."\n";
  $message = "Contact:".$_POST['number']."\n";
  $message = "Website:".$_POST['website']."\n";
  $message = "Message: ".$_POST["message"]."\n";
 
mail( "aksharsharma13@gmail.com","$subject", $message, "From:" . $_POST['email']);
  //send email
  mail($admin_email, "$subject",$message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Enactus MPSTME | Contact</title>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.html">
						<img src="images/logo.png" alt="Company Logo" class="logo">
						<h1 class="site-title">Enactus<span>MPSTME</span></h1>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="about.html">About</a></li>
							<li class="menu-item"><a href="services.html">Projects</a></li>
							<li class="menu-item"><a href="gallery.html">Gallery</a></li>
							<li class="menu-item current-menu-item"><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title">Omnis iste natus error sit voluptatem doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto</h2>

						<div class="row">
							<div class="col-md-5">
								<form method="post" class="contact-form">
									<input type="text" name="name" id="name" placeholder="Name...">
									<input type="email" name="email" id="email" placeholder="Email...">
									<input type="tel" name="number" id="number" placeholder="Contact Number...">
									<input type="text" name="website" id="website" placeholder="website...">
									<textarea name="" id="message" placeholder="Message..."></textarea>
									<div class="text-right">
										<input type="submit" value="Send message">
									</div>
								</form>
							</div>
							<div class="col-md-6 col-md-offset-1">
								<div class="map-container">
									<div id="map"></div>
											<script type="text/javascript">
												function initMap() {
													  var myLatLng = {lat: 19.109924, lng: 72.837540};

													  var map = new google.maps.Map(document.getElementById('map'), {
													    zoom: 17,
													    center: myLatLng
													  });

													  var marker = new google.maps.Marker({
													    position: myLatLng,
													    map: map,
													    title: 'Enactus MPSTME'
													  });
												}
											</script>
									<address>
										<strong>Enactus MPSTME</strong>
										<a href="mailto:enactus.nmims@gmail.com">enactus.nmims@gmail.com</a> <br>
										<span>NMIMS MPSTME, opp. Cooper Hospital, Vile Parle(W),Mumbai-400056</span>
										<a href="tel:+919967533307">+919967533307</a>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->

			<footer class="site-footer" id="content-5">
				<div class="container">
				<img src="dummy/person-1.jpg" align="left"><!--<img src="images/icon-home.png" align="right">-->
					<div class="subscribe-form">
					<form action="contact.html">
							<input type="text" placeholder="Write to us at: MPSTME, NMIMS University V.L.Mehta Road, JVPD, Opp Cooper Hospital, Vile Parle West Mumbai, Maharashtra 400056">
							<button type="submit"><img src="images/icon-envelope-white.png" alt=""></button>
						</form></div>
					<!--<h1>Address:</h1><h3> MPSTME, NMIMS University V.L.Mehta Road, JVPD,<br>&nbsp&nbsp&nbsp&nbsp Opp Cooper Hospital, Vile Parle West Mumbai, <br>Maharashtra 400056</h3>-->
						<a href="tel:+919967533307"><h2>+919967533307</h2></a>
						<a href="mailto:enactus.nmims@gmial.com"><h2>enactus.nmims@gmial.com</h2></a>

				
					<div class="copy">
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					<br><br>
						<p>Copyright 2018 Enactus MPSTME. Designed by Akshar Sharma. All rights reserved.</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->
		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChwEejxNawFEVaClVgUpI-Ze7KR_8vXyI&callback=initMap">
</script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
<?php
	}
?>