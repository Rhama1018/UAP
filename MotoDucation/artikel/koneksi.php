 <?php
$host="localhost";
$user="root";
$password="";
$database="berita";
//koneksi ke database
$koneksi=mysqli_connect($host,$user,$password);
//membuka database
$buka=mysqli_select_db($koneksi,$database);
?>