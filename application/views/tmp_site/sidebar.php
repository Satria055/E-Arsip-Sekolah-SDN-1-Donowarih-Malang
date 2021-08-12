<aside class="main-sidebar">
	<section class="sidebar">
		<!-- user panel -->
		<<div class="user-panel">
			<div class="logo" align="center">
				<img src="<?php echo base_url() ?>media/img/tutwuri.png" width="50" height="auto" class="img-responsive" alt="Logo" style="margin-top: -5px;margin-bottom: 10px;">
			</div>
		</div>
		<!-- Akhir user panel -->

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MENU NAVIGATION</li>
			<?php
			if ($this->session->userdata('level') !== "Murid") {?>
			<li><a href="#modal-surat" data-toggle="modal"><i class="fas fa-plus-square"></i> <span> Tulis Surat</span></a></li>
			<?php }?>
			<?php
			if($this->session->userdata('level') == "Murid" or $this->session->userdata('level') == "Alumni"  or $this->session->userdata('level') == "Wali Murid" or $this->session->userdata('level') == "Komite"){
			?>
			<li><a href="<?php echo base_url('Send') ?>"><i class="fas fa-envelope-open"></i> <span> Kotak Masuk</span></a></li>
			<?php } ?>
			<?php
			if($this->session->userdata('level') == "Alumni" or $this->session->userdata('level') == "Wali Murid" or $this->session->userdata('level') == "Komite"){
			?>
			<li><a href="<?php echo base_url('Inbox') ?>"><i class="fas fa-envelope "></i> <span>Kotak Keluar</span></a></li>
			<li><a href="<?php echo base_url('Acount') ?>"><i class="fas fa-users "></i> <span>My Profil</span></a></li>
			<?php } ?>
			<?php
			if ($this ->session ->userdata('level') == "Murid"){?>
			<li><a href="<?php echo base_url('Acount') ?>"><i class="fas fa-users "></i> <span>My Profil</span></a></li>
		<?php }?>
			<?php
			if($this->session->userdata('level') == "Admin"){
			?>
			<li class="active"><a href="<?php echo base_url('Dashboard') ?>"><i class="fas fa-home"></i> <span>Beranda</span></a></li>
			<li><a href="<?php echo base_url('Inbox') ?>"><i class="fas fa-envelope "></i> <span>Arsip Surat Masuk</span></a></li>
			<li><a href="<?php echo base_url('Send') ?>"><i class="fas fa-envelope-open"></i> <span>Arsip Surat Keluar</span></a></li>
			<li><a href="<?php echo base_url('Ijazah') ?>"><i class="fas fa-file-archive "></i> <span>Arsip Ijazah &amp; SKHUN</span></a></li>
			<li><a href="<?php echo base_url('Arsip') ?>"><i class="fas fa-archive "></i> <span>Log Arsip File</span></a></li>
			<li class="treeview">
				<a href=""><i class="fas fa-users"></i> <span>Data Users</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url('Master/users') ?>">Data Pengguna Dalam</a></li>
					<li><a href="<?php echo base_url('Master/pengguna') ?>">Data Pengguna Luar</a></li>
				</ul>
			</li>
			<?php } ?>
			<?php
			if($this->session->userdata('level') == "Guru"){
			?>
			<li class="active"><a href="<?php echo base_url('Dashboard') ?>"><i class="fas fa-home"></i> <span>Beranda</span></a></li>
			<li><a href="<?php echo base_url('Inbox') ?>"><i class="fas fa-envelope "></i> <span>Arsip Surat Masuk</span></a></li>
			<li><a href="<?php echo base_url('Send') ?>"><i class="fas fa-envelope-open"></i> <span>Arsip Surat Keluar</span></a></li>
			<li><a href="<?php echo base_url('Nilai') ?>"><i class="fas fa-clipboard-list "></i> <span>Arsip Nilai Siswa</span></a></li>
			<li><a href="<?php echo base_url('Soal') ?>"><i class="fas fa-file-alt"></i> <span>Arsip Soal</span></a></li>
			<?php } ?>
			<?php
			if($this->session->userdata('level') == "Admin"){
			?>
			<li class="treeview">
				<a href=""><i class="fas fa-cogs"></i> <span>Master Apps</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url('Master/pelajaran') ?>">Master Pelajaran</a></li>
					<li><a href="<?php echo base_url('Master/disposisi') ?>">Master Disposisi</a></li>
					<li><a href="<?php echo base_url('Sekolah/update/'.'1') ?>">Profil Sekolah</a></li>
				</ul>
			</li>
              <?php } ?>
              <?php
			if($this->session->userdata('level') == "Admin"){
			?>
			<li><a href="<?php echo base_url('Backup') ?>"><i class="fas fa-database"></i> <span>Backup &amp; Restore</span></a></li>
            <?php } ?>
		</ul>
		<!-- Akhir sidebar menu -->
	</section>
</aside>

