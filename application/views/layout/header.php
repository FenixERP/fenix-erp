<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>FENIX | ERP</title>
  <!-- Bootstrap -->
  <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?php echo base_url();?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">

</head>

<body class="nav-md">
  <div class="container body">
<?php
if ($this->ion_auth->logged_in()) {
	?>
	     <div class="main_container">
	       <div class="col-md-3 left_col">
	         <div class="left_col scroll-view">
	           <div class="navbar nav_title" style="border: 0;">
	             <a href="index.html" class="site_title"><i class="glyphicon glyphicon-fire"></i> <span>FENIX | ERP</span></a>
	           </div>

	           <div class="clearfix"></div>

	           <!-- menu profile quick info -->
	           <div class="profile clearfix">
	             <div class="profile_pic">
	               <img src="<?php echo base_url();?>assets/build/images/img.jpg" alt="..." class="img-circle profile_img">
	             </div>
	             <div class="profile_info">
	               <span>Bem Vindo,</span>
	               <h2>Carlos Gomes</h2>
	             </div>
	             <div class="clearfix"></div>
	           </div>
	           <!-- /menu profile quick info -->

	           <br />
	<?php }?><!--fim do if se estiver logado -->