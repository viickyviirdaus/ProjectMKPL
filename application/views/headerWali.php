<!DOCTYPE html>
<html>
<head>
	<title>Wali</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/cssnyatemplate.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/jquery/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="height: 60px">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="" s="navbar-header" style="padding-top: 5px;">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				 <a class="navbar-brand" href="#">
        			<img alt="Brand" src="<?php echo base_url('assets'); ?>/image/logo.png" style="max-height: 100%">
      			</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">				
				<ul class="nav navbar-nav navbar-right">
					<a href="<?php echo base_url('index.php/Controller_user/logout'); ?>"><button class="btn btn-danger" style="margin-right: 10px; margin-top: 7px;" >Logout</button></a>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>