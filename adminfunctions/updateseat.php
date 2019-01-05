<?php include('../includes/connection.php') ;
//$name=$_POST['name'];
$vip = $_POST['vip'];
$fc = $_POST['fc'];
$sc = $_POST['sc'];

$sql="UPDATE seats SET vip= '$vip' , fc= '$fc' , sc= '$sc' WHERE name = 1 ";

if ($query=mysqli_query($connection,$sql)===true){
 header("Location:viewnoseat.php");
}

  ;




?>
        













      
  
      
      
   