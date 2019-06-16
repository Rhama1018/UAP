<html>
<head>
<title>Berita Online</title>
<meta http-equiv="content-type"content="text/html;
charset=UTF-8">
<link href="style1.css"rel="stylesheet"type="text/css"/>
<script src="../../fa/js/all.js" type="text/javascript" ></script>

</head>
<a href="javascript:history.go(-1)">Kembali Ke Home</a>
<body>
<div id="kanvas">
<div id="header">
<h1 align="center">HALAMAN ADMIN</h1>
<h1 align="center">ARTIKEL</h1>
</div>
<div id="menu">
</div>
<div id="content">
<div class="deskripsi">
<br>
<form method="post" action="tambah_artikel.php">
<input type="submit" value="Tambah artikel">
</form>
<table border=1>
<tr bgcolor="#0099FF">
<th width="300">Judul</th>
<th width="50">Tanggal</th>
<th width="200">Gambar</th>
<th width="300">Keterangan</th>
</tr>

<?php
include"koneksi.php";
$tampil="select * from berita1 order by id desc limit 5";
$qryTampil=mysqli_query($koneksi,$tampil);
while($dataTampil=mysqli_fetch_array($qryTampil)){
?>
<tr valign="top">
<td height="104"><font size="+2"><?php echo $dataTampil['judul'];?></font><br></td>
<td><?php echo $dataTampil['tanggal'];?><br></td>
<td><img src="images/<?php echo $dataTampil['gambar'];?>"align="center" width="169" height="85"><br><br><br><br><br></td>
<td align="justify"><?php echo $dataTampil['keterangan'];?><br></td>
</tr>
<tr bgcolor="#0099FF">
<td colspan="4" align="center"><a href="delete.php?id=<?php echo $dataTampil['id'];?>" onClick="return confirm('apakah anda ingin menghapusnya')"
><i class="fas fa-trash-alt	"></i></a> | <a href="tampil_edit_data.php?id=<?php echo $dataTampil['id'];?>"><i class="fas fa-edit"></i></a><br></td>
</tr>
<?php } ?>
</table>
</div></div>
<div style="clear:both"></div>
</div>
</body>
</html>
