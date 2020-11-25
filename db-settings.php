<?php
//Development Database Information
$db_host = "localhost"; //Host address (most likely localhost)
$db_name = "GoogleMaps"; //Name of Database
$db_user = "root"; //Name of database user
$db_pass = ""; //Password for database user

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
GLOBAL $mysqli;
?>