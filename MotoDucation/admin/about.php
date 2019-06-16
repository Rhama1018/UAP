<div class="halaman">
	<h2>TENTANG KAMI</h2>
	<p>KENALAN YUK DENGAN OWNER MOTODUCATION</p>
</div>
<?php
	
$gambar= "gambar"; //folder tempat gambar disimpan
	
$handle = opendir($gambar);
	
echo '<table cellspacing="2" cellpadding="5">';
	
echo '<tr>';
	
$i = 1;
	
while(false !== ($file = readdir($handle))){
	
	if($file != '.' && $file != '..'){
	
		echo '<td style="border:10px solid #808080;" align="center">
	
			<img src="gambar/'.$file.'" width="320" /><br />
	
	
		</td>';
	
		if(($i % 4) == 0){
	
			echo '</tr><tr>';
	
		}
	
		$i++;
	
	}
	
}
	
echo '</tr>';
	
echo '</table>';
	
?>

<div class="halaman">
	
	<h1>Rahmat Okta Khoirul&emsp;&ensp;&ensp;&ensp;Rhama Shandy&emsp;&ensp;&ensp;Zihad Ubadika Agung</h1>
	<h1>1717051008&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;1717051018&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;1757051008</h1>
	<h1>&ensp;Desaigner&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;Programmer&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;Analysis&ensp;</h1>
</div>
