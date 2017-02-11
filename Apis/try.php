<?php
    if(isset($_POST['submit'])){
    $json = file_get_contents(urlencode("192.168.43.169/AF/location_list.php?lat=28.749572&lon=77.1162062&type='{$_POST['type']}'"));
    $array = json_decode($json);

$urlPoster=array();
foreach ($array as $value) { 
    $urlPoster[]=$value->urlPoster;
}

print_r($urlPoster);
    }
     ?>