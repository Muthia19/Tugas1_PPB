<?php
$server = "localhost";
$user = "root";
$pwd = "";
$db = "db_facebook";
$koneksi = mysqli_connect($server, $user, $pwd, $db);
$a = $_POST['userid'];
$b = $_POST['password'];
$sql = "update tb_login set password='$e' where
username='$a'";
mysqli_query($koneksi, $sql);
echo $a;
echo $b;
header("location:daftar.php");
?>