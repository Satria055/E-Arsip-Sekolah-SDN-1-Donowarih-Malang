<div class="content-wrapper">
	<!-- Isi Kontent -->
	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">				
					<div class="box-body table-responsive">
					<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>Id</th>
									<th>Judul</th>
									<th>Nomor Arsip</th>
                           <th>Tgl Diarsipkan</th>
									<th>Jenis Surat</th>
									<th>Uploader</th>
									<th>Status</th>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($arsip as $key=>$row){ ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td>#<?php echo $row->id ?></td>
										<td><?php echo $row->judul ?></td>
										<td><?php echo $row->nomor ?></td>
                              <td><?php echo $row->time_added ?></td>
										<td><?php 
										if($row->jenis_surat == 1) { 
											echo 'Surat Masuk';
										} elseif($row->jenis_surat == 0) {
											echo 'Surat Keluar';
										} elseif($row->jenis_surat == 2){
											echo 'Ijazah';
										} else {
											echo 'Tidak Terdaftar';
										}
										?></td>
										<td><?php echo $row->uploader ?></td>
										<td>
											<?php 
												if($row->is_approved == 1){
													echo '<span class="text-success"><i class="fas fa-check-square"></i></span> Diterima';
												}elseif($row->is_approved == 0){
													echo '<span class="text-warning"><i class="fas fa-check-circle"></i></span> Terkirim';
												}elseif($row->is_approved == 2){
													echo '<span class="text-danger"><i class="fas fa-times-circle"></i></span> Ditolak';
												}
											?>
										</td>
										<td width="20%" align="center">
											<a href="<?php echo base_url($row->file_path.''. $row->file_name) ?>" title="Download" class="btn btn-sm btn-warning"><i class="fas fa-cloud-download-alt "></i></a>
											<a title="show" href="#pdfModal<?php $key?>" data-toggle="modal" class="btn btn-sm btn-warning"><i class="fas fa-file-alt "></i></a>
											<a href="<?php echo base_url('Arsip/detail/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-eye"></i></button>
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
