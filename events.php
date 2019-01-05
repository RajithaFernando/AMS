<?php include('includes/connection.php') ?>

<html>

<head><title>auditorium</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
    <link rel="stylesheet" href="css/custome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    
<!------ 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
Include the above in your HEAD tag ---------->
    <style>
        body{
            font-family: 'Crete Round', serif;

        }
        .btn{
            border:0px solid transparent !important; /* this was 1px earlier */
            margin:0px !important;
            padding:0px !important;
            background-color:transparent !important;
        }
    </style> 
</head>
<body>
   
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
                    <a class="nav-link" href="#">GALLERY</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#services">SERVICES</a>

                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT US</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        </section>
    <?php
    
    $events = 'SELECT * FROM tempevents WHERE status ="confirmed" ORDER BY date DESC' ; //Selecting all data from events table 
    $query = mysqli_query($connection, $events); //Passing SQL
    
   

    ?>
    <h1>Upcomming events</h1>


<div class="container">
      <div class="row">
			<div class="[ col-lg-12 col-lg-offset-2 col-sm-8 ]">
                <ul class="event-list">
  
  <?php
    while($row = mysqli_fetch_assoc($query)){
        echo '
        
		
				
					<li>';
                      
        $ref = $row['refNo'];
        $name = $row['name'];
        $date = $row['date'];
            //$day   = date('d',$time);
            //$month = date('m',$time);
            //$year  = date('Y',$time);
        $time = $row['time'];
        $web_url = $row['web_url'];
        $fb_url = $row['fb_url'];
        $twitter_url = $row['twitter_url'];
        $google_url = $row['google_url'];
        $description = $row['description'];
        $imageName = $row['image'];
        //$price = $row['price'];


    
        $time  = strtotime($date);
        $day   = date('d',$time);
        $month = date('m',$time);
        $year  = date('Y',$time);


        //$monthNum = sprintf("%02s", $result["month"]);
        //$monthName = date("F", strtotime($monthNum));

        //$monthNum  = 3;
        $monthName = date('M', mktime(0, 0, 0, $month, 10)); // March
        // F = MARCH , M = Mar
        // print_r($monthName);


                        echo '
						<time datetime=".">
							<span class="day"> '. $day. '</span>
							<span class="month">' .$monthName.'-'.$year.'</span>
							
						</time>
						<img alt=" '.$name.' " src="Admin/lite/EventImages/'.$imageName.' " />
						<div class="info">
							<h2 class="title">' .$name. '</h2>
                            <p class="desc">' .$description. '</p>
                            <ul>
								<li style="width:44%;"><a href=" '.$web_url.' "><span class="fa fa-globe"></span>' .$web_url. '</a></li>
                                <a href="event/index.php"><li style="width:25%;"><form method="get" action="event/index.php"> <input type="hidden" name="ref" value='.$ref.'><span class="fa fa-info-circle"><input class="btn" type="submit" value="view More"></span></form></li></a>
                                
                                <a href="Seatbook/seatview.php"><li style="width:25%;"><form method="post" action="Seatbook/seatview.php"> <input type="hidden" name="ref" value='.$ref.'><span class="fa fa-money"><input class="btn" type="submit" value="Book Seats"></span> </form></li></a>
                            </ul>
    
                            
                            
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><img src="" alt=""><a href="'.$fb_url.'"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href=" '.$twitter_url.' "><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href=" '.$google_url.' "><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
                    </li>';   }
                    ?>
                    <!--
                            end of one event
                            <i class="fas fa-ticket-alt"></i>
                            
                            <i class="fas fa-ticket-alt"></i>
                            <i class="fas fa-money-bill-alt"></i>
                        -->





<!--
					<li>
						<time datetime="2014-07-20 0000">
							<span class="day">8</span>
							<span class="month">Jul</span>
							<span class="year">2014</span>
							<span class="time">12:00 AM</span>
						</time>
						<div class="info">
							<h2 class="title">One Piece Unlimited World Red</h2>
							<p class="desc">PS Vita</p>
							<ul>
								<li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
								<li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>
							</ul>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>

					-->

					
				</ul>
			</div>
		</div>
	</div>


    <section id="Footer">
  <div class="container text-center">
    <p>copy right<i class="fa fa-copyright"></i></p>
    
  </div>
</section>

</body>