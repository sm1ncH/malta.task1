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
</head>
<body>
    <?php
    $sql = "SELECT * FROM users";
    $query = mysqli_query($link, $sql);
    echo "<table border='1'>";
    echo "<tr><td colspan=2><b>user</b></td></tr>";
    while ($row = mysqli_fetch_array($query))
    {
        echo "<tr><td><a href='select_form.php?id=".$row['id']."'>".$row['name']." ".$row['surname']."</a></td></tr>";
    }   
    echo "</table>";
    ?>
    <!--Pošlje ga na select form-->
</body>
</html>