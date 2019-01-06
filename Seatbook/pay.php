<?php include('../includes/connection.php') ?>
<?php include('../includes/session.php') ?>
<?php checkSession(); 

if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'c'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:../html/login.php?msg=' . $message);
       exit();
       }
       
?>
<?php 

	
if (isset($_POST["vip11"]) || isset($_POST["vip22"])) {
   
   $pr = $_POST["val"];
	
  $cl =  'VIP CLASS' ;  
}
elseif (isset($_POST["fc11"]) || isset($_POST["fc22"])) {  
    
    $pr = $_POST["val"];
	
  $cl =  'FIRST CLASS' ;
}

elseif (isset($_POST["sc11"]) || isset($_POST["sc22"])) {  
    
    $pr = $_POST["val"];
// 
  $cl =  'SECOND CLASS' ;
}
else{
     $pr = 0;
// 
  $cl =  'CLASS Not Selected' ;
}
// }
// $_SESSION["price"] = $userRow['f_name'];
// $_SESSION["class"]


?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
	</style>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<div class="container">
<div class="row">
		<div class="col-lg-12">
			<h1 class="display-4">SELECT SEATS</h1>
			<br>
			<p class="lead">
				Set number of Seats
			</p>
		</div>
	</div>
      <div class="price-box">
	
        <div class="row">
		
          <div class="col-sm-6">
                <!-- <form class="form-horizontal form-pricing" role="form" action="pay2.php"> -->

                  <div class="price-slider">
                    <h4 class="great">You have selected <?php echo $cl ; ?> Seats</h4>
                    <span>One Seat is Rs. <?php echo $pr ; ?></span>
                    <div class="col-sm-12">
                      <div id="slider_amirol"></div>
                    </div>
                  </div>
                  <div class="price-slider">
                    <h4 class="great">Number of Seats</h4>
                    <span>Please choose one</span>
                    <div class="btn-group btn-group-justified">
					
                      <div class="btn-group btn-group-lg">
            						<form method="post" action="pay2.php">
            						<input type="hidden" id="nos1" name="count1" value="1">
                        <input type="hidden" id="nos1" name="pr" value="<?php echo $pr ; ?>">
                        <input type="hidden" id="nos1" name="cl" value="<?php echo $cl ; ?>">
                        <button type="submit" class="btn btn-primary btn-lg btn-block month active-month selected-month" id='24month' name="nos1">1 Seat</button>
						</form> 
					  </div>
                      <div class="btn-group btn-group-lg">
            						<form method="post" action="pay2.php">
            						<input type="hidden" id="nos2" name="count2" value="2">
                        <input type="hidden" id="nos1" name="pr" value="<?php echo $pr ; ?>">
                        <input type="hidden" id="nos1" name="cl" value="<?php echo $cl ; ?>">
                        <button type="submit" class="btn btn-primary btn-lg btn-block month active-month selected-month" id='24month' name="nos2">2 Seats</button>
						</form> 
					  </div>
                      <div class="btn-group btn-group-lg">
            						<form method="post" action="pay2.php">
            						<input type="hidden" id="" name="count3" value="3">
                        <input type="hidden" id="nos1" name="pr" value="<?php echo $pr ; ?>">
                        <input type="hidden" id="nos1" name="cl" value="<?php echo $cl ; ?>">
                        <button type="submit" class="btn btn-primary btn-lg btn-block month active-month selected-month" id='24month' name="nos3">3 Seats</button>
						</form> 
					  </div>
					
					  
                    </div>
					<div>
					<div class="alert alert-info">
						Due to <strong>Security </strong> Reasons, <strong>Maximum 3 </strong> Seats can be booked in one process !
					</div>
					</div>
					
                  </div>
                  
		
              </div>
			  
			  
			  <div class="col-sm-6">
                <div class="price-form">

                  <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">
                          <label for="amount_amirol" class="control-label">One Seat Price: </label>
                          <span class="help-text">(Price May change According to the event You selected)</span>
                        </div>
                        <div class="col-sm-6">
                            <input type="hidden" id="amount_amirol" class="form-control">
                            <!-- <p class="price lead" id="total"></p> -->
                            <input class="price lead" name="totalprice" type="text" id="total" disabled="disabled" style="" value=" <?php echo $pr ; ?>" />
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">
                          <label for="amount_amirol" class="control-label">Number of Seats Selected</label>
                          
                        </div>
                        <div class="col-sm-6">
                            <input type="hidden" id="amount_amirol" class="form-control">
                            <!-- <p class="price lead" id="total12"></p> -->
                            <input class="price lead" name="totalprice12" type="text" id="total12" disabled="disabled" style="" value="Please Select Number of Seats" />
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">
                          <label for="amount_amirol" class="control-label">Total Amount for seats</label>
                          <span class="help-text"></span>
                        </div>
                        <div class="col-sm-6">
                            <!-- <input type="hidden" id="amount_amirol" class="form-control"> -->
                            <!-- <p class="price lead" id="total52"></p> -->
                            <input class="price lead" name="totalprice52" type="text" id="total52" disabled="disabled" style=""  value="Please Select Number of Seats"  />
                        </div>
                    </div>
                    </div>
                    <div style="margin-top:30px"></div>
                    <hr class="style">

                  
                    <div class="form-group">
                      <div class="col-sm-12">
                          <img src="https://github.com/AmirolAhmad/Bootstrap-Calculator/blob/master/images/payment.png?raw=true" class="img-responsive payment" />
                      </div>
                    </div>

                  </div>

            </div>
              
            
        </div>
		
	

          </div>

      </div>
      
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js">
      

      function myFunction() {
          alert("Plese Selecct Number of Seats!");
        }
    </script>


</body>

</html