<?php $datakuu['alamat']="daftar"; ?>

<?php $this->load->view('Benar/header',$datakuu);?>
 <div class="content">
 	 <div class="container-fluid">

	<form action='<?php echo $action; ?>' method = "POST" enctype="multipart/form-data">
		
	<div class=" form-group">
			<label>Komentar</label>
			<input type="text"  placeholder="Masukkan Komentar perubahan yang diiginkan" value="<?php echo $komentar ?>" class="form-control" name="komentar">
	</div>

	<input type="hidden" name="status_desain" value="on revisi">


	

	<input type="hidden" name="id_design" value="<?php echo $id_design; ?>">
	<button type="submit " class="btn btn-primary"><?php echo $button; ?></button>   

	<a href="<?php echo site_url('Controller_revisi') ?>" class="btn btn-default"> Cancel </a>

		</form>
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

