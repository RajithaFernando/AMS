 <?php include('../includes/session.php') ?>
<?php
checkSession(); 
if($_SESSION['usertype'] == 'c' ){
    // $message = base64_encode(urlencode("Please Login"));
    // header('Location:../html/login.php?msg=' . $message);
    // exit();
}
 ?> 

<?php

include('../../includes/connection.php');

include('../../includes/message.php');
?>
<?php

$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "auditorium";

$connection = mysqli_connect($dbservername, $dbUsername, $dbPassword,$dbName);

if ($connection->connect_error) {
	die("Connection Failed". $conn->connect_error);
}		


?>

  <?php checkSession();
                       
     $id = $_SESSION["id"]; 
    
	
$eid = $_POST['eid'];
$name = $_POST['name'];
$manager_id = $id; 
$date = $_POST['date'];
$time  = $_POST['time'];
$web_url  = $_POST['web_url'];
$fb_url  = $_POST['fb_url'];
$twitter_url  = $_POST['twitter_url'];
$google_url  = $_POST['google_url'];
$description  = $_POST['description'];
$image =  'saas';
$ticket1 = $_POST['ticket1'];
$ticket2 = $_POST['ticket2'];
$ticket3 = $_POST['ticket3'];
   
//$ss = "UPDATE tempevents SET name = 'Rajiadasdasdtha' WHERE id='$eid' ";
//$sss = "INSERT INTO `events` (`id`, `name`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `ticket1`, `ticket2`, `ticket3`) VALUES (NULL, 'a', '22', '2018-09-05', '05:00:00', '1', '1', '1', '11', '1', '1', '1', '1', '1')";

//$event = "UPDATE tempevents SET name = '$name' WHERE id=$eid";
$event = "UPDATE  tempevents SET name = '$name' , manager_id = '$manager_id',   web_url = '$web_url' , fb_url = '$fb_url' , twitter_url = '$twitter_url' , google_url = '$google_url', description  = '$description' WHERE refNo =$eid";
 
//mysqli_query($connection,$event); 
if (mysqli_query($connection,$event) ) {
            $message = base64_encode(urlencode("Event Created Succesfully"));
            header('Location:editevent.php?msg=' . $message);
            exit();}
    
     //echo 'Successfull';
   
    

/*
else {
        $message = base64_encode(urlencode("SQL Error while Creating Event"));
        header('Location:pages-error-404.php?msg=' . $message);
        exit();
        }



####################################
'$name' , '$manager_id' , '$date' , '$time' , '$web_url' , '$fb_url' , '$twitter_url' , '$google_url' , '$description' , '$image'
 , '$ticket1' , '$ticket2' , '$ticket3'
 
 
 */
?>