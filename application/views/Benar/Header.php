<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets_admin/') ?>img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets_admin/') ?>img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>LARSEN DESIGN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets_admin/') ?>css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets_admin/') ?>css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('assets_admin/') ?>css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets_admin/') ?>css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets_admin/') ?>css/themify-icons.css" rel="stylesheet">

</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

<?php 
  ?>

   <div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
         <img src=""> 
     </a>
 </div>


 <?php if(!empty($this->session->userdata('username_admin'))){
    ?>

    <ul class="nav">
        <li <?php if($alamat=="dashboard"){echo "class='active'";}  ?> >
            <a href="<?php echo site_url('Home') ?>">
                <i class="ti-panel"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li <?php if($alamat=="listmember"){echo "class='active'";}  ?> >
            <a href="<?php echo site_url('Controller_member') ?>">
                <i class="ti-user"></i>
                <p> List Member</p>
            </a>
        </li>
      
        <li <?php if($alamat=="daftar"){echo "class='active'";}  ?> >
          <a href="<?php echo site_url('Controller_order') ?>">
            <i class="ti-text"></i>
            <p>Daftar Pesanan Design</p>
        </a>
    </li>
    <li <?php if($alamat=="tambah"){echo "class='active'";}  ?> >
     <a href="<?php echo site_url('Controller_galery/tambah') ?>">
        <i class="ti-pencil-alt2"></i>
        <p>Tambah Foto Gallery</p>
    </a>
</li>

</ul>

<?php 
}
else if (!empty($this->session->userdata('username_member'))){
   ?>
<ul class="nav">
        <li <?php if($alamat=="daftar"){echo "class='active'";} ?> >
           <a href="<?php echo site_url('Controller_Order/indexuser/'.$this->session->userdata('username_member') ) ?>">
                <i class="ti-user"></i>
                <p>Pesan Desain</p>
            </a>
        </li>
        <li>
        <li <?php if($alamat=="edit"){echo "class='active'";} ?> >
          <a href="<?php echo site_url('Controller_member/edit/'.$this->session->userdata('username_member')) ?>">
            <i class="ti-text"></i>
            <p>Ubah Data Diri</p>
        </a>
    </li>
  
</ul>

<?php 
}
?>




</div>
</div>

<div class="main-panel">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">


<?php if(!empty($this->session->userdata('username_admin'))){
    ?>

                <a class="navbar-brand" href="#"> Admin Dashboard</a> 
<?php
}
else if (!empty($this->session->userdata('username_member'))){
   ?>
     <a class="navbar-brand" href="#"> Member Dashboard</a> 
<?php

     }
        ?>


            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                        <p class="notification"></p>
                        <p>Pengaturan </p>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('Login/logout') ?>">Log Out</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>