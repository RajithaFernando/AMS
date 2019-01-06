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


<div class="simple-form">
      <div class="alert alert-info">
        <h4><?php include_once('../includes/message.php'); ?></h4>
      </div>
		<form id="registration" action="register.php" method="post" role="form" >
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
  

			
      <input type="submit" value="Add New Admin" id="butt" name="admin">

      <div class="form-group">
        <br>
          
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
                                    
                                    




			
		</form>
	</div>
</body>
</html>
<?php

include('../includes/connection.php');
include('../includes/session.php');
if(isset($_POST['admin'])){
  
    // Assign input data from form to variables
  $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
  $email = $_POST['email'];
    $password = sha1($_POST['password']);
  //$password2 = sha1($_POST['confirm-password']);
    $usertype = 'm';
    $mobile = $_POST['mobile'];
   
        //Check if email already exists
        $selectmail= "SELECT * FROM users WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;  
        $num = mysqli_num_rows($allmailquery);
    
        
    
        if($num > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:register.php?msg=' . $message);
        exit();
        }
        
        //Insert to Database
        else {
           
            $registrationQuery = "INSERT INTO users (f_name, l_name, email, password, usertype, mobile) VALUES ('$f_name', '$l_name', '$email', '$password', '$usertype', '$mobile')";
            
            
            
            
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("New Admin Added Succesfully !"));
        header('Location:index.php?msg=' . $message);
        exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
        header('Location:index.php?msg=' . $message);
        exit();
            }  
        }

}
mysqli_close($connection);
   


?>