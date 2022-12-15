<?php
$servername = "localhost"; // name of server
$username = "root"; //name of user
$password = ""; //pass
$name_db = "front"; //name of table

$conn = new mysqli($servername, $username, $password, $name_db);
$conn->set_charset( 'utf8' ); 

/*  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
    echo "Connection Successfullllly";
 */
 ?>