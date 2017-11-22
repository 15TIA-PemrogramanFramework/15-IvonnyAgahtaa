
<?php $this->load->view('Benar/Header') ?>
        <div class="content">
            <div class="container-fluid">
               
               <div class="col-md-12 text-right" >
	<?php echo anchor(site_url("Controller_revisi/tambah"),'<i class="fa fa-plus"> </i> Tambah Data','class="btn btn-primary"'); ?>
</div>


<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Permintaan User</h3>
  </div>
  <div class="panel-body">
  
       <table id="example" class="table table-striped table-bordered">
		<thead>

			<tr>
				<th>Nomor </th>

				<th>ID Revisi </th>
				<th>Id Design  </th>
				<th>Tanggal Revisi </th>
				<th>File Revisi </th>
				<th>Komentar </th>
				<th>Tanggal Selesa</th>
				<th>Status  </th>
				
				
			</tr>
		</thead>
		<tbody>

<?php foreach ($revisi as $key => $value) {  //foreach untuk looping array ?>

<tr>

	<td><?php echo $key+1;?></td>

	<td><?php echo $value->id_revisi;?></td>
	<td><?php echo $value->id_design;?></td>
	<td><?php echo $value->tgl_revisi;?></td>
	<td><?php echo $value->file_revisi;  ?></td>
	<td><?php echo $value->komentar;  ?></td>
	<td><?php echo $value->tgl_selesai;  ?></td>



	
	
	<td>
	<?php 
	if(!empty($this->session->userdata('username_member')) && !empty($value->file_revisi) || !empty($this->session->userdata('username_admin')) && !empty($value->file_revisi)){
	echo anchor(site_url('Controller_revisi/download/'.$value->id_revisi),'<b>Download</b>', 'class="btn btn-warning"');
	}
	?>

	<?php
	if(!empty($this->session->userdata('username_admin'))){
	echo anchor(site_url('Controller_revisi/selesai/'.$value->id_revisi),'<b>Selesai</b>', 'class="btn btn-danger"');
	} ?>
	

	</td>

</tr>
<?php } ?>
</tbody>
</table>

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
