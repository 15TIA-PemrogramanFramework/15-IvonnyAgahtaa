<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>IVONNY </title>



	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets_admin/') ?>img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets_admin/') ?>img/favicon.png">


	<!-- Bootstrap core CSS     -->
	<link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>css/bootstrap.min.css " />

	<!-- Animation library for notifications   -->
	<link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>animate.min.css"/>

	<!--  Paper Dashboard core CSS    -->
	<link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>css/paper-dashboard.css"/>


	<!--  CSS for Demo Purpose, don't include it in your project-->
	<link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>css/demo.css"/>


	<!--  Fonts and icons-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

	<link href="https://fonts.googleapis.com/css?family=Muli:400,300"/>
	<link href="<?php echo base_url('assets_admin/') ?>css/themify-icons.css" rel="stylesheet"/>




	
	<style>
	.dataTables_wrapper {
		min-height: 500px
	}

	.dataTables_processing {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 100%;
		margin-left: -50%;
		margin-top: -25px;
		padding-top: 20px;
		text-align: center;
		font-size: 1.2em;
		color:grey;
	}
</style>
</head>
<body>
	
	<!-- Main Menu -->
	<div id="wrapper">

		<!-- /.navbar-header -->

            
		<!-- /.navbar-top-links -->

		<div class="sidebar" data-background-color="white" data-active-color="danger">
			<div class="sidebar-wrapper">
				<div class="logo">
                <a href="#" class="simple-text">
                    <img src="images/logo.png" width="150" height="50">
                </a>
            </div>
				<ul class="nav">

					<?php if(!empty($this->session->userdata('username_admin'))){
						echo generate_sidemenu_admin();
					}
					else if (!empty($this->session->userdata('username_member'))){
						echo generate_sidemenu_member();
					}
					?>





				</ul>
			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->
		<!-- Main Menu -->
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





					