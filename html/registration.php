<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" >
	<link href="../css/registration.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
        		<a class="nav-link" href="index.php">HOME</a>
      			</li>
      			<li class="nav-item">
        		<a class="nav-link" href="index.php">EVENT</a>
      			</li>
      			<li class="nav-item">
        		<a class="nav-link" href="gallery.php">GALLERY</a>
      			</li>
      			<li class="nav-item">
      			<a class="nav-link" href="index.php">ABOUT US</a>
      			</li>
      			<li class="nav-item">
      			<a class="nav-link" href="index.php">SERVICES</a>

      			</li>
      			<li class="nav-item">
        		<a class="nav-link" href="index.php">CONTACT US</a>
      			</li>
      			
    		</ul>
  		</div>
	</nav>
	</section>
	<div class="simple-form">
      <div class="alert alert-info">
        <h4><?php include_once('../includes/message.php'); ?></h4>
      </div>
		<form id="registration" action="register_submit.php" method="post" role="form" >
			<input type="text" name="f_name"  id="button"  placeholder="Enter Your First Name" required><br><br>
			<input type="text" name="l_name"  id="button"  placeholder="Enter Your Last Name " required><br><br>
			<input type="email" name="email"  id="button" placeholder="Enter Your E-mail" required><br><br>
			<input type="password" name="password" class="button" id="password" placeholder="Enter Your Password" required onkeyup='check()'><br><br>
			<input type="password" name="confirm-password" class="button" id="confirm-password" placeholder="Retype Your Password" required onkeyup='check()'>
      <br>
      <div>
          <span id='message' class="spn" ></span><br><br>
      </div>
      
      <input type="number" name="mobile" id="button" tabindex="6" placeholder="Mobile Number" required><br><br>
  

			<input type="submit" value="I want to Buy Tickets" id="butt" name="customer" >
      <input type="submit" value="I want to Create events" id="butt" name="event-manager">

      <div class="form-group">
          <a href="registration.php"><input type="button"  name= "login-submit" value="Aledy Have an Account ? Log in hear" id="butt2" ></a>
      </div>

      <!--<form id="register-form" action="register_submit.php" method="post" role="form" >-->
                  <!-- <div class="form-group">
                    <input type="text" name="f_name" id="fname" tabindex="1" class="form-control" placeholder="First Name" required>
                  </div> -->
                  <!-- <div class="form-group">
                  <input type="text" name="l_name" id="lname" tabindex="2" class="form-control" placeholder="Last Name" required>
                  </div> -->
                  <!-- <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="3" class="form-control" placeholder="Email Address" required>
                  </div> -->
                  <!-- <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="4" class="form-control" placeholder="Password" required onkeyup='check()'>
                  </div> -->
                  <!-- <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="5" class="form-control" placeholder="Confirm Password" required onkeyup='check()'> -->
                  <!-- <span id='message' ></span> -->
                  <!-- </div> -->
                  <!-- <div class="form-group">
                    <input type="number" name="mobile" id="mobile" tabindex="6" class="form-control" placeholder="Mobile Number" required>
                                        
                  </div> -->
                                    
                                    <div class="row">
                                        <div class="form-group">
                      <p style="text-align: center;" class="spn" > Choos any option</p>
                     </div>
                                    </div>




			
		</form>
	</div>

<section id="Footer">
	<div class="container text-center">
		<p>copy right<i class="fa fa-copyright"></i></p>
		
	</div>
</section>
</body>


<script>
        var check = function() {
            if (document.getElementById('password').value == document.getElementById('confirm-password').value){
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Password is matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').style.backgroundColor = 'white';
                document.getElementById('message').innerHTML = 'Password does not match';
            }
        }
</script>

</html>
