<?php
include('api404.php');?>

<?php

//test_api.php



$api_object = new API();
$data=null;
if(isset($_GET['action'])) {


	if($_GET["action"] == 'fetch_all')
	{
	    echo "working...";
 		$data = $api_object->fetch_all();
	}

	elseif($_GET["action"]=='insert') 
	{
		$data = $api_object->insert();
	}

	elseif ($_GET["action"]=='fetch_single') 
	{
		$data = $api_object->fetch_single($_GET["id"]);
	}
	elseif ($_GET["action"]=='update')
	{
		$data = $api_object->update();
	}
}
	echo json_encode($data);

?>