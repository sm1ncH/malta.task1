<?php
/* 
povezava na strežnik
 */
$host="localhost";
$user="root";
$password="m1h42005";
$db="malta1";

$link = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
?>