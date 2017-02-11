<?php

$server = 'localhost';

$user = 'root';

$pass = '';

$db = 'central';

$lat=$_GET['lat'];

$lon=$_GET['lon'];
// Connect to Database

$type=$_GET['type'];

$connection = mysqli_connect($server,$user,$pass,$db)

or die ("Could not connect to server ... \n" );

$ab=mysqli_query($connection,"SELECT *  FROM hospitals WHERE $type='true'") or die(mysql_error());
//ACOS(SIN(RADIANS(Latitude)) * SIN(RADIANS($lat)) + COS(RADIANS(Latitude ) )* COS(RADIANS( $lat )) * COS( RADIANS( Longitude ) - RADIANS( $lon )) ) * 6380 AS distance

$rows=[];

while($row=mysqli_fetch_array($ab)){
	$rows[]=$row;
}
echo json_encode($rows);
?>
