<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<div class="container">  
<br><br>
<h1 style="text-align: center;font-size:40px;font-weight: bold;">Registration Portal</h1>
<form id="contact" action="form.php" method="post">
    <fieldset>
      <input placeholder="Name" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Age" type="number" min="1" name="age" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Address" name="address" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Contact" name="contact" type="text" pattern="[789][0-9]{9}" tabindex="4" required>
    </fieldset>
    Sex:
     <select name="sex">
     <option value="Male">Male</option>
     <option value="Female">Female</option>
     <option value="Others">Others</option>
     </select><br>
     Category:
     <select name="category">
     <option value="Consultation">Consultation</option>
     <option value="emergency">Emergency</option>
     </select> <br>
     
     Doctor's speciality:
    <select name="type">

    <?php
    include_once("config.php");
    $query = "select * from types";
    $results = mysqli_query($conn,$query);
    while ($rows = mysqli_fetch_assoc($results)){ 
    ?>
    <option value="<?php echo $rows['Name'];?>"><?php echo $rows['Name'];?></option>
    <?php
    } 
    ?>
</select>

<br>
    Appointed Doctor: 
    <select name="doctor_allotted">

    <?php
    include_once("config.php");
    $query = "SELECT * from doctors WHERE";
    $results = mysqli_query($conn,$query);
    while ($rows = mysqli_fetch_assoc($results)){ 
    ?>
    <option value="<?php echo $rows['Name'];?>"><?php echo $rows['Name'];?></option>

    <?php
    } 
    ?>
</select>


     <!--
      <select name="type">
     <option value="Male">Male</option>
     <option value="Female">Female</option>
     </select> 
      <select name="doctor alloted">
     <optgroup label = "Choose One">
     <option value="Male">Male</option>
     <option value="Female">Female</option>
     <option value="Others">Others</option>
     </select> 
     -->
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
<?php
session_start();
include_once("config.php");

if(isset($_POST['submit'])){
  
  $sql="INSERT INTO `patients`(name,age,address,contact,sex,category,type,doctor_allotted)
VALUES('{$_POST['name']}','{$_POST['age']}','{$_POST['address']}','{$_POST['contact']}','{$_POST['sex']}','{$_POST['category']}','{$_POST['type']}','{$_POST['doctor_allotted']}')";
if ($conn->query($sql) === TRUE) {
    echo "<p style='text-align:center;font-weight:bold;'>New record created successfully</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
?>