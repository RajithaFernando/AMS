<?php include('../includes/connection.php'); ?>
<?php include('../includes/session.php'); ?>

<!DOCTYPE html>
<html>
<head>

    

	<title>	login</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" >
	<link href="../css/login.css" rel="stylesheet" type="text/css" >
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
		<form id="login" action="login_submit.php" method="post" role="form" style="display: block;">

      <div class="form-group">
        <!--<input type="email" name="email" id="" tabindex="1" class="form-control" placeholder="Email Address" value="">
        </div>
        <div class="form-group">
        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
        </div>-->
        <input type="email" name="email"  id="button" placeholder="Email Address" value=""><br><br>
			  <input type="password" name="password"  id="button" placeholder="Password"><br><br>
			  
        <input type="submit"  name= "login-submit" value="login" id="butt" >

      </div>
      <div class="form-group">
          <a href="registration.php"><input type="button"  name= "login-submit" value="Dosent have an account ? Sign up hear" id="butt2" ></a>
      </div>
<!--<input type="submit" name="login-submit" id="login-submit" tabindex="3" class="form-control btn btn-login" value="Log In">-->
			
		</form>
	</div>

<section id="Footer1">
	<div class="container text-center">
		<p>copy right<i class="fa fa-copyright"></i></p>
		
	</div>
</section>

</body>
</html>