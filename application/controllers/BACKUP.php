
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assetsadmin/' ?>img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url().'assetsadmin/' ?>img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Laskar Ilmu</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url().'assetsadmin/' ?>css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url().'assetsadmin/' ?>css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url().'assetsadmin/' ?>css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project-->
    <link href="<?php echo base_url().'assetsadmin/' ?>css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url().'assetsadmin/' ?>css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   <img src=""> 
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="'.site_url('Home').'"?>
                       <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                     <a href="<?php echo site_url('Controller_member')?>">
                        <i class="ti-user"></i>
                        <p> List Member</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Permintaan Revisi</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Daftar Pesanan Design</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Tambah Foto Gallery</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#"> Admin Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification"></p>
                                    <p>Pengaturan Profile</p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Log Out</a></li>
                              </ul>
                        </li>
                    
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                
                 <center>
              <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            </div>
                            <div class="content">

                                <form action="daftar_nilai.php" method="POST" role="search">
                                    <div class="row">

                                    <div class="form-group">
                                        <input type='text' placeholder='Cari Berdasarkan Nama' name='qcari' class='form-control border-input'>
                                    </div>

                                            <input type='submit' value='Find Data' class='btn btn-small btn-warning'> <a href='daftar_nilai.php' class='btn btn-small btn-success' > All Data</a>
                                </form>

                            </div>
                        </div>
                    </div>
    </center>
                </div>

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Permintaan User</h3>
  </div>
  <div class="panel-body">
  
        <table class="table table-hover" id="example" class="table table-striped table-bordered">
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
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made by  <a href="#">pukul7pagi</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>



    <!--   Core JS Files   -->
    <script src="<?php echo base_url().'assetsadmin/' ?>js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assetsadmin/' ?>js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url().'assetsadmin/' ?>js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url().'assetsadmin/' ?>js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url().'assetsadmin/' ?>js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url().'assetsadmin/' ?>js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url().'assetsadmin/' ?>js/demo.js"></script>


</html>
