<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'Hospital';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die ('Error connecting to mysql');
?>