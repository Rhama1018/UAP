<div class="halaman">
	<h2>TENTANG KAMI</h2>
	<p>KENALAN YUK DENGAN OWNER MOTODUCATION</p>
</div>
<?php
$gambar = glob("gambar/*.*"); 
   for ($i=0; $i<count($gambar); $i++) 
   { 
   $single_image = $gambar[$i];
   ?>
       <img src="<?php echo $single_image; ?>" width="200" height="200" />
<?php
 }
?>

<div class="halaman">
	<p>Zihad Ubadika Agung   Rhama Shandy Rahmat okta koirul</p>
	<p>1757051008 1717051018 1717051008</p>
</div>