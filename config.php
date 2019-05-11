<?php
$databaseHost = 'localhost';
$databaseName = 'room';
$databaseUserName = 'root';
$databasePassword = '';


$mysqli = new mysqli($databaseHost, $databaseUserName, $databasePassword, $databaseName); 
if($mysqli->connect_error){
	die('Connection Failed - ' . $mysqli->connect_error);
}
?>