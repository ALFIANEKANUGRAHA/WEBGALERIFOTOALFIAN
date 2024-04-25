<?php
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ukk2024_alfian';
	
	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');
?>