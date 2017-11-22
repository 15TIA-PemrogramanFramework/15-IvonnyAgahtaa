<?php 
$datakuu['alamat']="edit"; 
?>

<?php $this->load->view('Benar/header',$datakuu);?>
        <div class="content">
            <div class="container-fluid">

               
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Diri </h3>
  </div>
  <div class="panel-body">
    <center>
        <form action="<?php echo site_url('Controller_member/editnext/'.$username_member)?>" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alamat ?></td>
            </tr>
            <tr>
                <td>No hp</td>
                <td>:</td>
                <td><?php echo $nohp ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><?php echo $password_member ?></td>
            </tr>

            <tr>
                <td colspan="3">
                    <BUTTON>Ubah data diri</BUTTON>
                </td>
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
