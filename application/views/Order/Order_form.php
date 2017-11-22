<?php 
$datakuu['alamat']="daftar"; 
?>


<?php $this->load->view('Benar/Header',$datakuu) ?>
        <div class="content">
            <div class="container-fluid">



	<form action='<?php echo $action;?>' method = "POST" enctype="multipart/form-data">
		
	<div class=" form-group">
			<label>Jenis Design</label>
			<br>
			<input type="radio" name="jenis_design" value="CV" > CV Kerja <br>
			<input type="radio" name="jenis_design" value="Video" > Poster <br>
			<input type="radio" name="jenis_design" value="Poster" > Pamflet <br>
			<input type="radio" name="jenis_design" value="Logo" > Logo <br>
					
						

	</div>

	<div class=" form-group">
			<label>Ukuran Kertas</label>
			<br>
			<input type="radio" name="ukuran_kertas" value="A3" > A3 <br>
			<input type="radio" name="ukuran_kertas" value="A4"> A4 <br>
			<input type="radio" name="ukuran_kertas" value="A5"> A5 <br>
		
	</div>


	<div class=" form-group">
			<label>Saran Warna </label>
			<input type="text"  placeholder="Warna yang diinginkan " value="" class="form-control" name="saran_warna">
	</div>
	<div class=" form-group">
			<label>Deskripsi Desain</label>
			<textarea  placeholder="Deskripsi design " class="form-control" name="deskripsi_design">   </textarea>
			
	</div>
	<div class=" form-group">
			<label>Resource</label>
			<input type="file" name="resource" class="form-control" value="">
	</div>


	<input type="hidden" name="username_member" value="<?php echo $this->session->userdata('username_member') ?>">
	<input type="hidden" name="status_design" value="On going">
	<button type="submit " class="btn btn-primary"><?php echo $button; ?></button>   

	<a href="<?php echo site_url('Controller_design') ?>" class="btn btn-default"> Cancel </a>

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


