<div class="content-wrapper">
	<div class="content">

			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="box">
						<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Detail Ijazah &amp; Skhun</div>
						<div class="box-body">
							<div class="col-md-6 text-right">
								<a href="<?php echo base_url('./media/ijazah/'.$detail['berkas']) ?>" title="File Ijazah">
									<h1 style="font-size: 100px;"><i class="fas fa-file-archive"></i></h1>
								</a>
								<h4>File Ijazah</h4>
							</div>
							<div class="col-md-6 text-left">
								<a href="<?php echo base_url('./media/ijazah/'.$detail['berkas']) ?>" title="File Skhun">
									<h1 style="font-size: 100px;"><i class="fas fa-file-archive"></i></h1>
								</a>
								<h4>File Skhun</h4>
							</div>

							<div class="col-md-12" style="margin-top: 20px;">
								<form class="form-horizontal">
									<div class="form-group">
										<div class="col-md-6 text-right">Nama Lengkap</div>
										<div class="col-md-6"><?php echo $detail['nama_lengkap'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">T. Tgl Lahir</div>
										<div class="col-md-6"><?php echo $detail['tempat_lahir'] ?>/<?php echo $detail['tgl_lahir'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Nomor Ujian Nasional</div>
										<div class="col-md-6"><?php echo $detail['no_un'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Nomor Ijazah</div>
										<div class="col-md-6"><?php echo $detail['no_ijazah'] ?></div>
									</div>
									<div class="form-group">
										<div class="col-md-6 text-right">Tahun Lulus</div>
										<div class="col-md-6"><?php echo $detail['tahun_lulus'] ?></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

	</div>
</div>