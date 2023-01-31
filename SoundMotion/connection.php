<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'SoundMotionPortfolio';

$connection = mysqli_connect($hostname, $username, $password, $dbname)
	or die(mysqli_connect_error());
?>

