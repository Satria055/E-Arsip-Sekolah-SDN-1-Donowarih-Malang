<?php
$detail = $this->db->query("SELECT * FROM pengguna where id='".$this->session->userdata('user_id')."'")->row_array();
?>
<section class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header bg-yellow">Data Profil</div>
					<div class="box-body">
						<div class="col-md-12">
					<?php
					// Cek apakah terdapat session nama message
					if($this->session->flashdata('msg')){ // Jika ada
					echo '<div class="alert alert-success text-center" role="alert">';
					echo $this->session->flashdata('msg');
					echo '</div>'; // Tampilkan pesannya
					}
					?>	
							<form action="<?php echo base_url('Acount/update_data') ?>" method="post" class="form-horizontal">
								<input type="hidden" class="form-control " name="id" value="<?php echo $this->session->userdata('user_id') ?>">
								<div class="form-group">
									<label  class="control-label col-md-3">Full Name :</label>
									<div class="col-md-9">
										<input type="text" class="form-control sekolah" name="full_name" value="<?php echo $detail['full_name'] ?> ">
									</div>
								</div>
								<div class="form-group">
									<label for="username" class="control-label col-md-3">Username :</label>
									<div class="col-md-9">
										<input type="text" class="form-control sekolah" name="username" value="<?php echo $detail['username'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="control-label col-md-3">Password :</label>
									<div class="col-md-9">
										<input type="password" placeholder="Silahkan Isi dengan Password Lama / Password Baru jika anda ingin Merubahnya" class="form-control sekolah" name="password" required>
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="control-label col-md-3">Status :</label>
									<div class="col-md-9">
										<?php echo $this->session->userdata('level') ?>
									</div>
								</div>								
								<div class="form-group">
									<label for="website" class="control-label col-md-3"></label>
									<div class="col-md-9">
										<button type="submit" name="submit" class="btn btn-flat btn-success"><i class="fas fa-sync"></i> UPDATE</button>
									</div>
								</div>
							
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>