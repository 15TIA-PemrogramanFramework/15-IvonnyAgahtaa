<?php 
$datakuu['alamat']="daftar"; 
?>

<?php $this->load->view('Benar/Header',$datakuu) ?>
<div class="content">
 	 <div class="container-fluid">

<?php
if(!empty($this->session->userdata('username_member'))){

?>
<div class="row">
	
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
	<?php echo anchor(site_url("Controller_order/tambah"),'<i class="fa fa-plus"> </i> Pesan Design','class="btn btn-primary"'); ?>
</div>
<?php
}
?>


	<div class="row">



	<table id="example" class="table table-striped table-bordered">
		<thead>

			<tr>
				<th>ID </th>
				<th>Username Member </th>
				<th>Tanggal Pemesanan </th>
				<th>Jenis Design </th>
				<th>Ukuran Kertas </th>
				<th>Saran Warna </th>
				<th>Deskripsi Desain </th>
				<th>Resource </th>
				<th>Hasil Design </th>
				<th>Status Design </th>
				<th>Status</th>


				
			</tr>
		</thead>
		<tbody>

<?php foreach ($design as $key => $value) {  //foreach untuk looping array ?>

<tr>

	<td><?php echo $key+1;?></td>

	<td><?php echo $value->username_member;?></td>
	<td><?php echo $value->order_date;?></td>
	<td><?php echo $value->jenis_design;?></td>
	<td><?php echo $value->ukuran_kertas;  ?></td>
	<td><?php echo $value->saran_warna;  ?></td>
	<td><?php echo $value->deskripsi_design;  ?></td>
	<td><?php echo $value->resource;  ?></td>
	<td><?php echo $value->hasil_design;  ?></td>
	<td><?php echo $value->status_design;  ?></td>


	
	
	<td>
			
	<a href="<?php echo site_url('Controller_order/DetailOrder/'.$value->id_design) ?>">Detail</a>
	</td>

</tr>
<?php } ?>
</tbody>
</table>


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