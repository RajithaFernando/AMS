<?php

//Api.php

class API
{
 private $connect = '';

 function __construct()
 {
  $this->database_connection();
 }

 function database_connection()
 {
  $this->connect = new PDO("mysql:host=localhost;dbname=auditorium", "root", "");
 }

 function fetch_all()
 {
  $query = "SELECT * FROM booking ORDER BY booking_id";
  $statement = $this->connect->prepare($query);
  if($statement->execute())
  {
   while($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
    $data[] = $row;
   }
   echo $data;
  }
 }

 function insert()
 {
  if(isset($_POST["Name"]))
  {
   $form_data = array(
    ':Name'  => $_POST["Name"],
    ':phone'  => $_POST["phone"],
    ':booking_id'  => $_POST["booking_id"],
    ':event_id'  => $_POST["event_id"]
   );
   $query = "
   INSERT INTO booking 
   (Name, phone,booking_id,event_id) VALUES 
   (:Name, :phone,:booking_id,:event_id)
   ";
   $statement = $this->connect->prepare($query);
   if($statement->execute($form_data))
   {
    $data[] = array(
     'success' => '1'
    );
   }
   else
   {
    $data[] = array(
     'success' => '0'
    );
   }
  }
  else
  {
   $data[] = array(
    'success' => '0'
   );
  }
  return $data;
}
//
function fetch_single($id)
{
  $query ="SELECT * FROM booking WHERE booking_id='".$id."' ";
  $statement = $this->connect->prepare($query);
  if($statement->execute())
{
  foreach ($statement->fetchAll() as $row)
  
  {
    $data['Name'] = $row['Name'];
    $data['phone']=$row['phone'];
    $data['booking_id']=$row['booking_id'];
    $data['event_id']=$row['event_id'];
  }
  return $data;
}
}

function update()
{
  if(isset($_POST["Name"]))
  {
    $form_data = array(':Name'=>$_POST['Name'], ':phone'=>$_POST['phone'],':booking_id'=>$_POST['booking_id'],':event_id'=>$_POST['event_id'],':id'=>$_POST['id']);
    $query =" UPDATE booking SET Name=:Name, phone=:phone, booking_id=:booking_id, event_id=:event_id WHERE booking_id = :id";
    $statement = $this->connect->prepare($query);
    if($statement->execute($form_data))
    {
      $data[]=array('success'=>'1');
    }
    else
    {
      $data[]=array('success'=>'0');
    }
  }
  else
  {
    $data[] = array('success'=>'0');
  }
  return $data;
}
}

?>