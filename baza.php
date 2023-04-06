<?php
/* 
povezava na strežnik
 */
$host="jure-p.eu";
$user="jurep_db";
$password="EA?wJ0jW-)}Jmh?dJB";
$db="jurep_maltataskone";

$link = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
?>