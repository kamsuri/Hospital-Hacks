<?php

/*

CONNECT-DB.PHP

Allows PHP to connect to your database

*/



// Database Variables (edit with your own server information)

$server = 'localhost';

$user = 'root';

$pass = '';

$db = 'central';

$hid=$_GET['hid'];

$rate=$_GET['rate'];
// Connect to Database

$connection = mysqli_connect($server, $user)

or die ("Could not connect to server ... \n" . mysql_error ());

mysql_select_db($db)

or die ("Could not connect to database ... \n" . mysql_error ());

$a=mysql_query("UPDATE hospitals SET Total_ratings = Total_ratings + 1 WHERE Hid=$hid");

$b=mysql_query("UPDATE hospitals SET Rating=(Rating + $rate)/Total_ratings");

/***$query2="SELECT * from hospitals";

$result = mysql_query($query2);

while ($row = mysql_fetch_assoc($result)) {
    echo $row['Rating']."<br />";
    echo $rate;
}***/
?>