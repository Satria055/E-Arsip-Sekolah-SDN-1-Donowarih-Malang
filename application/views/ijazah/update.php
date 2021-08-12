<div class="content-wrapper">

	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				
				<form action="<?php echo base_url('Ijazah/update_ijazah') ?>" method="post" class="form-horizontal">
					<div class="box box-solid">
						<div class="box-body">
							<input type="hidden" name="id" value="<?php echo $detail['id'] ?>">
							<div class="form-group">
				        		<label for="nama_lengkap" class="control-label col-md-3">Nama Lengkap :</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"value="<?php echo $detail['nama_lengkap'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="tempat_lahir" class="control-label col-md-3">Tempat Lahir :</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo $detail['tempat_lahir'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="tgl_lahir" class="control-label col-md-3">Tanggal Lahir :</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control tanggal" name="tgl_lahir" id="tgl_lahir" value="<?php echo $detail['tgl_lahir'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="no_un" class="control-label col-md-3">Nomor UN :</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control" name="no_un" id="no_un" value="<?php echo $detail['no_un'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				                <label for="no_ijazah" class="control-label col-md-3">Nomor Ijazah :</label>
				                <div class="col-md-9">
				                    <input type="text" class="form-control" name="no_ijazah" id="no_ijazah" value="<?php echo $detail['no_ijazah'] ?>" autocomplete="off" required>
				                </div>
				            </div>
				        	<div class="form-group">
				        		<label for="tahun_lulus" class="control-label col-md-3">Tahun Lulus :</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control" name="tahun_lulus" id="tahun_lulus" value="<?php echo $detail['tahun_lulus'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="berkas" class="control-label col-md-3">Scan Ijazah :</label>
				        		<div class="col-md-9">
				        			<input type="text" class="form-control" name="berkas" id="berkas" value="<?php echo $detail['berkas'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				            <div class="form-group">
				                <label for="berkas2" class="control-label col-md-3">Scan SKUN :</label>
				                <div class="col-md-9">
				                   <input type="text" class="form-control" name="berkas2" id="berkas2" value="<?php echo $detail['skhun'] ?>" autocomplete="off" required>
				                </div>
				            </div>
				        	<div class="form-group">
				        		<label for="" class="control-label col-md-3"></label>
				        		<div class="col-md-8">
				        			<button type="submit" name="submit" class="btn btn-flat btn-success"><i class="fas fa-sync"></i> UPDATE</button>
				        		</div>
				        	</div>
						</div>
					</div>
				</form>
					
			</div>
		</div>

	</section>
	<!-- Akhir isi Kontent -->
</div>
