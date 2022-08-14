<?php
$servername = "localhost";
$username = "root"; 
$password = "qwerty"; 
$db = "testing"; 
$con = new mysqli($servername, $username, $password, $db);
if ($con->connect_error) 
{
 die("Connection failed: " . $con->connect_error);
}
?>