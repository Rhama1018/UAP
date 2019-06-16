<!DOCTYPE html>
<html>
<head>
	<title>MOTODUCATION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- ---------------------- -->
</head>
<body>
<!-- 
-->
<div class="content">
	<header>
		
		<h1 class="judul">SELAMAT DATANG</h1>
		<h1 class="judul">MOTODUCATION</h1>
	</header>
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="artikel/Berita.php?page=artikel">ARTIKEL</a></li>
			<li><a href="index.php?page=diskusi">DISKUSI</a></li>
			<li><a href="index.php?page=about">ABOUT</a></li>
			<li><a href="login.php?page=logout">LOGOUT</a></li>
		</ul>
	</div>
		
	
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'artikel':
				include "artikel/artikel.php";
				break;
			case 'diskusi':
				include "diskusi.php";
				break;
			case 'about':
				include "about.php";
				break;
			case 'logout';
				include "login.php";
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>
