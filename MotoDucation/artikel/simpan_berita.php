<?php
include"koneksi.php";
$tanggal=$_POST['tanggal'];
$judul=$_POST['judul'];
$gambar=$_POST['gambar'];
$keterangan=$_POST['keterangan'];
$sql="INSERT into berita1 (tanggal,judul,gambar,keterangan)
                                    value ('$tanggal','$judul','$gambar','$keterangan')";
mysqli_query($koneksi,$sql)
or die ("Data tidak berhasil disimpan".mysql_error());
            header('location:Berita.php');

?>