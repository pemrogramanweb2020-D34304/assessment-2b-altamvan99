<?php
include 'koneksi.php';
if(isset ($_GET['nama'])){
    $delete = mysqli_query($koneksi, "DELETE FROM pakaian WHERE nama='".$_GET['nama']."' ");
    header ('location:welcome.php');
}
?>