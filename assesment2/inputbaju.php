<html>
<head> 
<body>
    <h2>Input Baju </h2>

    <a href="welcome.php" style ="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius: 2px; text-decoration:none;">Biodata</a><br><br>
    <form action="" method="POST" enctype="multipart/form-data"> 
    <table>
    

    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" placeholder="Nama" required></td>
    </tr>

    <tr>
<td>Harga</td>
    <td>:</td>
    <td><input type="text" name="harga" placeholder="harga" required></td>
    </tr>

    <tr>
    <td>Stok</td>
    <td>:</td>
    <td><input type="text" name="stok" placeholder="Stok" required></td>
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
    $insert = mysqli_query($koneksi, "INSERT INTO pakaian VALUES 
    (
    '" .$_POST ['nama']. "',
    '" .$_POST ['harga']. "',
    '" .$_POST ['stok']. "') ");
                   

        if($insert){
            echo 'Berhasil disimpan';
        }
        else{
            echo 'gagal disimpan'.mysqli_error($koneksi);
        }
    }
    ?>

    
</body>
</head>
</html>