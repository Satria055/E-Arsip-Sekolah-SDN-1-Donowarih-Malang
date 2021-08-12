<div class="content-wrapper">

	<!-- Isi Kontent -->
	<section class="content container-fluid">

		<div class="row">
			<div class="col-md-12">

				<form action="<?php echo base_url('Soal/update_soal') ?>" method="post" class="form-horizontal">
					<div class="box box-solid">
						<div class="box-body">
							<input type="hidden" name="id" value="<?php echo $detail['id'] ?>">
							<div class="form-group">
				                <label for="mapel" class="control-label col-md-3">Mata Pelajaran :</label>
				                <div class="col-md-4">
				                     <select name="mapel" id="mapel" class="form-control">
				                     	<option value="<?php echo $detail['mapel'] ?>"><?php echo $detail['mapel'] ?></option>
				                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
				                        <option value="Bahasa Inggris">Bahasa Inggris</option>
				                        <option value="Matematika">Matematika</option>
				                    </select>
				                </div>
				                <div class="col-md-4">
				                    <select name="kode_mapel" id="kode_mapel" class="form-control">
				                    	<option value="<?php echo $detail['kode_mapel'] ?>"><?php echo $detail['kode_mapel'] ?></option>
				                        <option value="B.IND">B.IND</option>
				                        <option value="B.ING">B.ING</option>
				                        <option value="MTK">MTK</option>
				                    </select>
				                </div>
				            </div>
				        	<div class="form-group">
				        		<label for="kelas" class="control-label col-md-3">Kelas :</label>
				        		<div class="col-md-4">
				        			 <select name="kelas" id="kelas" class="form-control">
				        			 	<option value="<?php echo $detail['kelas'] ?>"><?php echo $detail['kelas'] ?></option>
				                        <option value="Kelas 1">Kelas 1</option>
				                        <option value="Kelas 2">Kelas 2</option>
				                        <option value="Kelas 3">Kelas 3</option>
																<option value="Kelas 4">Kelas 4</option>
																<option value="Kelas 5">Kelas 5</option>
																<option value="Kelas 6">Kelas 6</option>
				                    </select>
				        		</div>
				                <div class="col-md-4">
				                    <select name="kode" id="kode" class="form-control">
				                    	<option value="<?php echo $detail['kode'] ?>"><?php echo $detail['kode'] ?></option>
				                        <option value="A">A</option>
				                        <option value="B">B</option>
				                        <option value="C">C</option>
				                    </select>
				                </div>
				        	</div>

				             <div class="form-group">
				                <label for="guru" class="control-label col-md-3">Guru Pengampu :</label>
				                <div class="col-md-9">
				                     <input type="text" class="form-control" name="guru" id="guru" value="<?php echo $detail['guru'] ?>" autocomplete="off" required>
				                </div>
				            </div>
				             <div class="form-group">
				                <label for="kurikulum" class="control-label col-md-3">Kurikulum :</label>
				                <div class="col-md-9">
				                     <input type="text" class="form-control" name="kurikulum" id="kurikulum" value="<?php echo $detail['kurikulum'] ?>" autocomplete="off" required>
				                </div>
				            </div>
				        	<div class="form-group">
				        		<label for="semester" class="control-label col-md-3">Semester :</label>
				        		<div class="col-md-9">
				        			<select name="semester" id="semester" class="form-control">
				        				<option value="<?php echo $detail['semester'] ?>"><?php echo $detail['semester'] ?></option>
				                        <option value="1 (Satu)">1 (Satu)</option>
				                        <option value="2 (Dua)">2 (Dua)</option>
				                    </select>
				        		</div>
				        	</div>
				            <div class="form-group">
				                <label for="tahun_ajaran" class="control-label col-md-3">Tahun Ajaran :</label>
				                <div class="col-md-9">
				                    <input type="text" class="form-control" name="tahun_ajaran" id="tahun_ajaran" value="<?php echo $detail['tahun_ajaran'] ?>" autocomplete="off" required>
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="jenis" class="control-label col-md-3">Jenis Ujian :</label>
				                <div class="col-md-9">
				                    <select name="jenis" id="jenis" class="form-control">
				                    	<option value="<?php echo $detail['jenis'] ?>"><?php echo $detail['jenis'] ?></option>
				                        <option value="Ulangan">Ulangan</option>
				                        <option value="UTS">Ujian Tengah Semester</option>
				                        <option value="UAS">Ujian Akhir Semester</option>
				                        <option value="Try Out">Try Out</option>
				                    </select>
				                </div>
				            </div>

				        	<div class="form-group">
				        		<label for="berkas" class="control-label col-md-3">FIle Soal :</label>
				        		<div class="col-md-7">
				        			 <input type="text" class="form-control" name="berkas" id="berkas" value="<?php echo $detail['berkas'] ?>" autocomplete="off" readonly>
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
