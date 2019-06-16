 <?php
include"koneksi.php";
$id=$_POST['id'];
$update="UPDATE berita1 SET
tanggal='$_POST[tanggal]',
judul='$_POST[judul]',
gambar='$_POST[gambar]',
keterangan='$_POST[keterangan]' where id='$id'";
mysqli_query($koneki,$update);
 header("location:Berita.php");
?>