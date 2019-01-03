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