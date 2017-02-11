<?php

	$host='localhost'; 
	$username='root';  
	$password='kamakshi5'; 
	$db_name='csi_cms'; 
	if(!@$connection=mysqli_connect($host, $username, $password,$db_name))
	 die("Cannot connect"); 
?>