<?php
    $json = file_get_contents("http://192.168.43.169/AF/location_list.php?lat=28.749572&lon=77.1162062&type=Gynaecologist");
 echo $json;
    $array = json_decode($json);
print_r($array);
?>