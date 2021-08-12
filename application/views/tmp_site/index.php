<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<title><?=$title?></title>

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/AdminLTE.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/_all-skins.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datepicker3.css">

	<style>
		.sekolah{
			border: 0px;
		}
	</style>
</head>
<body class="hold-transition skin-green sidebar-mini">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader">
			<div class="loading">
				<img src="<?php echo base_url() ?>media/img/loading.png" width="80">
				<p>Harap Tunggu</p>
			</div>
		</div>
		<!-- Akhir preloader -->

		<!-- Notification -->
		<div id="notifications"><?php echo $this->session->flashdata('msg') ?></div>
		<!-- Akhir notification -->