<?php $this->load->view('Benar/Header') ?>
        <div class="content">
            <div class="container-fluid">



	<form action='<?php echo $action; ?>' method = "POST" enctype="multipart/form-data">
		
	<div class=" form-group">
			<label>Upload File</label>
			<input type="file"  placeholder="Upload file anda disini "  class="form-control" name="hasil_design">
	</div>


	<input type="hidden" name="id_design" value="<?php echo $id_design; ?>">
	<input type="hidden" name="status_design" value="Selesai">
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


