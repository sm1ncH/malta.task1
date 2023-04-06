<?php
/* 
povezava na strežnik
 */
$host="jure-p.eu";
$user="jurep_db";
$password="yUo}lx,nG4jS";
$db="jurep_maltataskone";

$link = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
?>