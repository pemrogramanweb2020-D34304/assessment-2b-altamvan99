<?php   
include "koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];

//echo $user,$pass;

$sql=mysqli_query($koneksi, "select * from login where username ='$user'
and password='$pass'");

$login=mysqli_num_rows($sql);

if($login > 0){
    session_start();
    $_SESSION['username']=$user;
    $_SESSION['password']=$password;
    header("location: welcome.php");
}
else{
    echo "<center>Username dan password anda salah <br>";
    echo "silahkan <a href=index.php>login</a>kembali ";
    echo "atau silahkan <a href=akunbaru.php>membuat akun baru </a></center>";
}
?>