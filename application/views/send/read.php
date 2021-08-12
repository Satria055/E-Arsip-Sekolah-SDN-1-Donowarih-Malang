<div class="content-wrapper">
	<div class="content-header">
	<?php if($this->session->userdata('level') != "Murid" AND $this->session->userdata('level') != "Alumni" AND $this->session->userdata('level') != "Wali Murid"){ ?>
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
	<?php } ?>
		<a href="<?php echo base_url('Excel_send') ?>" class="btn btn-flat btn-success btn-sm"><i class="fas fa-file-excel "></i> Simpan Ke Excel</a>
	</div>

	<!-- TEST -->
	<!-- Isi Kontent -->
	<section class="content container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-header bg-yellow"><i class="fas fa-envelope-open"></i>
					<?php if($this->session->userdata('level') != "Murid" AND $this->session->userdata('level') != "Alumni" AND $this->session->userdata('level') != "Wali Murid"  AND $this->session->userdata('level') != "Komite"){ ?>
					 Arsip Surat Keluar
					<?php } else {?>
						Kotak Masuk
					<?php } ?>
					</div>
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal</th>
									<th>Nomor Surat</th>
                           <th>Pengirim</th>
									<th>Tertuju</th>
									<th>Disposisi</th>
									<?php if($this->session->userdata('level') != "Murid" AND $this->session->userdata('level') != "Alumni" AND $this->session->userdata('level') != "Wali Murid"){ ?>
										<th>Status</th>
									<?php } ?>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($send as $key=>$row){ ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $row->tanggal ?></td>
										<td><?php echo $row->nomor ?></td>
                              <td><?php echo $row->pengirim ?></td>
										<?php if($this->session->userdata('level') == "Komite" OR $this->session->userdata('level') == "Murid") { ?>
										<td><?php echo $row->tujuan ?></td>
										<?php } else { ?>
										<td><?php echo $row->tertuju ?></td>
										<?php } ?>
										<td><span class="text-success"><i class="fas fa-check-circle"></i></span> <?php echo $row->disposisi ?></td>
										<?php if($this->session->userdata('level') != "Murid" AND $this->session->userdata('level') != "Alumni" AND $this->session->userdata('level') != "Wali Murid"){ ?>
										<td>
											<?php
												if ($row->is_approved == 1) {
														echo '<span class="text-success"><i class="fas fa-check-square"></i></span> Diterima';
												} elseif ($row->is_approved == 0) {
														echo '<span class="text-warning"><i class="fas fa-check-circle"></i></span> Terkirim';
												} elseif ($row->is_approved == 2) {
														echo '<span class="text-danger"><i class="fas fa-times-circle"></i></span> Ditolak';
												}
											?>
										</td>
										<?php } ?>
										<td width="20%" align="center">
											<?php if($this->session->userdata('level') == "Komite" OR $this->session->userdata('level') == "Murid") { ?>
												<a href="<?php echo base_url('./media/suratmasuk/'. $row->berkas) ?>" title="Download" class="btn btn-sm btn-warning"><i class="fas fa-cloud-download-alt "></i></a>
											<?php } else { ?>
												<a href="<?php echo base_url('./media/suratkeluar/'. $row->berkas) ?>" title="Download" class="btn btn-sm btn-warning"><i class="fas fa-cloud-download-alt "></i></a>
											<?php } ?>
											<a title="show" href="#pdfModal<?php $key?>" data-toggle="modal" class="btn btn-sm btn-warning"><i class="fas fa-file-alt "></i></a>
											<?php if($this->session->userdata('level') == "Admin"){ ?>
												<a href="<?php echo base_url('Send/detail/'. $row->id) ?>" title="Update">
													<button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-eye"></i></button>
												</a>

												<a href="<?php echo base_url('Send/update/'. $row->id) ?>" title="Update">
													<button class="btn btn-flat btn-sm btn-success"><i class="fas fa-edit"></i></button>
												</a>

												<a href="<?php echo base_url('Send/delete/'. $row->id) ?>">
													<button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')" class="btn btn-flat btn-sm btn-danger" title="Delete"><i class="fa fa-user-times"></i></button>
												</a>
											<?php } ?>
										</td>
									</tr>
									<!-- Modal view Pdf -->
									<div class="modal fade" id="pdfModal<?php $key?>" tabindex="-1" role="dialog" aria-labelledby="pdfModal<?php $key?>" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="pdfModal<?php $key?>"><i class="fas fa-envelope-open"></i> <?php echo $row->nomor ?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body" style="height: 450px;">
													<?php if($this->session->userdata('level') == "Komite" OR $this->session->userdata('level') == "Murid") { ?>
														<embed type="application/pdf" src="<?php echo base_url('./media/suratmasuk/'. $row->berkas) ?>"width="100%" height="100%"></embed>
														<!-- <object data="<?php echo base_url('./media/suratmasuk/'. $row->berkas) ?>" width="100%"></object> -->
														<!-- <iframe src="<?php echo base_url('./media/suratmasuk/'. $row->berkas) ?>" frameborder="no" width="100%"></iframe> -->
													<?php } else { ?>
														<embed type="application/pdf" src="<?php echo base_url('./media/suratkeluar/'. $row->berkas) ?>"width="100%" height="100%"></embed>
														<!-- <object data="<?php echo base_url('./media/suratkeluar/'. $row->berkas) ?>" width="100%"></object> -->
														<!-- <iframe src="<?php echo base_url('./media/suratkeluar/'. $row->berkas) ?>" frameborder="no" width="100%"></iframe> -->
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<!-- End Modal view Pdf -->
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- Akhir isi Kontent -->
</div>
<!-- Modal Tambah Surat Masuk -->
<form action="<?php echo base_url('Send/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope-open"></i> Tambah Surat Keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="form-group">
        		<label for="tanggal" class="control-label col-md-3">Tanggal Surat :</label>
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
        			<input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Pengirim" autocomplete="off" required>
        		</div>
        	</div>
            <div class="form-group">
                <label for="tertuju" class="control-label col-md-3">Tertuju :</label>
                <div class="col-md-9">
					 <?php if($this->session->userdata('level') == "Admin"){ ?>
                    <input type="text" class="form-control" name="tertuju" id="tertuju" placeholder="Tertuju" autocomplete="off" required>
					<?php } else { ?>
						  <select name="tertuju" id="tertuju" class="form-control" required>
								<option value="">-- Belum Ditentukan --</option>
										<?php foreach ($pengguna as $key => $row) {?>
										<option value="<?php echo $row->username ?>"><?php echo $row->full_name ?></option>
										<?php } ?>
								<option value="Murid">Semua Murid</option>
								<option value="Wali Murid">Semua Wali Murid</option>
								<option value="Alumni">Semua Alumni</option>
								<option value="Guru">Guru</option>
							</select>
					<?php } ?>
					 </div>
            </div>
            <div class="form-group">
                <label for="alamat" class="control-label col-md-3">Alamat :</label>
                <div class="col-md-9">
                    <textarea name="alamat" id="alamat" class="form-control" rows="2" placeholder="Alamat Tujuan"></textarea>
                </div>
            </div>
        	<div class="form-group">
        		<label for="perihal" class="control-label col-md-3">Perihal :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" autocomplete="off" required>
        		</div>
        	</div>
			<?php if($this->session->userdata('level') == "Admin"){ ?>
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
        			<input type="text" class="form-control" name="isi_disposisi" id="isi_disposisi" placeholder="Isi Disposisi" autocomplete="off" required>
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
