<?php
$a = $_POST['username'];
$b = $_POST['password'];

$server = "localhost";
$user = "root";
$pwd = "";
$db = "db_facebook";
$koneksi = mysqli_connect($server, $user, $pwd, $db);

$sql = "insert into tb_login values('','$a','$b')";
mysqli_query($koneksi, $sql);
header("location:daftar.php");