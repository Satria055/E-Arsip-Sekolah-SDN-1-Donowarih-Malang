<div class="content-wrapper">
	<section class="content">
		
		<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="box">
						<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Detail Surat Masuk</div>
						<div class="box-body">
							<div class="col-md-12 text-center">
								<a href="<?php echo base_url('./media/suratmasuk/'.$view['berkas']) ?>" title="File Surat Masuk">
									<h1 style="font-size: 100px;"><i class="fas fa-file-pdf"></i></h1>
								</a>
								<h4><?php echo $view['nomor'] ?></h4>
							</div>

							<div class="col-md-12" style="margin-top: 20px;">
								<form class="form-horizontal">
									<div class="form-group">
										<div class="col-md-6 text-right">Nomor Surat</div>
										<div class="col-md-6"><?php echo $view['nomor'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Tanggal Surat</div>
										<div class="col-md-6"><?php echo $view['tanggal'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Pengrim</div>
										<div class="col-md-6"><?php echo $view['pengirim'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Perihal</div>
										<div class="col-md-6"><?php echo $view['perihal'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Disposisi</div>
										<div class="col-md-6"><span class="text-success"><i class="fas fa-check-circle"></i></span> <?php echo $view['disposisi'] ?></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>
</div>
