<?php include('../includes/connection.php') ?> 

<?php
$query="SELECT COUNT(userID)as total FROM sales";
	$result=mysqli_query($connection,$query);
	$data=mysqli_fetch_array($result);
	 $data['total'];
	// $i=$data['Catagery'];
	// $j=$data['ticketValue'];
	// $i=1;

	// for ($i=1; $10 < ; $i++) { 
		// echo "category:{$i} <br>";
		// for ($j=0; $j < ; $i++) { 
			// echo "{$i}*{$j}=" . $i*$j."<br>"
		// }
	// }
	$total=0;
	$sql="SELECT * FROM sales";
	 $result_set=mysqli_query($connection,$sql);
	
	 while($row=mysqli_fetch_array($result_set)){
  			 $ticket= $row['ticketValue'];
  			
  			$category=$row['Catagory'];
  			 $totalone=$ticket*$category;
  			 
  			 $total=$totalone+$total;

 }
 
	echo $total;

?>