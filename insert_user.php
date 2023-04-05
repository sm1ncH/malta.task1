<?php
require_once('baza.php');
$name = $_POST["name"];
$surname = $_POST["surname"];
$card_number = $_POST["card_number"];
$company = $_POST["company"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$town = $_POST["town"];
$post = $_POST["post"];

$sql = "INSERT INTO users (name, surname, card_number, company, address1, address2, town, post) VALUES ('$name', '$surname', '$card_number','$company','$address1','$address2','$town','$post');";
$result = mysqli_query($link, $sql);


?>

<!DOCTYPE html>
<head>
    <title>Insert</title>
</head>
<body>
    <a href="admin_login.html">Continue as admin</a>
</body>
</html>