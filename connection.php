<?php
//
//https://developers.google.com/maps/documentation/javascript/mysql-to-maps#domfunctions 
//

//require("phpsqlajax_dbinfo.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

// $connection=mysql_connect ('localhost', 'root', '');
// if (!$connection) {  die('Not connected : ' . mysql_error());}

// // Set the active MySQL database

// $db_selected = mysql_select_db('GoogleMaps', $connection);
// if (!$db_selected) {
//   die ('Can\'t use db : ' . mysql_error());
// }

//Development Database Information
$db_host = "localhost"; //Host address (most likely localhost)
$db_name = "GoogleMaps"; //Name of Database
$db_user = "root"; //Name of database user
$db_pass = ""; //Password for database user

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Perform query
if ($result = $mysqli -> query("SELECT * FROM markers WHERE 1")) {
    echo "Returned rows are: " . $result -> num_rows;
  }

// Select all the rows in the markers table

// $query = "SELECT * FROM markers WHERE 1";
// $result = mysql_query($query);
// if (!$result) {
//   die('Invalid query: ' . mysql_error());
// }

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = $result -> fetch_array(MYSQLI_NUM)){
  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['id']);
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("type", $row['type']);
}

echo $dom->saveXML();

?>