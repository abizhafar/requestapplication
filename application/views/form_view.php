
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Nomor PSA</label>
				<input type="text" name="no_psa" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Nama User</label>
				<input type="text" name="nama_user" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Nomor Telepon</label>
				<input type="text" name="no_telp" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Divisi</label>
				<input type="text" name="divisi" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Departemen</label>
				<input type="text" name="departemen" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Tanggal Interview User</label>
				<input type="text" name="tgl_interview" class="form-control" data-provide="datepicker">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Tanggal Rencana Digunakan</label>
				<input type="text" name="tgl_digunakan" class="form-control" data-provide="datepicker">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Tanggal Proses</label>
				<input type="text" name="tgl_proses" class="form-control" data-provide="datepicker">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Tanggal Deploy</label>
				<input type="text" name="tgl_deploy" class="form-control" data-provide="datepicker">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Nama Aplikasi</label>
				<input type="text" name="nama_aplikasi" class="form-control">
			</div>
		</div>
	</div>
	<!-- AREA TEXTAREA START -->
	<br>
		<label class="control-label"><center><b>URAIAN KEBUTUHAN SOFTWARE APLIKASI</b></center></label>
	<br>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">

				<label class="control-label">Permasalahan</label>

				<textarea class="form-control" data-provide="markdown" rows="5" id="permasalahan" name="permasalahan" placeholder="Uraikan permasalahan yang dihadapi"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label">Fungsi & Kegunaan</label>
				<textarea class="form-control" data-provide="markdown" rows="5" id="fungsi" name="fungsi" placeholder="Uraikan Fungsi dan Kegunaan aplikasi yang diminta"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label">Pengguna</label>
				<textarea class="form-control" data-provide="markdown" rows="5" id="pengguna" name="pengguna" placeholder="Uraikan Pengguna aplikasi yang diminta"></textarea>
			</div>
		</div>
		<br>
			<label class="control-label"><center><b>URAIAN DAN ALUR PROSES</b></center></label>
		<br>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label"><i>Inputing</i></label>
				<textarea class="form-control" data-provide="markdown" rows="5" id="input" name="input" placeholder="Uraikan yang diinputkan pada aplikasi yang diminta"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label">Proses-proses</label>
				<textarea class="form-control" data-provide="markdown" rows="5" id="proses" name="proses" placeholder="Uraikan Proses-proses aplikasi yang diminta"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label"><i>Output</i></label>
				<textarea class="form-control" data-provide="markdown" id="output" rows="5" name="output" placeholder="Uraikan Output aplikasi yang diminta"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label">Kebutuhan Komputer & Peripheral </label>
				<textarea class="form-control" data-provide="markdown" id="kebutuhan" rows="5" name="kebutuhan" placeholder="Uraikan Kebutuhan Komputer aplikasi yang diminta"></textarea>
			</div>
		</div>
	<br>	
	<label><b>STATUS APLIKASI</b></label>

	<div class="panel-body">
	<div class="row" style="margin-bottom: 10px">
		<div class="col-sm-6">
			<div class="radio-inline">
					<label>
						 <input type="radio" id="optradio1" name="status" value="1">
							Application in Waiting List
					</label>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="radio-inline">
					<label>
						 <input type="radio" id="optradio2" name="status" value="2" >
							Application On Progress
					</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="radio-inline">
					<label>
						<input type="radio" id="optradi3" name="status" value="3" >
							Application in Trial
					</label>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="radio-inlinea">
					<label>
					<input type="radio" id="optradi4" name="status" value="4" >
							Application Complete
					</label>
			</div>
		</div>
	</div>
		
		<br><br>
		<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> SIMPAN</button>
			&nbsp &nbsp
		<button class="btn btn-success"><i class="glyphicon glyphicon-print"></i> PRINT</button>
	</div>	
										

						<!-- end: page -->
