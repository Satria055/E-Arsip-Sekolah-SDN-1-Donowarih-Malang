<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome-all.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
</head>
<body>

	<div class="container">
		<div class="col-md-4 col-md-offset-4">
						<?php
					// Cek apakah terdapat session nama message
					if($this->session->flashdata('message')){ // Jika ada
					echo '<div class="alert alert-danger text-center" role="alert">';
					echo $this->session->flashdata('message');
					echo '</div>'; // Tampilkan pesannya
					}
					?>		
			<div class="panel panel-merah">
				<div class="login-header">
					<img src="<?php echo base_url('media/img/arsip-logo.png') ?>" alt="Logo">

				</div>
				<div class="login-body">
					<form action="<?php echo base_url('Login/signin') ?>" method="post">

					<input type="text" class="form-login" name="username" placeholder="Username" autocomplete="off" required>

					<input type="password" class="form-login" name="password" placeholder="Password" autocomplete="off" required>

					<!--<input type="hidden" class="form-login" name="level" value="Admin" required>-->
					<select name="level" id="level" class="form-login" required>
							<option value="Pilih" selected disabled>Pilih</option>
								<option value="Admin">Admin</option>
								<option value="Guru">Guru</option>
								<option value="Komite">Komite</option>
							</select>
					
					<button type="submit" name="submit" class="tombol"><i class="fas fa-lock"></i> MASUK</button>

					</form>
				</div>
			</div>

			<p class="text-center">
				Copyright &copy; 2021 <a href="<?php echo base_url() ?>">SDN 1 Donowarih Malang</a>
			</p>

		</div>
	</div>

	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	
</body>
</html>


						
					