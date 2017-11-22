
<?php $this->load->view('Benar/Header') ?>
        <div class="content">
            <div class="container-fluid">
               
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Diri </h3>
  </div>
  <div class="panel-body">
    <center>
        <form action="<?php echo site_url('Controzler_order/'.$username_member)?>" method="POST">
        <table>
            <tr>
                <td>Jeis Design</td>
                <td>:</td>
                <td><?php echo $jenis_design ?></td>
            </tr>
            <tr>
                <td>Deskripsi Design</td>
                <td>:</td>
                <td><?php echo $deskripsi_design ?></td>
            </tr>
            <tr>
                <td>Hasil Design</td>
                <td>:</td>
                <td><?php echo $hasil_design ?></td>
            </tr>
          
        </table>
    </center>
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
