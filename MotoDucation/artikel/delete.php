 <?php
include"koneksi.php";
$id=$_GET['id'];
$delete="Delete from berita1 Where id='$id'";
mysqli_query($koneksi,$delete) or die("Terjadi kesalahan");
header("location:Berita.php");
?>