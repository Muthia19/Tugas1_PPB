<html> 
<head> 
    <title>Facebook</title> 
</head> <body> 
    <?php 
    $server = "localhost"; 
    $user = "root"; 
    $pwd = ""; 
    $db = "db_facebook"; 
    $koneksi = mysqli_connect($server, $user, $pwd, $db); 
    $id = $_GET['id']; 
    $sql = "select * from tb_login where id=$id"; 
    $data = mysqli_query($koneksi, $sql); 
    $d = mysqli_fetch_array($data); 
    ?> 
    <form action="update.php" method="POST"> 
        <label>Username:</label> 
        <input type="text" name="username" value="<?php echo $d[1]; ?>"><br> 
        <label>Password:</label> 
        <input type="text" name="password" value="<?php echo $d[2]; ?>"><br> 
        <button type=" submit">Submit</button> 
        <button type="reset">Reset</button> 
    </form> 
</body> 
</html> 
