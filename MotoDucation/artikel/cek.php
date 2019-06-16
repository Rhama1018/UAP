 <?php
session_start();
include"koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$password=$password;
$perintah="select * from admin where username='$username' && password='$password'";
$perintah_di_query=mysqli_query($koneksi,$perintah);
$ketersediaan=mysqli_num_rows($perintah_di_query);
if ($ketersediaan>=1){
            $_SESSION['username']=$username;
            header("location:Berita.php");
}else{
            echo "cek password dan username anda kembali <a href='login.php'> disini</a>";
}
?>