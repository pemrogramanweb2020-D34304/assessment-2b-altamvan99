<html>
<head>
    <title>pembayaran</title>
</head>
<body>
    <h3>Form Hitung Total Bayar</h3>

    <form method="POST">
        <table>
 <?php
include 'koneksi.php';?>

			<tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <select name="stok">
                        <option value="">- Jumlah -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Hitung">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h3>Hasil :</h3>
    
    <?php
    if(isset($_POST['hitung'])){
        $nama    =$_POST['nama'];
        $harga    =$_POST['harga'];
        $stok    =$_POST['stok'];
        $total    =$harga*$stok;
        echo "
            <table border='1' cellpadding='4'>
                <tr>
                    <td>Nama Barang</td>
                    <td>Harga</td>
                    <td>Banyaknya</td>
                    <td>Total Harga</td>
                </tr>
                <tr>
                    <td>$nama</td>
                    <td align='right'>";echo number_format($harga,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($stok,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($total,0,',','.');echo "</td>
                </tr>
            </table>
        ";
    }
?>
</body>
</html>