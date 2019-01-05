<?php include('../includes/connection.php') ;
 $refNo=$_POST['refNo'];
echo $refNo;

$sql="UPDATE tempEvents
SET status= 'confirmed' 
WHERE refNo ='$refNo'";

if ($query=mysqli_query($connection,$sql)===true){
 header("Location:event_confirm.php");
}

  ;





?>