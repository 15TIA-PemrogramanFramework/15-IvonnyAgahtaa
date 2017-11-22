<?php $this->load->view('Benar/Header') ?>
        <div class="content">
            <div class="container-fluid">

	<form action='<?php echo $action; ?>' method = "POST">
		

	<div class=" form-group">
			<label>Password</label>
			<input type="text"  placeholder="Masukkan Password" value="<?php echo $password_member ?>" class="form-control" name="password_member">
	</div>

		<div class=" form-group">
			<label>Password</label>
			<input type="text"  placeholder="Masukkan Password" value="<?php echo $password_member ?>" class="form-control" name="password_member">
	</div>

		<div class=" form-group">
			<label>Password</label>
			<input type="text"  placeholder="Masukkan Password" value="<?php echo $password_member ?>" class="form-control" name="password_member">
	</div>
	
		<div class=" form-group">
			<label>Password</label>
			<input type="text"  placeholder="Masukkan Password" value="<?php echo $password_member ?>" class="form-control" name="password_member">
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

