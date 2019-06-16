
<div class="halaman">
	<h2>Halaman Diskusi</h2>
 <form class="form-horizontal" method="post" action="simpanBerita.php" name="frmBerita" enctype="multipart/form-data">  
   <div class="control-group">  
    <label class="control-label" for="inputJudul">Judul</label>  
     <input type="text" class="span12" placeholder="Judul Berita" name="jdl_berita" required >  
    <div class="controls">  
    </div>  
   </div>  
   <div class="control-group">  
    <textarea rows="5" cols="40" class="span12" name="isi_berita" required></textarea>  
   <label Isi Berita class="control-label" for="inputIsiBerita"></label>  
   <div class="controls">  
   </div>  
   </div>  
    <input type="file" id="inputGambar" name="gbr_berita" required>  
   <div class="control-group">  
    <label class="control-label" for="inputGambar"></label>  
    <div class="controls">  
    </div>  
   </div>  
    <button type="reset" class="btn btn-inverse">Cancel</button>  
    <div class="control-group">  
    <div class="controls">  
     <button type="submit" class="btn btn-primary">Post</button>  
    </div>  
  </div>  
</form>  
</div>