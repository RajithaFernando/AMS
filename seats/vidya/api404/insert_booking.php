<?php

    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once 'Database.php';
    include_once 'Booking.php';

    // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();

    // initialize object
    $booking = new Booking($db);


    if(isset( isset($_POST['phone']) && isset($_POST['seatsNo']) && isset($_POST['event_id'])){
        $newBooking = array(
            //"userID" => $_POST['username'],
            //"phone" => $_POST['phone'],
            //"seatsNo" => $_POST['seatsNo'],
            //"event_id" => $_POST['event_id']
			
			"userID" => '1',
			"eventRef" => $_POST['event_id'],
			"seatID" => $_POST['seatsNo'],
			"ticketValue" => '1000' ,
			"Catagory"	=> '1' ,
            "phone" => $_POST['phone'],
            
            
        );
			
        );
        echo $sales->insert($newBooking);
    }

?>