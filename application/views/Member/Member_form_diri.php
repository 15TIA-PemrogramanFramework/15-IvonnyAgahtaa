<?php $this->load->view('Benar/Header') ?>
        <div class="content">
            <div class="container-fluid">

	<form action='<?php echo $action; ?>' method = "POST">
		
	<div class=" form-group">
			<label>Nama</label>
			<input type="text"  placeholder="Masukkan Nama" value="<?php echo $nama ?>" class="form-control" name="nama">
	</div>

	<div class=" form-group">
			<label>Alamat</label>
			<input type="text"  placeholder="Masukkan Alamat" value="<?php echo $alamat ?>" class="form-control" name="alamat">
	</div>

	<div class=" form-group">
			<label>No hp</label>
			<input type="text"  placeholder="Masukkan No Hp " value="<?php echo $nohp ?>" class="form-control" name="nohp">
	</div>

	<div class=" form-group">
			<label>E-mail</label>
			<input type="text"  placeholder="Masukkan E-mail " value="<?php echo $email ?>" class="form-control" name="email">
	</div>


	<div class=" form-group">
			<label>Foto Diri</label>
			<input type="file" name="foto_member" class="form-control" value="">
	</div>

	<input type="hidden" name="username_member" value="<?php echo $username_member; ?>">
	<button type="submit " class="btn btn-primary"><?php echo $button; ?></button>   

	<a href="<?php echo site_url('Controller_member') ?>" class="btn btn-default"> Cancel </a>

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

