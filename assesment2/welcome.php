<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<html>
<head>
  <title>Halaman Setelah Login</title>
</head>
<body>
  <h1>Selamat datang <?php echo $_SESSION['username']; ?></h1>
  <h4>Anda berhasil login ke dalam aplikasi</h4>

  <a href="input.php" style ="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius: 2px; text-decoration:none;">Tambah Data</a><br><br>

    <table border="1" cellspacing="0" width="50%"> 
    <tr style="text-align:center; font -weight:bold; background-color:#eee; ">
    <td>no</td>
    
    <td>nama</td>
    <td>Harga</td>
    <td>Stok</td>
    
    <td>opsi</td>
    </tr>
   

<?php
include 'koneksi.php';
$no=1;
$select = mysqli_query($koneksi, "select * from pakaian");
if(mysqli_num_rows($select) > 0){
while($hasil = mysqli_fetch_array($select) ){
?>

  <tr style="text-align:center;">
    <td><?php echo $no++ ?></td>
    
    <td><?php echo $hasil ['nama']?> </td>
    <td><?php echo $hasil ['harga']?> </td>
    <td><?php echo $hasil ['stok']?> </td>
    
    <td>
       <a href="cart.php">Order Now</a>
    </td>

    </tr>


<?php }}else{ ?> 
    <tr>
        <td colspan="7"  style="text-align:center;">Data Kosong</td>
    </tr>
<?php } ?>
    </table>
  <a href="logout.php">Logout</a>
</body>
</html>