<?php

$server = 'localhost';

$user = 'root';

$pass = '';

$db = 'central';

$lat=$_GET['lat'];

$lon=$_GET['lon'];
// Connect to Database

$connection = mysql_connect($server, $user)

or die ("Could not connect to server ... \n" . mysql_error ());

mysql_select_db($db)

or die ("Could not connect to database ... \n" . mysql_error ());

$ab=mysql_query("SELECT *  FROM hospitals WHERE ACOS( SIN(RADIANS( Latitude ) ) * SIN( RADIANS( $lat ) ) + COS( RADIANS( Latitude ) ) * COS( RADIANS( $lat )) * COS(RADIANS('Longitude' ) - RADIANS( $lon )) ) * 6380 < 7378") or die(mysql_error());
//ACOS(SIN(RADIANS(Latitude)) * SIN(RADIANS($lat)) + COS(RADIANS(Latitude ) )* COS(RADIANS( $lat )) * COS( RADIANS( Longitude ) - RADIANS( $lon )) ) * 6380 AS distance
while ($row = mysql_fetch_assoc($ab)) {
    echo $row['Hid']."<br />";
    echo $row['Name']."<br />";
}
printf("Found Nothing");
?>