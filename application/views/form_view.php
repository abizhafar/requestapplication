<form action="">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Nomor PSA</label>
				<input type="text" name="Nomor" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Nama User</label>
				<input type="text" name="Nama" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Nomor Telepon</label>
				<input type="text" name="Nomor_tlp" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Divisi</label>
				<input type="text" name="Divisi" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Departemen</label>
				<input type="text" name="Departemen" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Tanggal Interview User</label>
				<input type="text" name="Tanggal_interview" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Tanggal Rencana Digunakan</label>
				<input type="text" name="Tanggal_rencana" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Tanggal Proses</label>
				<input type="text" name="Tanggal_prosess" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Tanggal Deploy</label>
				<input type="text" name="Tanggal_deploy" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="control-label">Nama Aplikasi</label>
				<input type="text" name="Aplikasi" class="form-control">
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

				<textarea class="form-control" data-provide="markdown" rows="5" name="Permasalahan" placeholder="Uraikan permasalahan yang dihadapi"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label">Fungsi & Kegunaan</label>
				<textarea class="form-control" data-provide="markdown" rows="5" name="Fungsi" placeholder="Uraikan Fungsi dan Kegunaan aplikasi yang diminta"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label">Pengguna</label>
				<textarea class="form-control" data-provide="markdown" rows="5" name="Pengguna" placeholder="Uraikan Pengguna aplikasi yang diminta"></textarea>
			</div>
		</div>
		<br>
			<label class="control-label"><center><b>URAIAN DAN ALUR PROSES</b></center></label>
		<br>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label"><i>Inputing</i></label>
				<textarea class="form-control" data-provide="markdown" rows="5" name="Input" placeholder="Uraikan yang diinputkan pada aplikasi yang diminta"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label">Proses-proses</label>
				<textarea class="form-control" data-provide="markdown" rows="5" name="Proses" placeholder="Uraikan Proses-proses aplikasi yang diminta"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label"><i>Output</i></label>
				<textarea class="form-control" data-provide="markdown" rows="5" name="Output" placeholder="Uraikan Output aplikasi yang diminta"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="col-lg-12" class="form-control">
				<label class="control-label">Kebutuhan Komputer & Peripheral </label>
				<textarea class="form-control" data-provide="markdown" rows="5" name="Kebutuhan" placeholder="Uraikan Kebutuhan Komputer aplikasi yang diminta"></textarea>
			</div>
		</div>
	<br>	
	<label><b>STATUS APLIKASI</b></label>

	<div class="panel-body">
	<div class="row" style="margin-bottom: 10px">
		<div class="col-sm-6">
			<div class="radio-inline">
					<label>
						 <input type="radio" name="optradio" checked >
							Application in Waiting List
					</label>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="radio-inline">
					<label>
						 <input type="radio" name="optradio" checked>
							Application On Progress
					</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="radio-inline">
					<label>
						<input type="radio" name="optradio" checked>
							Application in Trial
					</label>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="radio-inlinea">
					<label>
					<input type="radio" name="optradio" checked>
							Application Complete
					</label>
			</div>
		</div>
	</div>
		
		<br><br>
		<button class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> SIMPAN</button>
			&nbsp &nbsp
		<button class="btn btn-success"><i class="glyphicon glyphicon-print"></i> PRINT</button>
	</div>	
</form>
										

						<!-- end: page -->
