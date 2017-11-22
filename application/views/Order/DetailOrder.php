<?php 
$datakuu['alamat']="daftar"; 
?>
<?php $status=$this->session->userdata('status'); ?>
<?php $this->load->view('Benar/Header',$datakuu);?>
        <div class="content">
            <div class="container-fluid">
               
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Data Order </h3>
  </div>
  <div class="panel-body">
    <center>
       
        <table>
            <tr>
                <td>ID design</td>
                <td>:</td>
                <td><?php echo $order->id_design ?></td>
            </tr>
            <tr>
                <td>Username Member</td>
                <td>:</td>
                <td><?php echo $order->username_member ?></td>
            </tr>
            <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td><?php echo $order->order_date; ?></td>
            </tr>

            <tr>
                <td>Jenis Design/td>
                <td>:</td>
                <td><?php echo $order->jenis_design; ?></td>
            </tr>
            <tr>
                <td>Ukuran Kertas</td>
                <td>:</td>
                <td><?php echo $order->ukuran_kertas; ?></td>
            </tr>


            <tr>
                <td>Saran Warna</td>
                <td>:</td>
                <td><?php echo $order->saran_warna; ?></td>
            </tr>


             <tr>
                <td>Deskripsi Desain</td>
                <td>:</td>
                <td><?php echo $order->deskripsi_design; ?></td>
            </tr>


            

            <tr>
                <td>Resource</td>
                <td>:</td>
                <td><?php echo $order->resource; ?> </td>
            </tr>


            <tr>
                <td>Hasil Design</td>
                <td>:</td>
                <td><?php echo $order->hasil_design; ?> </td>
            </tr>

<tr>
                <td>Status Design</td>
                <td>:</td>
                <td><?php echo $order->status_design; ?> </td>
            </tr>

        </table>

    </center>




</div>
<div>

<?php if (($order->status_design=='On going')&&($status=="admin")): ?>
<div style="margin-top:100px ">
        <form action='<?php echo site_url('Controller_order/selesai_aksi'); ?>' method = "POST" enctype="multipart/form-data">
        
    <div class=" form-group">
            <label >Upload File</label>
            <input type="file"  placeholder="Upload file anda disini "  class="form-control" name="hasil_design">
    </div>


    <input type="hidden" name="id_design" value="<?php echo $order->id_design ?>">
    <input type="hidden" name="status_design" value="selesai">
    <input type="submit" name="Upload" class="btn btn-primary">
    <a href="<?php echo site_url('Controller_revisi') ?>" class="btn btn-default"> Cancel </a>

        </form>

</div>
</div>
    
<?php endif ?>
    <?php if (($this->session->userdata('status')=="member")&&($this->session->userdata('username_member')==$order->username_member)): ?>



<div class="col-md-12 text-right" >
    <?php if (($banyak<3)&&($order->status_design!="on revisi")): ?>
        


<!--?php echo anchor(site_url("Controller_revisi/tambah/".$order->id_design),'<i class="fa fa-plus"> </i> Tambah Revisi','class="btn btn-primary"'); ?>-->


</div>
<a href="<?php echo site_url("Controller_revisi/tambah/".$order->id_design) ?>"> <button class="btn btn-primary">Revisi <i class="fa fa-plus"> </i></button> </a>
<?php endif ?>
    <?php endif ?>


<?php 
$banyak=count($revisi);
 ?>
<?php if ($banyak>0): ?>
   <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Revisi User</h3>
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
                <th>Aksi  </th>
                
                
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
    <td>
<?php if(empty($value->file_revisi)){ 
    echo "Belum Selesai";
}else{ 
 echo $value->tgl_selesai; } ?></td>



    
    
    <td>
   
<?php echo $this->session->userdata('status'); 
?>
 <?php 
    if(!empty($value->file_revisi)){
   
        echo anchor(site_url('Controller_revisi/download/'.$value->id_revisi),'<b>Download</b>', 'class="btn btn-warning"');
    
    }
    ?>

    <?php
    if(empty($value->file_revisi)){
         if($this->session->userdata('status')=="admin"){
    echo anchor(site_url('Controller_revisi/selesai/'.$value->id_revisi.'/'.$value->id_design),'<b>Upload</b>', 'class="btn btn-danger"');}else{
        echo "Belum Selesai";
    }
    } ?>







    

    </td>

</tr>
<?php } ?>
</tbody>
</table>

</div>
<?php endif ?>
       <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
               
            </div>
        </footer>

    </div>
</div>

<?php $this->load->view('Benar/Footer') ?>


