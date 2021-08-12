<?php
if($this->session->userdata('level') == "Admin"){
?>
<div class="content-wrapper">
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-blue"><i class="fas fa-envelope"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Surat Masuk</span>
	              <span class="info-box-number"><?php echo $inbox ?></span>
	            </div>

	          </div>
	        </div>

			<div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-green"><i class="fas fa-envelope-open"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Surat Keluar</span>
	              <span class="info-box-number"><?php echo $send ?></span>
	            </div>

	          </div>
	        </div>

	        <div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-yellow"><i class="fas fa-file-archive"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Ijazah &amp; Skhun</span>
	              <span class="info-box-number"><?php echo $ijazah ?></span>
	            </div>

	          </div>
	        </div>

	        <div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Nilai Siswa</span>
	              <span class="info-box-number"><?php echo $nilai ?></span>
	            </div>

	          </div>
	        </div>

		</div>

		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-maroon"><i class="fas fa-file-alt"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Bank Soal</span>
	              <span class="info-box-number"><?php echo $soal ?></span>
	            </div>

	          </div>
	        </div>
		</div>
	
	</section>
</div>
<?php } ?>
<?php
if($this->session->userdata('level') == "Murid"){
?>
<div class="content-wrapper">
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-blue"><i class="fas fa-envelope"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Surat Masuk</span>
	              <span class="info-box-number"><?php echo $inbox ?></span>
	            </div>

	          </div>
	        </div>

	</section>
</div>

<?php } ?>
<?php
if($this->session->userdata('level') == "Alumni" or $this->session->userdata('level') == "Wali Murid" or $this->session->userdata('level') == "Komite"){
?>
<div class="content-wrapper">
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-blue"><i class="fas fa-envelope"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Surat Masuk</span>
								<span class="info-box-number"><?php echo $inbox ?></span>
							</div>

						</div>
					</div>

			<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-green"><i class="fas fa-envelope-open"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Surat Keluar</span>
								<span class="info-box-number"><?php echo $send ?></span>
							</div>

						</div>
					</div>

	</section>
</div>

<?php } ?>
<?php
if($this->session->userdata('level') == "Guru"){
?>
<div class="content-wrapper">
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-blue"><i class="fas fa-envelope"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Surat Masuk</span>
								<span class="info-box-number"><?php echo $inbox ?></span>
							</div>

						</div>
					</div>

			<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-green"><i class="fas fa-envelope-open"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Surat Keluar</span>
								<span class="info-box-number"><?php echo $send ?></span>
							</div>

						</div>
					</div>

 <div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Nilai Siswa</span>
	              <span class="info-box-number"><?php echo $nilai ?></span>
	            </div>

	          </div>
	        </div>

		</div>

		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-maroon"><i class="fas fa-file-alt"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Bank Soal</span>
	              <span class="info-box-number"><?php echo $soal ?></span>
	            </div>

	          </div>
	        </div>
		</div>
	        </div>

	</section>
</div>

<?php } ?>
