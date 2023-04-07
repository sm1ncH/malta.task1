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
    echo "<tr><th><b>User</b></th><th><b>Card number</b></th><th><b>Company</b></th><th><b>Addressline 1</b></th><th><b>Addressline 2</b></th><th><b>Town</b></th><th><b>Post</b></th></tr>";
    while ($row = mysqli_fetch_array($query))
    {
        echo "<tr><td>".$row['name']." ".$row['surname']."</td><td>".$row['card_number']."</td><td>".$row['company']."</td><td>".$row['address1']."</td><td>".$row['address2']."</td><td>".$row['town']."</td><td>".$row['post']."</td><td id='button'><a href='select_form.php?id=".$row['id']."'>Select</a></td></tr>";
    }   
    echo "</table>";
    ?>
    <!--Pošlje ga na select form-->
</body>
</html>