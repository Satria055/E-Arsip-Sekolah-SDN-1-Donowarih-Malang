<div class="content-wrapper">

	<div class="content-header">
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
	</div>

	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header bg-yellow">Data Mata Pelajaran</div>
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode</th>
									<th>Mata Pelajaran</th>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($mapel as $key=>$row){ ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $row->kode ?></td>
									<td><?php echo $row->mapel ?></td>
									<td width="10%" align="center">
										<a href="<?php echo base_url('Master/del_mapel/'. $row->id) ?>">
											<button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')" class="btn btn-flat btn-sm btn-danger" title="Delete"><i class="fa fa-user-times"></i> Hapus</button>
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
</div>



<!-- Modal Tambah Surat Masuk -->
<form action="<?php echo base_url('Master/add_pelajaran') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-file"></i> Tambah Mata Pelajaran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="form-group">
        		<label for="kode" class="control-label col-md-3">Kode :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Pelajaran" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="mapel" class="control-label col-md-3">Mata Pelajaran :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="mapel" id="mapel" placeholder="Mata Pelajaran" autocomplete="off" required>
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