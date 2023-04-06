<?php
require_once 'baza.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="style/select_admin_style.css">
</head>
<body>
    <?php
    $sql = "SELECT * FROM users";
    $query = mysqli_query($link, $sql);
    echo "<table>";
    echo "<tr><th><b>user</b></th></tr>";
    while ($row = mysqli_fetch_array($query))
    {
        echo "<tr><td><a href='select_form.php?id=".$row['id']."'>".$row['name']." ".$row['surname']."</a></td></tr>";
    }   
    echo "</table>";
    ?>
    <!--Pošlje ga na select form-->
</body>
</html>