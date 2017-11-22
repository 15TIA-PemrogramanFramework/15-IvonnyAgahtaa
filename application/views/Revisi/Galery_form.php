<?php 
$datakuu['alamat']="tambah"; 
?>

<?php $this->load->view('Benar/header',$datakuu);?>
 <div class="content">
 	 <div class="container-fluid">
 	 	
	<form action='<?php echo $action; ?>' method = "POST" enctype="multipart/form-data">
		

	<div class=" form-group">
			<label>Jenis Design</label>
			<input type="text" name="jenis" class="form-control" value="">
	</div>


	<div class=" form-group">
			<label>Keterangan Design</label>
			<input type="text" name="keterangan" class="form-control" value="">
	</div>


	<div class=" form-group">
			<label>Foto</label>
			<input type="file" name="file_gambar" class="form-control" value="">
	</div>




	<input type="hidden" name="id_gambar" value="<?php echo $id_gambar; ?>">
	<button type="submit " class="btn btn-primary"><?php echo $button; ?></button>   

	<a href="<?php echo site_url('Controller_galery') ?>" class="btn btn-default"> Cancel </a>

		</form>

  
    </div>

</div>
       <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
               
            </div>
        </footer>

    </div>
</div>

<?php $this->load->view('Benar/Footer') ?>

