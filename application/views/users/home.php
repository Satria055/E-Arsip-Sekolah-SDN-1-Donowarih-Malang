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
		<div class="col-md-8 col-md-offset-2 " style='border: 2px double #0098DA;'>
		<div class="col-md-6">
		<br><br>
			<div class="login-header">
					<img src="<?php echo base_url('media/img/arsip-logo.png') ?>" alt="Logo">
					<br>
					<b>SDN 1 Donowarih Malang</b>
				</div>

		</div>
		<div class="col-md-6">


				<div class="panel-heading ">
					<i class="fas fa-user-circle"></i> Silahkan Login
				</div>
				<?php
					// Cek apakah terdapat session nama message
					if($this->session->flashdata('message')){ // Jika ada
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('message');
					echo '</div>'; // Tampilkan pesannya
					}
					?>
			<form action="<?php echo base_url('Home/signin') ?>" method="post">
				<div class="panel-body">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="level">Pilih</label>
							<select name="level" id="level" class="form-control" required>
								<option value="Alumni">Alumni</option>
								<option value="Wali Murid">Wali Murid</option>
								<option value="Murid">Murid</option>
							</select>
						</div>
						<div class="form-group text-right">
							<button type="submit" name="submit" class="btn btn-sm btn-danger"><i class="fas fa-lock"></i> Masuk</button>
						</div>
						Belum Punya Akun ??? <a href="registration">Daftar</a>
				</div>
				</form>
		</div>


		</div>
		
	</div>

	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	
</body>
</html>