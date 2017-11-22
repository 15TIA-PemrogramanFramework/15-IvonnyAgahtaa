<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Auro - Elegant, Minimal, Creative Bootstrap Template </title>
<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/flexslider.css">
<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/main.css">
<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>

<!-- Header Section -->
<section class="tophead" role=""> 
  <!-- Navigation Section -->
  <header id="header" >
    <div class="header-content clearfix"> <a class="logo" href="#">Larsen Design</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="<?php echo site_url('Controller_userview') ?>">Back</a></li>
          

        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- Navigation Section --> 
</section>
<!-- Header Section --> 

<!-- portfolio grid section -->
<section id="portfolio" class="section portfolio">
  <div class="container-fluid">
    <div class="row">

      <?php 
      foreach ($galery as $key => $value) {?>
      <div class="col-sm-6 portfolio-item"> <a  class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3><?php echo $value->jenis ?></h3>
            <h4><?php echo $value->keterangan ?></h4>
          </div>
        </div>
        <img src="<?php echo base_url('assets_user/images/portfolio/'.$value->file_gambar) ?>" class="img-responsive" alt=""> </a> </div>
      

<?php } ?>






    </div>
  </div>
</section>
<!-- portfolio grid section --> 



<!-- JS FILES --> 
<script src="<?php echo base_url('assets_user/') ?>js/jquery.min.js"></script> 
<script src="<?php echo base_url('assets_user/') ?>js/bootstrap.min.js"></script> 
<script src="<?php echo base_url('assets_user/') ?>js/jquery.flexslider-min.js"></script> 
<script src="<?php echo base_url('assets_user/') ?>js/retina.min.js"></script> 
<script src="<?php echo base_url('assets_user/') ?>js/modernizr.js"></script> 
<script src="<?php echo base_url('assets_user/') ?>js/main.js"></script>
</body>
</html>