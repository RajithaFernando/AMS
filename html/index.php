
 <?php include('../includes/session.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>auditorium</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</head>
<body>
	<!--NavigationBar-->
	<section id="nav-bar">
	<nav class="navbar navbar-expand-lg navbar-light">
  	<a class="navbar-brand" href="#"><b>Auditorium Management System</b></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item active">
        		<a class="nav-link" href="#top">HOME</a>
      			</li>
      			<li class="nav-item">
        		<a class="nav-link" href="#">EVENT</a>
				</li>
				<li class="nav-item">
      			<a class="nav-link" href="#reservation">RESERVATION</a>
      			</li>
      			<li class="nav-item">
        		<a class="nav-link" href="gallery.php">GALLERY</a>
      			</li>
      			<li class="nav-item">
      			<a class="nav-link" href="#about">ABOUT US</a>
      			</li>
      			
      			<li class="nav-item">
        		<a class="nav-link" href="#contact">CONTACT US</a>
      			</li>

      			<?php 
      			checkSession(); 
      			if (isset($_SESSION['usertype'])){
      				echo '<li class="nav-item">
        		<a class="nav-link" href="#">Loged IN as '.$_SESSION['echo'].' </a>
      			</li> 
      				';
      			}
      			else{
      				echo '
      				<li class="nav-item">
        		<a class="nav-link" href="#">Not Loged In  </a>
      			</li>
      				';
      			}
      			?>

      			

      			
    		</ul>
  		</div>
	</nav>
	</section>
		
	<!--slider-->
	<div id="slider">

	<div id="headerSlider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
    		<li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    		<li data-target="#headerSlider" data-slide-to="1"></li>
    		<li data-target="#headerSlider" data-slide-to="2"></li>
  		</ol>
	<div class="carousel-inner">
    	<div class="carousel-item active">
     		<img src="../image/1.JPG" class="d-block img-fluid" alt="...">
     			<div class="carousel-caption">
     				<h5>AUDITORIUM MANAGEMENT SYSTEM</h5>
     				<div class="carousel-button">
						<a href="login.php" class="btn btn-one">Login</a>
						<a href="registration.php" class="btn btn-two">Sign Up</a>

					</div>
     			</div>
    	</div>
    	<div class="carousel-item">
      		<img src="../image/2.JPG" class="d-block img-fluid " alt="...">
      			<div class="carousel-caption">
     				<h5>AUDITORIUM MANAGEMENT SYSTEM</h5>
     				<div class="carousel-button">
						<a href="login.php" class="btn btn-one">Login</a>
						<a href="registration.php" class="btn btn-two">Sign Up</a>

					</div>
     			</div>
		</div>
    	<div class="carousel-item">
      		<img src="../image/1.JPG" class="d-block img-fluid" alt="...">
      			<div class="carousel-caption">
     				<h5>AUDITORIUM MANAGEMENT SYSTEM</h5>
     			
						<div class="carousel-button">
						<a href="login.php" class="btn btn-one">Login</a>
						<a href="registration.php" class="btn btn-two">Sign Up</a>

						</div>
				</div>

    	</div>
  </div>
  
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	
	</div>
		
	</div>

<!--About-->
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6">
	<h2>About Us</h2>
	<div class="about-content">
		This system is an auditorium management software projects. It includes all the features and functions needed to efficiently manage an auditorium. It includes an administrator account which is used to handle/control all the system functionality. The system keeps track of auditorium status and advance bookings. The system keeps records of auditorium bookings along with associated event details and customer contacts in a well maintained database. The administrator can easily check the auditorium bookings and timings in the system gui. The system also allows notifies when a new event timing draws near.
		
	</div>
<div class="button">
<a href="../events.php" class="btn btn-primary">Go To Events>></a>
</div>

<!--<button type="button" class="btn btn-primary">Go To events>>

</button>-->

</div>
<div class="col-md-6 skills-bar"> 
	<img src="../image/1.JPG">
	<!--<p>Adobe Photoshop</p>
	<div class="progress">
		<div class="progress-bar" style="width:80%;">80%</div>
	</div>

	<p>UI Design</p>
	<div class="progress">
		<div class="progress-bar" style="width:85%;">85%</div>
	</div>

		<p>Word press</p>
	<div class="progress">
		<div class="progress-bar" style="width:75%;">75%</div>
	</div>

		<p>Graphic design</p>
	<div class="progress">
		<div class="progress-bar" style="width:90%;">90%</div>
	</div>-->

</div>
</div>

</section>
	<!--reservation-->
	<section id="reservation">
		<div class="container">
			<h1>Reservation</h1>
				<div class="row reservation">
					<div class="col-md-6 text-left">
						<div class="icon">
						<i class="fa fa-hourglass"></i>	
						</div>
						<h3>24 hour service</h3>
						<p>You can reserve the auditorium any time if there is no event at the auditorium. It charges variety of price ranges one hour to full day. </p>

					<div class="button">
						<a href="reservation.php" class="btn btn-primary">Go To Reservation>></a>
					</div>


					</div>
					
					<div class="col-md-6 text-left">
						<div class="icon">
						<i class="fa fa-money"></i>	
						</div>
						<h3>price charges</h3>
						
								<div class="table">
								<table style="margin-left: 160px">
									<tr> <td colspan="2">For one hour</td>
										<td>Rs: 25000</td>
									 </tr>
									 <tr> <td colspan="2">For one hour</td>
										<td>Rs: 25000</td>
									 </tr>
									 <tr> <td colspan="2">For one hour</td>
										<td>Rs: 25000</td>
									 </tr>
								</table>
								<!--<div class="list abc">
									<ul>
										<li style="margin-left: 70px;list-style: none;">for one hour -<span style="margin-left:15px; "> Rs.25000.00</span></li>
										<li style="margin-left: 70px;list-style: none;">for half day -<span style="margin-left:15px; "> Rs.100000.00</span></li>
										<li style="margin-left: 70px;list-style: none;">for full day -<span style="margin-left:15px; "> Rs.200000.00</span></li>
									</ul>
								</div>-->

					</div>

					<!--<div class="col-md-3 text-center">
						<div class="icon">
						<i class="fa fa-line-chart"></i>	
						</div>
						<h3>Digital marketing</h3>
						<p>Our web design and development team has established a host of effective services to facilitate the growth of your business. Including WordPress websites and ecommerce solutions focused on usability and responsive design, creative branding solutions that inject personality into your business, and custom programming for ideas that you need help bringing to fruition.</p>
					</div>

					<div class="col-md-3 text-center">
						<div class="icon">
						<i class="fa fa-paint-brush"></i>	
						</div>
						<h3>Graphic design</h3>
						<p>Our web design and development team has established a host of effective services to facilitate the growth of your business. Including WordPress websites and ecommerce solutions focused on usability and responsive design, creative branding solutions that inject personality into your business, and custom programming for ideas that you need help bringing to fruition.</p>
					</div>-->
				</div>
		</div>
	</section>
	
	<!--get in touch-->

	<section id="contact">
		<div class="container">
			<h1>Get In Touch</h1>
			<div class="row">
				<div class="col-md-6">
				<form class="contact-form">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your-Name">

					</div>

					<div class="form-group">
						<input type="number" class="form-control" placeholder="Phone Number">

					</div>
					<div class="form-group">
						<input type="e-mail" class="form-control" placeholder="E-mail">

					</div>

					<div class="form-group">
						<textarea class="form-control" rows="4" placeholder="Message">
						</textarea>

					</div>

					<button type="submit" class="btn btn-primary">SEND MESSAGE</button>


				</form>	
				</div>
				<div class="col-md-6 contact-info">
					<div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i>XYZ RD,Colombo

					</div>
					<div class="follow"><b>TP No:</b><i class="fa fa-phone"></i>
					1234567890
						
					</div>
					<div class="follow"><b>E-mail:</b><i class="fa fa-envelope-o"></i>
					ABSauditorium@gmail.com
						
					</div>
					<div class="follow"><label><b>Get Social:</b></label>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-youtube-play"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>

					</div>
				 

				</div>



			</div>
		</div>

		
	</section>
</div>
</section>
	<!--Fotter-->

<section id="Footer">
	<div class="container text-center">
		<p>AMS© | Auditorium Management System<i class="fa fa-copyright"></i></p>
		
	</div>
</section>
<!--Footer End-->
<script src="../js/smooth-scroll.js">
	
</script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
	
</script>

</body>

</html>

	











	






	 