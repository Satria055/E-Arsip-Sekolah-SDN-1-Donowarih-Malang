<div class="content-wrapper">
	<section class="content">
		
		<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="box">
						<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Detail Surat Keluar</div>
						<div class="box-body">
							<div class="col-md-12 text-center">
								<a href="<?php echo base_url('./media/suratkeluar/'.$views['berkas']) ?>" title="File Surat Keluar">
									<h1 style="font-size: 100px;"><i class="fas fa-file-pdf"></i></h1>
								</a>
								<h4><?php echo $views['nomor'] ?></h4>
							</div>

							<div class="col-md-12" style="margin-top: 20px;">
								<form class="form-horizontal">
									<div class="form-group">
										<div class="col-md-6 text-right">Nomor Surat</div>
										<div class="col-md-6"><?php echo $views['nomor'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Tanggal Surat</div>
										<div class="col-md-6"><?php echo $views['tanggal'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Pengrim</div>
										<div class="col-md-6"><?php echo $views['pengirim'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Tertuju</div>
										<div class="col-md-6"><?php echo $views['tertuju'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Alamat</div>
										<div class="col-md-6"><i class="fas fa-map-marker-alt"></i> <?php echo $views['alamat'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Perihal</div>
										<div class="col-md-6"><?php echo $views['perihal'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Disposisi</div>
										<div class="col-md-6"><span class="text-success"><i class="fas fa-check-circle"></i></span> <?php echo $views['disposisi'] ?></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>
</div>
