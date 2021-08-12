<div class="content-wrapper">

	<div class="content-header">
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
	</div>


	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-header bg-yellow"><i class="fas fa-file-archive"></i> Arsip Ijazah &amp; SKHUN</div>
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>No Ijazah</th>
									<th>Nama Lengkap</th>
                                    <th>T. Tgl Lahir</th>
									<th>Tahun Lulus</th>
                                    <th>Unduh</th>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($ijazah as $key=>$row){ ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $row->no_ijazah ?></td>
										<td><?php echo $row->nama_lengkap ?></td>
                                        <td><?php echo $row->tempat_lahir ?> / <?php echo $row->tgl_lahir ?></td>
										<td><?php echo $row->tahun_lulus ?></td>
                                        <td align="center">
                                            <a href="<?php echo base_url('./media/ijazah/'. $row->berkas) ?>" title="Download" class="btn btn-sm btn-warning"><i class="fas fa-cloud-download-alt "></i> Ijazah</a>

                                            <a href="<?php echo base_url('./media/ijazah/'. $row->skhun) ?>" title="Download" class="btn btn-sm btn-primary"><i class="fas fa-cloud-download-alt "></i> Skhun</a>
                                        </td>
										<td width="15%" align="center">
											<a href="<?php echo base_url('Ijazah/detail/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-eye"></i></button>
											</a>

											<a href="<?php echo base_url('Ijazah/update/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-success"><i class="fas fa-edit"></i></button>
											</a>

											<a href="<?php echo base_url('Ijazah/delete/'. $row->id) ?>">
												<button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')" class="btn btn-flat btn-sm btn-danger" title="Delete"><i class="fa fa-user-times"></i></button>
											</a>
										</td>
									</tr>
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
<form action="<?php echo base_url('Ijazah/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope"></i> Tambah Arsip Ijazah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="form-group">
        		<label for="nama_lengkap" class="control-label col-md-3">Nama Lengkap :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="tempat_lahir" class="control-label col-md-3">Tempat Lahir :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="tgl_lahir" class="control-label col-md-3">Tanggal Lahir :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control tanggal" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="no_un" class="control-label col-md-3">Nomor UN :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="no_un" id="no_un" placeholder="Nomor Ujian Nasional" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
                <label for="no_ijazah" class="control-label col-md-3">Nomor Ijazah :</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="no_ijazah" id="no_ijazah" placeholder="Nomor Ijazah" autocomplete="off" required>
                </div>
            </div>
        	<div class="form-group">
        		<label for="tahun_lulus" class="control-label col-md-3">Tahun Lulus :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="tahun_lulus" id="tahun_lulus" placeholder="Tahun Lulus" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="berkas" class="control-label col-md-3">Upload Scan Ijazah :</label>
        		<div class="col-md-9">
        			<input type="file" class="form-control" name="berkas" id="berkas" required>
        		</div>
        	</div>
            <div class="form-group">
                <label for="berkas" class="control-label col-md-3">Upload Scan SKUN :</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" name="berkas2" id="berkas" required>
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