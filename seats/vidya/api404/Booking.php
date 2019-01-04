<?php
    class Booking{

        // database connection and table name
        private $conn;
        private $table_name = "booking";

        // constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }

        function getBookingsByEventId($eventId){
            $query = "SELECT * FROM ".$this->table_name." WHERE event_id=".$eventId;
            $statement = $this->conn->prepare($query);
            $statement->execute();

            if($statement->rowCount() > 0)
            {
                while($row = $statement->fetch(PDO::FETCH_ASSOC))
                {
                    $data[] = $row;
                }
                return $data;
            }
            else{
                return null;
            }
        }

        function insert($booking) {
            $query = "INSERT INTO ".$this->table_name."(username,phone,seatsNo,event_id) VALUES(?,?,?,?)";
            $statement = $this->conn->prepare($query);
            return $statement->execute( [ $booking['username'], $booking['phone'], $booking['seatsNo'], $booking['event_id'] ] );
        }
    }
?>