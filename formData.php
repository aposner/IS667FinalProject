<?php 

include_once("config.php");
include_once("functions.php");

$lat= trim($_POST['lat']);
$long= trim($_POST['lng']);
$name= trim($_POST['name']);
$address= trim($_POST['address']);
$type= trim($_POST['type']);

insertMapData($lat, $long, $name, $address, $type);


echo "Data Inserted";




?>
