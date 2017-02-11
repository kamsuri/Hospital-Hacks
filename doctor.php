<?php
session_start();                                                                      
include_once("config.php");
    $count=0;
    $query = "SELECT * from patients WHERE Doctor_Allotted='{$_session['dname']}' AND Admission='0'";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));;
    if(mysqli_num_rows($result)>0){
    while ($row =mysqli_fetch_array($result)){ 
    $count++;
    }
    }

echo "Patients Left:"; echo $count ;
 ?><button name="Logout" type="submit" id="Logout" onclick="logout.php"></button>
  <?php
    $query = "SELECT * from patients WHERE Doctor_Allotted='{$_session['dname']}'";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));;
    if(mysqli_num_rows( $result)>0){
    while ($row =mysqli_fetch_array($result)){ 
    echo nl2br("\n\nName:")                                             ; echo $row['Name'];
    echo nl2br("\nAge:") ; echo $row['Age'];
    echo nl2br("\nSex:") ; echo $row['Sex'];
    echo nl2br("\nContact:");      echo $row['Contact'];
    //echo nl2br("<tr><td>".$row['Name']."</td><td>  ".$row['Age']."</td><td>  ".$row['Contact']."</td><td>  ".$row['Sex']."</td></tr>\n");
    $_session['pid']=$row['pid'];
    echo $_session['pid'];
    ?>
    <head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class="container">  
<form id="contact" action="doctor.php" method="post">
    <fieldset>
      <input placeholder="Prescription" type="text" tabindex="1" required autofocus>
    </fieldset>
    Admission Required:
     <select name="Admission" required>
     <option value="Male">Yes</option>
     <option value="Female">No</option>
     </select> <br>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
<br><br>
<?php
  }
  }

if(isset($_POST['submit'])){
  if(isset($_session['pid'])){

    if($_POST['Admission']=="Yes"){
     $sql = "UPDATE patients Set Admission='1' WHERE pid='{$_session['pid']}'";
     $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    }
    else{

  $sql = "DELETE FROM patients WHERE pid='{$_session['pid']}'";
  $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
     $sql = "UPDATE patients Set Admission='0' WHERE pid='{$_session['pid']}'";
     $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    }
}
}
?>

   