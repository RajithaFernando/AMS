
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


	$query1 = "SELECT * FROM seats";
    $result1 = mysqli_query($connection, $query1);
    $row1 = mysqli_fetch_array($result1);

    $statusvip=true; // Vip SEAT STATUS
	$statusfc =true;
	$statussc = true;
    // at the begining
    $vipc = 0;   //vip Ticket Count
	$fcc= 0;     //fc Ticket Count
	$scc= 0;    //sc Ticket Count
///////////////////////////////////////////////////////////////////////////

    ///////////this if and 
	if (isset($_POST["ref"])) {

            $ref = $_POST['ref'];

	    $query2 = "SELECT * FROM sales WHERE eventRef =". $ref  ;
	    $result2 = mysqli_query($connection, $query2);
	    //$row2 = mysqli_fetch_array($result2);

	    while ($row2 = mysqli_fetch_array($result2)){
		    if ($row2['Catagory'] == 1){
		    	$vipc = $vipc  + 1;
		    }
		    elseif ($row2['Catagory'] == 1){
		    	$fcc = $vipc  + 1;
		    }
		    elseif ($row2['Catagory'] == 1){
		    	$scc = $scc  + 1;
		    }
		}

	$query = "SELECT * FROM tempEvents WHERE refNo =". $ref  ;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $t1 = $row['ticket1'];
	$t2 = $row['ticket2'];
	$t3 = $row['ticket3'];

	$vips= $row1['vip']; //vip Seats count
    $fcs= $row1['fc'];	//fc Seats count
    $scs= $row1['sc'];	//sc Seats count



    }
    ///////this else
	else {

	$t1 = "Plese Select an Event !";
	$t2 = "Plese Select an Event !";
	$t3 = "Plese Select an Event !";
	}
	//$restvip = 0;
	$restvip = $vips - $vipc;		
	$restfc = $fcs - $fcc;
	$restsc = $scs - $scc;



if ($restvip <= 0){
	$statusvip = false;
}
if ($restfc <= 0){
	$statusfc = false;
}
if ($restsc <= 0){
	$statussc = false;
}

	

?>



<html>
<head>
    <title>Seats</title>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------  ---------->

    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
		body
		{
			background:#00bcd4;
		}

		h1
		{
			color:#fff;
			margin:40px 0 60px 0;
			font-weight:300;
		}

		.our-team-main
		{
			width:100%;
			height:auto;
			border-bottom:5px #323233 solid;
			background:#fff;
			text-align:center;
			border-radius:10px;
			overflow:hidden;
			position:relative;
			transition:0.5s;
			margin-bottom:28px;
		}


		.our-team-main img
		{
			border-radius:50%;
			margin-bottom:20px;
			width: 90px;
		}

		.our-team-main h3
		{
			font-size:20px;
			font-weight:700;
		}

		.our-team-main p
		{
			margin-bottom:0;
		}

		.team-back
		{
			width:100%;
			height:auto;
			position:absolute;
			top:0;
			left:0;
			padding:5px 15px 0 15px;
			text-align:left;
			background:#fff;
			
		}

		.team-front
		{
			width:100%;
			height:auto;
			position:relative;
			z-index:10;
			background:#fff;
			padding:15px;
			bottom:0px;
			transition: all 0.5s ease;
		}

		.our-team-main:hover .team-front
		{
			bottom:-200px;
			transition: all 0.5s ease;
		}

		.our-team-main:hover
		{
			border-color:#777;
			transition:0.5s;
		}
		a{
			text-decoration: none !important;
		}

    </style>    
</head>

