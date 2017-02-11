<?php
session_start();
include_once("config.php");

if(isset($_POST['submit'])){
  
  $sql="INSERT INTO `patients`(name,age,address,contact,sex,category,type,doctor_allotted)
VALUES('{$_POST['name']}','{$_POST['age']}','{$_POST['address']}','{$_POST['contact']}','{$_POST['sex']}','{$_POST['category']}','{$_POST['type']}',''{$_POST['doctor_alloted']}'')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
?>