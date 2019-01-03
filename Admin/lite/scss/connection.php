<?php

$dbservername = "localhost";
$dbUsername = "laravel";
$dbPassword = "Raji@123";
$dbName = "auditorium";

$connection = mysqli_connect($dbservername, $dbUsername, $dbPassword,$dbName);

if ($connection->connect_error) {
	die("Connection Failed". $conn->connect_error);
}		


?>