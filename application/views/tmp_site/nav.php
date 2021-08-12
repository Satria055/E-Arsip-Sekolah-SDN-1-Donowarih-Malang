<header class="main-header">
	<!-- Logo -->
	<a href="" class="logo">
		<span class="logo-mini"><i class="fab fa-internet-explorer "></i></span>
		<span class="logo-lg"><i class="fab fa-internet-explorer"></i> - Arsip</span>
	</a>
	<!-- Akhir Logo -->

	<!-- Navbar Header -->
	<nav class="navbar navbar-static-top" role="navigation">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle Navigation</span>
		</a>

		<!-- Menu Kanan -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">

				<!-- akun user -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url() ?>media/img/user2-160x160.jpg" class="user-image" alt="Photo User">
						<span class="hidden-xs"><?php echo $this->session->userdata('full_name'); ?></span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="<?php echo base_url() ?>media/img/user2-160x160.jpg" class="img-circle" alt="Photo User">
							<p>
								<?php echo $this->session->userdata('full_name'); ?>
								<small>Login Sebagai : <?php echo $this->session->userdata('level'); ?></small>
							</p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								
							</div>
							<div class="pull-right">
							<?php
							if($this->session->userdata('level') == "Admin" 
							or $this->session->userdata('level') == "Komite"
							or $this->session->userdata('level') == "Guru"){
							?>
								<a href="<?php echo base_url('Login/logout') ?>" class="btn btn-flat btn-default">Keluar</a>
							<?php } ?>
							<?php
							if($this->session->userdata('level') == "Murid" 
							or $this->session->userdata('level') == "Wali Murid"
							or $this->session->userdata('level') == "Alumni"){
							?>
								<a href="<?php echo base_url('Home/logout') ?>" class="btn btn-flat btn-default">Keluar</a>
							<?php } ?>							
							</div>
						</li>
					</ul>
				</li>
				<!-- Akhir akun user -->
			</ul>
		</div>
		<!-- Akhir Menu Kanan -->
	</nav>
	<!-- Akhir Navbar Header -->
</header>

