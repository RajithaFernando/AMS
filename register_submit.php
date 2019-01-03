<?php

include('includes/connection.php');
include('includes/session.php');
if(isset($_POST['customer'])){
	
    // Assign input data from form to variables
	$f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
	$email = $_POST['email'];
    $password = sha1($_POST['password']);
	//$password2 = sha1($_POST['confirm-password']);
    $usertype = 'c';
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
                $message = base64_encode(urlencode("Registration Successful"));
				header('Location:login.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
				header('Location:register.php?msg=' . $message);
				exit();
            }  
        }

}

if(isset($_POST['event-manager'])){
	
    // Assign input data from form to variables
	$f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
	$email = $_POST['email'];
    $password = $_POST['password'];
	//$password2 = sha1($_POST['confirm-password']);
    $usertype = 'e';
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
                $message = base64_encode(urlencode("Registration Successful"));
				header('Location:login.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
				header('Location:register.php?msg=' . $message);
				exit();
            } 
            
            /* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%   */
        }

}




mysqli_close($connection);
   


?>