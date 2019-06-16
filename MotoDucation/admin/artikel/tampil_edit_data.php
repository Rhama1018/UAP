<html>
<head>
<title>Berita Online</title>
<a href="javascript:history.go(-1)">Kembali Ke Home</a>
<meta http-equiv="content-type"content="text/html;
charset=UTF-8">
<link href="style1.css"rel="stylesheet"type="text/css">
</head>
<body>
<div id="kanvas">
 <div id="header">
  <h1 align="center">HALAMAN EDIT BERITA</h1>
    </div>
<div id="menu">
</div>
<div id = "content">
    <div class = "deskripsi">
    <p>
<?php
include"koneksi.php";
$tampil=("select *from berita1 Where id='$_GET[id]'");
$qryTampil=mysqli_query($koneksi,$tampil);
while($dataTampil=mysqli_fetch_array($qryTampil)){
?>
<form name="form1" method="post" action="aksi_edit_berita.php">
<table>
<input name="id" type="hidden" id="id" value="<?php echo $dataTampil['id']; ?>">
<tr>
<td height="40">Judul</td>
<td>:<input name="judul" type="text" style="width:300; height:40;" id="judul" value="<?php echo $dataTampil['judul'];?>" /></td>
</tr>
<tr>
<td height="40">Tanggal</td>
<td>:<input name="tanggal" type="text" style="width:100; height:40;" id="tanggal" value="<?php echo $dataTampil['tanggal']; ?>" />Nb:Format = TAHUN-BULAN-HARI(misal:2011-08-12 / 20140203 )</td><br>
</tr>
<tr>
<td colspan="2"><img src="images/<?php echo $dataTampil['gambar'];?>" align="left" width="200" height="100" />&nbsp;</font>
<input name="gambar" type="file" id="gambar" value="images/<?php echo $datatampil['gambar'];?>" />
  <br>Nb:jangan lupa diedit<br><br><br></td>
</tr>
<tr>
<td height="40">Keterangan</td>
<td align="justify">:
<input name="keterangan" type="text" style=" height:50; width:700;" id="keterangan" value="<?php echo $dataTampil['keterangan'];?>"/></td>
</tr>
<tr>
<td colspan="2"align="center"><input type="submit" name="submit" value="Simpan"></td>
</tr>
</table>
</form>
<?php } ?>
</p>
            </div></div>
  <div style="clear:both"></div>
  <div id="footer">
    </div>
    </div>
  </body>
  </html>