<!--
<li class="treeview">
				<a href=""><i class="fas fa-university"></i> <span>Manajemen Surat</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url() ?>">Surat Masuk</a></li>
					<li><a href="<?php echo base_url('Pangkalan/siaga') ?>">Pangkalan Siaga</a></li>
					<li><a href="<?php echo base_url('Pangkalan/penggalang') ?>">Pangkalan Penggalang</a></li>
					<li><a href="<?php echo base_url('Pangkalan/penegak') ?>">Pangkalan Penegak</a></li>
					<li><a href="<?php echo base_url('Pangkalan/pandega') ?>">Pangkalan Pandega</a></li>
				</ul>
			</li>
-->
<!-- Modal Tambah Surat Masuk -->
<form action="<?php echo base_url('Inbox/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="modal-surat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope"></i> Tulis Surat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="form-group">
        		<label for="tanggal" class="control-label col-md-3">Tanggal Masuk :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control tanggal" name="tanggal" id="tanggal" placeholder="Tanggal" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="nomor" class="control-label col-md-3">Nomor Surat :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor Surat" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="pengirim" class="control-label col-md-3">Pengirim :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Pengirim" autocomplete="off" value="<?php echo $this->session->userdata('username') ?>" readonly>
        		</div>
        	</div>
			<div class="form-group">
				<label for="pengirim" class="control-label col-md-3">Tujuan :</label>
				<div class="col-md-9">
					<select name="tujuan" id="tujuan" class="form-control" required>
						<option value="">-- Belum Ditentukan --</option>
						<?php if($this->session->userdata('level') == "Murid" or $this->session->userdata('level') == "Alumni"  or $this->session->userdata('level') == "Wali Murid"){ ?>
							<option value="Guru">Semua Guru</option>
							<option value="Admin">Admin</option>
							<option value="Komite">Semua Komite</option>
							<?php foreach ($tujuan_sekolah as $key => $row) {?>
									<option value="<?php echo $row->username ?>"><?php echo $row->full_name ?> | <?php echo $row->level ?></option>
							<?php } ?>
						<?php } elseif($this->session->userdata('level') == "Admin") { ?>
							<option value="Guru">Semua Guru</option>
							<option value="Admin">Admin</option>
							<option value="Komite">Semua Komite</option>
							<option value="Alumni">Semua Alumni</option>
							<option value="Wali Murid">Semua Wali Murid</option>
							<option value="Murid">Semua Murid</option>
							<?php foreach ($tujuan_sekolah as $key => $row) {?>
									<option value="<?php echo $row->username ?>"><?php echo $row->full_name ?> | <?php echo $row->level ?></option>
							<?php } ?>
							<?php foreach ($tujuan_external as $key => $row) {?>
									<option value="<?php echo $row->username ?>"><?php echo $row->full_name ?> | <?php echo $row->level ?></option>
							<?php } ?>
						<?php } elseif($this->session->userdata('level') == "Komite") { ?>
							<option value="Guru">Semua Guru</option>
							<option value="Admin">Admin</option>
							<?php foreach ($tujuan_sekolah as $key => $row) {?>
									<option value="<?php echo $row->username ?>"><?php echo $row->full_name ?> | <?php echo $row->level ?></option>
							<?php } ?>
						<?php } elseif($this->session->userdata('level') == "Guru") { ?>
							<option value="Alumni">Semua Alumni</option>
							<option value="Wali Murid">Semua Wali Murid</option>
							<option value="Murid">Semua Murid</option>
							<?php foreach ($tujuan_external as $key => $row) {?>
									<option value="<?php echo $row->username ?>"><?php echo $row->full_name ?> | <?php echo $row->level ?></option>
							<?php } ?>
						<?php } else { ?>
							<option value="Alumni">Semua Alumni</option>
							<option value="Wali Murid">Semua Wali Murid</option>
							<option value="Murid">Semua Murid</option>
							<?php foreach ($tujuan_external as $key => $row) {?>
									<option value="<?php echo $row->username ?>"><?php echo $row->full_name ?> | <?php echo $row->level ?></option>
							<?php } ?>
						<?php } ?>
					</select>
        		</div>
			</div>
        	<div class="form-group">
        		<label for="perihal" class="control-label col-md-3">Perihal :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" autocomplete="off" required>
        		</div>
        	</div>
			<?php if($this->session->userdata('level') == "Admin") { ?>
        	<div class="form-group">
        		<label for="disposisi" class="control-label col-md-3">Disposisi :</label>
        		<div class="col-md-9">
        			<select name="disposisi" id="disposisi" class="form-control" required>
        				<option value="">-- Belum Ditentukan --</option>
        				<?php foreach ($disposisi as $key => $row) {?>
                        <option value="<?php echo $row->disposisi ?>"><?php echo $row->disposisi ?></option>
                        <?php } ?>
        			</select>
        		</div>
        	</div>
			<?php } ?>
        	<div class="form-group">
        		<label for="isi_disposisi" class="control-label col-md-3">Isi Disposisi :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="isi_disposisi" id="isi_disposisi" placeholder="Pengirim" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="berkas" class="control-label col-md-3">Upload Scan Surat :</label>
        		<div class="col-md-9">
        			<input type="file" class="form-control" name="berkas" id="berkas" required>
        		</div>
        	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-flat btn-primary"><i class="fas fa-save"></i> SIMPAN</button>
      </div>
    </div>
  </div>
</div>
</form>
