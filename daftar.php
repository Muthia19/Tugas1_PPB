<!doctype html> 
<html lang="en"> 
<head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">     <!-- Bootstrap CSS --> 
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">     
    <title>Facebook</title> 
</head> 
<body> 
    <?php 
    include "nav.html"; 
    ?> 
    <br> 
    <div class="container"> 
        <table class=" table"> 
            <thead> 
                <tr> 
                    <th scope="col">Username</th> 
                    <th scope="col">Password</th> 
 
                </tr> 
            </thead> 
            <tbody> 
                <?php 
                $server = "localhost"; 
                $user = "root"; 
                $pwd = "percayalah"; 
                $db = "db_facebook"; 
                $koneksi = mysqli_connect($server, $user, $pwd, $db); 
                $sql = "select tb_login.username, tb_login.password"; 
                $data = mysqli_query($koneksi, $sql); 
                while ($d = mysqli_fetch_array($data)) { 
                    ?> 
                        <tr> 
                            <th><?php echo $d[1]; ?></th> 
                            <td><?php echo $d[2]; ?></td> 
 
                            <td><?php  
                            $a= $d[1] * $d[2];                      
                            echo $a; ?></td> 
                            <td> 
                                <a href="hapus.php?id=<?php echo $d[0]; ?>">Hapus</a>                             
                                <a href="ubahtransaksi.php?id=<?php echo $d[0]; ?>">Ubah</a> 
                            </td> 
                        </tr> 
                    <?php 
                    } 
                    ?> 
                </tbody> 
            </table> 
        </div> 
        <!-- Optional JavaScript; choose one of the two! --> 
        <!-- Option 1: Bootstrap Bundle with Popper  
        <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script> --> 
        <!-- Option 2: Separate Popper and Bootstrap JS --> 
        <script src="bootstrap/umd/popper.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script> 
    </body> 
    </html> 
    
    