<?php
// header('Content-Type: application/json');

$db_username = 'admin';
$db_password = 'root1234';
$db_hostname = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com';
$db_port = '3306';
$db_name = 'db_1821982';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$q = "SELECT * FROM hunter";
$r = mysqli_query($conn, $q);

while ($item = mysqli_fetch_object($r)) {
    $json = json_encode($item);
	$dec = json_decode($json, true);
	
	echo "<ul>";
	echo "<li>". $dec["Id"]." </li>";
	echo "<li>". $dec["Username"] ."</li>";
	echo "<li>". $dec["Password"] ."</li>";
	echo "</ul>";
	echo "</ul>";
}
