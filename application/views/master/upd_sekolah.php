<section class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header bg-yellow">Data Sekolah</div>
					<div class="box-body">
						<div class="col-md-12">
							<form action="<?php echo base_url('Sekolah/update_data') ?>" method="post" class="form-horizontal">
								<input type="hidden" class="form-control sekolah" name="id" value="<?php echo $detail['id'] ?>">
								<div class="form-group">
									<label for="kasek" class="control-label col-md-3">Kepala Sekolah :</label>
									<div class="col-md-9">
										<input type="text" class="form-control sekolah" name="kepala_sekolah" value="<?php echo $detail['kepala_sekolah'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="nip" class="control-label col-md-3">NIP Kepala Sekolah :</label>
									<div class="col-md-9">
										<input type="text" class="form-control sekolah" name="nip" value="<?php echo $detail['nip'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="nama-sekolah" class="control-label col-md-3">Nama Sekolah :</label>
									<div class="col-md-9">
										<input type="text" class="form-control sekolah" name="nama_sekolah" value="<?php echo $detail['nama_sekolah'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="no_telp" class="control-label col-md-3">No Telp Sekolah :</label>
									<div class="col-md-9">
										<input type="text" class="form-control sekolah" name="no_telp" value="<?php echo $detail['no_telp'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="alamat" class="control-label col-md-3">Alamat Sekolah :</label>
									<div class="col-md-9">
										<input type="text" class="form-control sekolah" name="alamat" value="<?php echo $detail['alamat'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="website" class="control-label col-md-3">Website Sekolah :</label>
									<div class="col-md-9">
										<input type="text" class="form-control sekolah" name="website" value="<?php echo $detail['website'] ?>">
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