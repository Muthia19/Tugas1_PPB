<?php
$server = "localhost";
$user = "root";
$pwd = "";
$db = "db_facebook";
$koneksi = mysqli_connect($server, $user, $pwd, $db);
$id = $_GET['id'];
$sql = "delete from tb_login where $id=id";
mysqli_query($koneksi, $sql);
header("location:daftar.php");
?>