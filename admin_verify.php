<?php
require_once "baza.php";
require_once "cookie.php";
?>
<?php
$zzzs = $_GET['username'];
$geslo = $_GET['password'];
echo $zzzs;
$sql="SELECT * FROM admins WHERE username = '$zzzs'";
$query=mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($query);
if ($num_rows > 0) {
    $sql="SELECT * FROM admins WHERE username = '$zzzs' AND password = '$geslo'";
    $query=mysqli_query($link, $sql);
    $num_rows = mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);
    if ($num_rows > 0) {
        echo "Uporabnik obstaja";
        setcookie("uspesno", "Prijava uspešna.");
        setcookie("neuspesno", "");
        setcookie("odjava", ""); 
        setcookie("uporabnik_id", $row['id']);
        header("Location: select_admin.php");
    }
    else{
      setcookie("neuspesno", "Napačno geslo.");
      setcookie("odjava", "");
      header("Location: admin_login.html");
    }
  }
  else {
    setcookie("neuspesno", "Ta uporabnik ne obstaja.");
    setcookie("odjava", "");
    header("Location: admin_login.html");
  }
?>
</body>
</html>