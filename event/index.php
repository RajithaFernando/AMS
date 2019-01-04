<?php include('../includes/connection.php') ?>
<?php
    $ref = $_GET['ref'];
    $query = "SELECT * FROM tempEvents WHERE refNo =". $ref  ;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $img = $row['image'];
	$img2 = $row['image2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Conference</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .site-header {
            width: 100%;
            height: 100%;
            min-height: 100vh;
            position: relative;
            text-align: center;
            background: url(../Admin/lite/EventImages/<?php echo $img; ?>) no-repeat center center/cover;
            display: table;
        }
        .discription{
            font-family: 'Rancho', cursive;
            font-size: 30px;

        }
		body{
			background: #eee;
		}
		span{
			font-size:15px;
		}
		.anc
		
		.anc a{
		  text-decoration:none !important; 
		  color: #0062cc;
		  border-bottom:2px solid #0062cc;
		}
		.box{
			padding:60px 0px;
		}

		.box-part{
			background:#FFF;
			border-radius:0;
			padding:60px 10px;
			margin:30px 0px;
		}
		.text{
			margin:20px 0px;
		}

		.fa{
			 color:#4183D7;
		}

    </style>


</head>
<body data-spy="scroll" data-target="#site-nav">
    

    <header id="site-header" class="site-header valign-center"> 
        <div class="intro">

            <h2></h2>
            
            <h1><?php echo $row['name']; ?></h1>
            
            <p><?php echo $row['h1']?></p>
            
            <a class="btn btn-white" data-scroll href="#registration">Book Seats Now !</a>
        
        </div>
    </header>

    <section id="about" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <h3 class="section-title">About <?php echo $row['name'] ?></h3>

                    <p class="discription"><?php echo $row['description']?></p>

                    

                </div><!-- /.col-sm-6 -->

                <div class="col-sm-6">

                        <figure>
                        <!-- assets/images/about-us.jpg" -->
                                <img alt="" class="img-responsive" src="../Admin/lite/EventImages/<?php echo $img2 ?>">
                        </figure>

                    

                </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
	
	<section>
		<div class="box anc">
			<div class="container">
				<div class="row">
					 
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					   
							<div class="box-part text-center">
								
								<i class="fa  fa-globe fa-3x" aria-hidden="true"></i>
								
								<div class="title">
									<h4>Website</h4>
								</div>
								
								<div class="text">
									<span></span>
								</div>
								
								<a href="<?php echo $row['web_url']; ?>">Go To Our Website</a>
								
							 </div>
						</div>	 
						
						 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					   
							<div class="box-part text-center">
								
								<i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
							
								<div class="title">
									<h4>Twitter</h4>
								</div>
								
								<div class="text">
									<span></span>
								</div>
								
								<a href="<?php echo $row['twitter_url']; ?>">Go To Twitter Page</a>
								
							 </div>
						</div>	 
						
						 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					   
							<div class="box-part text-center">
								
								<i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
								
								<div class="title">
									<h4>Facebook</h4>
								</div>
								
								<div class="text">
									<span></span>
								</div>
								
								<a href="<?php echo $row['fb_url']; ?>">Go to Facebook Page</a>
								
							 </div>
						</div>	 
						
						
						 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					   
							<div class="box-part text-center">
								
								<i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
							
								<div class="title">
									<h4>Google</h4>
								</div>
								
								<div class="text">
									<span></span>
								</div>
								
								<a href="<?php echo $row['google_url']; ?>">Go to Google + page</a>
								
							 </div>
						</div>	 
						
						
				
				</div>		
			</div>
		</div>
	
	
	</section>
	


    <section id="registration" class="section registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Registration &amp; Pricing</h3>
                </div>
            </div>
                
            <form action="#" id="registration-form">
                <div class="row">
                    <div class="col-md-12" id="registration-msg" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" id="fname" name="fname" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" id="cell" name="cell" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" id="address" name="address" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Zip Code" id="zip" name="zip" required>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="city" id="city" required>
                                <option readonly>City</option>
                                <option>City Name 1</option>
                                <option>City Name 2</option>
                                <option>City Name 3</option>
                                <option>City Name 4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="program" id="program" required>
                                <option readonly>Select Your Program</option>
                                <option>Program Name 1</option>
                                <option>Program Name 2</option>
                                <option>Program Name 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center mt20">
                    <button type="submit" class="btn btn-black" id="registration-submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Designed and <br> Developed by <a href="../">AMS© | Auditorium Management System </a></p>
                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script 
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script> -->
</body>
</html>