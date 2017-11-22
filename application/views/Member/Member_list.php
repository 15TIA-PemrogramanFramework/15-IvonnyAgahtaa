
<?php 
$datakuu['alamata']="listmember"; 
?>

<?php $this->load->view('Benar/Header',$datakuu) ?>
        <div class="content">
            <div class="container-fluid">



	<div class="row">
	
	<table id="example" class="table table-striped table-bordered">
		<thead>

			<tr>
				<th>No </th>

				<th>Nama </th>
				<th>Alamat </th>
				<th>No Hp </th>
				<th>E-mail </th>
				<th>Username </th>
				<th>Password </th>
				<th>Aksi </th>

				
				


			</tr>
		</thead>
		<tbody>

<?php foreach ($member as $key => $value) {  //foreach untuk looping array ?>

<tr>

	<td><?php echo $key+1;?></td>
	<td><?php echo $value->nama;?></td>
	<td><?php echo $value->alamat;  ?></td>
	<td><?php echo $value->nohp;  ?></td>
	<td><?php echo $value->email;  ?></td>
	<td><?php echo $value->username_member;  ?></td>
	<td><?php echo $value->password_member;  ?></td>

	
	<td>
			
	
	<?php echo anchor(site_url('Controller_member/delete/'.$value->username_member),'<i class="fa fa-trash"></i>', 'class="btn btn-danger"'); ?>

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


<script type="text/javascript">
	$(document).ready(function(){
	$('#example').DataTable();	
	
	} );

</script>