<body>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="display-4">Seat View</h1>
			<br>
			<p class="lead">
				Click ON a SEAT to BOOK !
			</p>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-3">	
			<br>
		</div>
		<div class="col-lg-6">
			<a class ="" href="../events.php"><button type="button" class="btn btn-success btn-lg btn-block">  Go Back To Events</button></a>
			<br>
		</div>
		<div class="col-lg-3">
			<br>
		</div>
	</div>
	
	<div class="row">
	
	<!--team-1-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="1.jpg" class="img-fluid" />
	<h3>VIP CLASS</h3>
	<p>Rs. <?php echo $t1; ?></p>
	</div>
	
	<div class="team-back">
	<span><?php 
			if($statusvip){
				echo '
					<form method="post" action="pay.php">
						<input type="hidden" id="val" name="val" value="'.$t1.'">
						<button type="submit" class="btn btn-primary" name="vip11" >Book</button>
					<form>
					';
			}
			else{
				echo '
						<button type="button" class="btn btn-danger">Sold Out</button>
					';
			}

			?>

		<img class="img-fluid w-100" src="vip.jpg">
	</span>
	</div>
	
	</div>
	</div>
	<!--team-1-->
	
	<!--team-2-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="2.jpg" class="img-fluid" />
	<h3>FIRST CLASS</h3>
	<p>RS. <?php echo $t2; ?></p>
	</div>
	
	<div class="team-back">
	<span>
		<?php 
			if($statusvip){
				echo '
					<form method="post" action="pay.php">
						<input type="hidden" id="val" name="val" value="'.$t2.'">
						<button type="submit" class="btn btn-primary" name="fc11">Book</button>
					<form>
					';
			}
			else{
				echo '
						<button type="button" class="btn btn-danger">Sold Out</button>
					';
			}

			?>
		<img class="img-fluid w-100" src="fc.jpg">
	</span>
	</div>
	
	</div>
	</div>
	<!--team-2-->
	
	<!--team-3-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
		<img src="1.jpg" class="img-fluid" />
	<h3>SECOND CLASS</h3>
	<p>Rs. <?php echo $t1; ?></p>
	</div>
	
	<div class="team-back">
	<span>
		<?php 
			if($statusvip){
				echo '
					<form method="post" action="pay.php">
						<input type="hidden" id="val" name="val" value="'.$t3.'">
						<button type="submit" class="btn btn-primary" name="sc11" >Book</button>
					<form>
					';
			}
			else{
				echo '
						<button type="button" class="btn btn-danger">Sold Out</button>
					';
			}

			?>
		<img class="img-fluid w-100" src="sc.jpg">
	</span>
	</div>
	
	</div>
	</div>
	<!--team-3-->
	
	<!--team-4-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="1.jpg" class="img-fluid" />
	<h3>VIP CLASS</h3>
	<p>Rs. <?php echo $t1; ?></p>
		
		
		
	</div>
	
	<div class="team-back">
	<span>
		<?php 
			if($statusvip){
				echo '
					<form method="post" action="pay.php">
						<input type="hidden" id="val" name="val" value="'.$t1.'">
						<button type="submit" class="btn btn-primary" name="vip22" >Book</button>
					<form>
					';
			}
			else{
				echo '
						<button type="button" class="btn btn-danger">Sold Out</button>
					';
			}

			?>
		<img class="img-fluid w-100" src="vip.jpg">
	</span>
	</div>
	
	</div>
	</div>
	<!--team-4-->
	
	<!--team-5-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="2.jpg" class="img-fluid" />
	<h3>FIRST CLASS</h3>
	<p>Rs. <?php echo $t2; ?></p>
	</div>
	
	<div class="team-back">
	<span>
		<?php 
			if($statusvip){
				echo '
					<form method="post" action="pay.php">
						<input type="hidden" id="val" name="val" value="'.$t2.'">
						<button type="submit" class="btn btn-primary" name="fc22" >Book</button>
					<form>
					';
			}
			else{
				echo '
						<button type="button" class="btn btn-danger">Sold Out</button>
					';
			}

			?>
		<img class="img-fluid w-100" src="vip.jpg">
	</span>
	</div>
	
	</div>
	</div>
	<!--team-5-->
	
	<!--team-6-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="1.jpg" class="img-fluid" />
	<h3>SECOND CLASS</h3>
	<p>Rs. <?php echo $t3; ?></p>
	</div>
	
	<div class="team-back">
	<span>
		<?php 
			if($statusvip){
				echo '
					<form method="post" action="pay.php">
						<input type="hidden" id="val" name="val" value="'.$t3.'">
						<button type="submit" class="btn btn-primary" name="sc22" >Book</button>
					<form>
					';
			}
			else{
				echo '
						<button type="button" class="btn btn-danger">Sold Out</button>
					';
			}

			?>
			<img class="img-fluid w-100" src="sc.jpg">
	</span>
	</div>
	
	</div>
	</div>
	<!--team-6-->
	
	
	
	</div>
	</div>
</html>