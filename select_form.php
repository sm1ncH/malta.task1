<?php
require_once 'baza.php';
require_once 'cookie.php';
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$query = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($query)){
    $name = $row['name'];
    $surname = $row['surname'];
    $card_number = $row['card_number'];
    $company = $row['company'];
    $address1 = $row['address1'];
    $address2 = $row['address2'];
    $town = $row['town'];
    $post = $row['post'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/select_form_style.css">
</head>
<body>
    <?php

        echo "<head><link rel='stylesheet' href='style/select_form_style.css'></head><nav><ul><li><a href='insert_form1.php'>Full time form<span></span><span></span><span></span><span></span></a></li></ul></nav>";
        
        echo "<head><link rel='stylesheet' href='style/select_form_style.css'></head><nav><ul><li><a href='insert_form2.php'>Part time form<span></span><span></span><span></span><span></span></a></li></ul></nav>";

        echo "<head><link rel='stylesheet' href='style/select_form_style.css'></head><nav><ul><li><a href='insert_form3.php'>Student form<span></span><span></span><span></span><span></span></a></li></ul></nav>";
        
        
        setcookie("id",$id);
        setcookie("name",$name);
        setcookie("surname",$surname);
        setcookie("card_number",$card_number);
        setcookie("company",$company);
        setcookie("address1",$address1);
        setcookie("address2",$address2);
        setcookie("town",$town);
        setcookie("post",$post);
    ?>
</body>
</html>