<html>
<head> 
<body>
    <h2>Input data </h2>

    <a href="welcome.php" style ="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius: 2px; text-decoration:none;">Biodata</a><br><br>
    <form action="" method="POST" enctype="multipart/form-data"> 
    <table>
    <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" placeholder="Masukan Username" required></td>
    </tr>

    <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="Password" name="password" placeholder="Masukan Password" required></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan"></td>
    </tr>

    </table>
    </form>

    <?php 
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
    $insert = mysqli_query($koneksi, "INSERT INTO login VALUES 
    ('" .$_POST ['username']. "',
    '" .$_POST ['password']. "') ");

        if($insert){
            echo 'Berhasil disimpan';
            echo "silahkan <a href=index.php> LOGIN </a> kembali";
        }
        else{
            echo 'gagal disimpan'.mysqli_error($koneksi);
        }
    }
   
    
    ?>
</body>
</head>
</html>