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

    if(isset($_GET['event_id'])){
        $result = $booking->getBookingsByEventId($_GET['event_id']);
        echo json_encode($result);
    }

?>