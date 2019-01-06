<?php include('../includes/connection.php') ?>

<?php 

$userID = $_SESSION['id'];
$Date = date("Y-m-d");
$eventRef = $_SESSION['event'] ;
$seatID = "1";
$ticket = $GLOBALS['$ticketValue'];
$Cat = $GLOBALS['$Catagory'];
$coun = $GLOBALS['$count'];




            if (isset($_POST['sub'])){
            	$Query = "INSERT INTO sales ( userID , Date , eventRef , seatID , ticketValue , Catagory) VALUES ('$userID', '$Date', '$eventRef', '$seatID', '$ticket', '$Cat')";
            
            
            
            for ($i=0;$i<$coun; $i ++){
            	$run = mysqli_query($connection,$Query);

            	}



            }
            ?>          