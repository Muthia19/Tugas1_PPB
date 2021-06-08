<?php
 
 $server = "localhost";
 $user = "root";
 $pwd = "";
 $db = "db_facebook";
 $koneksi = mysqli_connect($server, $user, $pwd, $db);

 $sql = "select * from tb_login where userid=$a and password=$b";
 $data = mysqli_query($koneksi, $sql);
 $cek = mysqli_num_rows($data);
 echo $cek;

$a = $_POST['userid'];
$b = $_POST['password'];

echo $a;
echo $b;

 ?>