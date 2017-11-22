<?php 
$datakuu['alamat']="dashboard"; 
?>

<?php $this->load->view('Benar/Header',$datakuu) ?>
        <div class="content">
            <div class="container-fluid">




	<form action='<?php echo site_url('Controller_register/tambah_aksi'); ?>' method = "POST">

		<div class=" form-group">
			<label>Data Diri</label>
		</div>
		
	<div class=" form-group">
			<label>Nama</label>
			<input type="text"  placeholder="Masukkan Nama" value="" class="form-control" name="nama">
	</div>

	<div class=" form-group">
			<label>Alamat</label>
			<input type="text"  placeholder="Masukkan Alamat" value="" class="form-control" name="alamat">
	</div>

	<div class=" form-group">
			<label>No hp</label>
			<input type="text"  placeholder="Masukkan No Hp " value="" class="form-control" name="nohp">
	</div>

	<div class=" form-group">
			<label>E-mail</label>
			<input type="text"  placeholder="Masukkan E-mail " value="" class="form-control" name="email">
	</div>

	

	<div class=" form-group">
			<label>Username</label>
			<input type="text"  placeholder="Masukkan Password" value="" class="form-control" name="username_member">
	</div>

	<div class=" form-group">
			<label>Password</label>
			<input type="text"  placeholder="Masukkan Password" value="" class="form-control" name="password_member">
	</div>

	
	<button type="submit " class="btn btn-primary">Register</button>   

	<a href="<?php echo site_url('Controller_register') ?>" class="btn btn-default"> Cancel </a>

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



