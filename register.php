<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="login.css" rel="stylesheet">
<!------ Include the above in your HEAD tag 
<script src="login.js"></script>---------->

    <?php include('includes/hedder.php') ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    	<div class="row">
			<div class="col-md-7 col-md-offset-3" style="padding-top:150px;">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php"id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" class="active" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
                                <h2 class="error-msg"><?php include_once('includes/message.php'); ?></h2>
								
                                <!--   Register  -->
                                <!--   Register  -->
                                <!--   Register  -->
								<form id="register-form" action="register_submit.php" method="post" role="form" >
									<div class="form-group">
										<input type="text" name="f_name" id="fname" tabindex="1" class="form-control" placeholder="First Name" required>
									</div>
                                    <div class="form-group">
										<input type="text" name="l_name" id="lname" tabindex="2" class="form-control" placeholder="Last Name" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="3" class="form-control" placeholder="Email Address" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="4" class="form-control" placeholder="Password" required onkeyup='check()'>
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="5" class="form-control" placeholder="Confirm Password" required onkeyup='check()'>
                                        <span id='message' ></span>
									</div>
                                    <div class="form-group">
										<input type="number" name="mobile" id="mobile" tabindex="6" class="form-control" placeholder="Mobile Number" required>
                                        
									</div>
                                    
                                    <div class="row">
                                        <div class="form-group">
										  <p style="text-align: center;"> Choos any option</p>
									   </div>
                                    </div>
                                    
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 ">
												<input type="submit" name="customer" id="register-submit" tabindex="7" class="form-control btn btn-register" value="Buy Tickets">
											</div>
                                            <div class="col-sm-6 ">
												<input type="submit" name="event-manager" id="register-submit" tabindex="8" class="form-control btn btn-register" value="Book Auditorium">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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