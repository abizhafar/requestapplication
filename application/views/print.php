<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.css" />

<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheets/theme.css" /> -->
	<br>
<div class="container" ><img style="text-align: left; margin-left:30px;" src="<?php echo base_url() ?>assets/images/LOGOPAL.png" alt="" width="197" height="43" /></p>
	<hr style="height: 0px; background-color: navy; border:5px solid navy; color:navy;" />
	<h2 style="text-align: center;">&nbsp;<strong><u>FORM PERMINTAAN SOFTWARE APLIKASI <br> DIVISI TEKNOLOGI INFORMASI</u></strong></h2><br>
	
		<table class="table table-striped" style="width: 100%; height: 99px;" >
			<?php foreach ($data as $key) {?>
			<tbody>
			<tr style="height: 1px;">
				<th style="width: 200px; height: 1px;">No. PSA</td>
				<td style="width: 8px; height: 1px;">:</td>
				<th style="width: 589px; height: 1px; text-align: left;" colspan="3"><?php echo $key->no_psa ?></th>
			</tr>
			<tr style="height: 13px;">
				<th style="width: 200px; height: 13px;">Nama User / Notelp.</th>
				<td style="width: 8px; height: 13px;">:</td>
				<td style="width: 242px; height: 13px;"><?php echo $key->nama_user ?></th>
				<td style="width: 8px; height: 13px;">/</td>
				<td style="width: 327px; height: 13px;">&nbsp;&nbsp;<?php echo $key->no_telp ?></td>
			</tr>
			<tr style="height: 13px;">
				<th style="width: 200px; height: 13px;">Divisi / Departemen&nbsp;</th>
				<td style="width: 8px; height: 13px;">:</td>
				<td style="width: 242px; height: 13px;"><?php echo $key->divisi ?></td>
				<td style="width: 8px; height: 13px;">/</td>
				<td style="width: 327px; height: 13px;">&nbsp;&nbsp;<?php echo $key->departemen ?></td>
			</tr>
			<tr style="height: 13px;">
				<th style="width: 200px; height: 13px;">Tgl. Renc. Digunakan</th>
				<td style="width: 8px; height: 13px;">:</td>
				<td style="width: 589px; height: 13px;" colspan="3"><?php echo $key->tgl_digunakan ?></td>
			</tr>
			<tr style="height: 13px;">
				<th style="width: 200px; height: 13px;">Nama Software Aplikasi&nbsp;</th>
				<td style="width: 8px; height: 13px;">:</td>
				<td style="width: 589px; height: 13px;" colspan="3"><?php echo $key->nama_aplikasi ?></td>
			</tr>
			</tbody>
		</table>
	<h4><strong>Uraian Kebutuhan Software Aplikasi:</strong></p></h4>
	<table class="table table-bordered" style="height: 103px; width: 100%;">
		<tbody>
		<tr style="height: 8.375px; border: 1px solid black;">
		<td style="width: 761px; height: 8.375px;"><b>1. Permasalahan : -</b><br><br>
			&nbsp;&nbsp;&nbsp;<?php echo $key->permasalahan ?></td>
		</tr>
		<tr style="height: 19px; border: 1px solid black;">
		<td style="width: 761px; height: 19px;"><b>2. Fungsi &amp; Kegunaan : - </b><br><br>
			&nbsp;&nbsp;&nbsp;<?php echo $key->fungsi ?></td>
		</tr>
		<tr style="height: 13px; border: 1px solid black;">
		<td style="width: 761px; height: 13px;"><b>3. Pengguna : -</b><br><br>
			&nbsp;&nbsp;&nbsp;<?php echo $key->pengguna ?></td>
		</tr>
		<tr style="height: 13px; border: 1px solid black;">
		<td style="width: 761px; height: 13px;"><b>4. Uraian dan Alur Proses :<br/>
				&nbsp;&nbsp;&nbsp;<em>4.1.Inputing : -</b></em><br><br>
				&nbsp;&nbsp;&nbsp;<?php echo $key->input ?>
		</td>
		</tr>
		<tr style="height: 13px; border: 1px solid black;">
		<td style="width: 761px; height: 13px;">&nbsp;&nbsp;&nbsp;<em><b>4.2. Proses-proses : -</b></em><br><br>
			&nbsp;&nbsp;&nbsp;<?php echo $key->input ?></td>
		</tr>
		<tr style="height: 13px; border: 1px solid black;">
		<td style="width: 761px; height: 13px;">&nbsp;&nbsp;&nbsp;<em><b>4.3. Output : -</b></em><br><br>
			&nbsp;&nbsp;&nbsp;<?php echo $key->input ?></td>
		</tr>
		<tr style="height: 13px; border: 1px solid black;">
		<td style="width: 761px; height: 13px;"><b>5. Kebutuhan Komputer &amp; Peripheral : -</b><br><br>
			&nbsp;&nbsp;&nbsp;<?php echo $key->input ?></td>
		</tr>
		</tbody>
	</table>
</div>
<?php 
	if (!$this->session->userdata('registered')) {?>
		<div class="modal fade" id="overlay">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style="background: #0088cc; color: white">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title"> Cetak Form Permintaan Aplikasi</h4>
		      </div>
		      <div class="modal-body">
		        <div style="padding-left: 20px">
		        	<table>
		        		<tr>
		        			<td><h1 style="font-size: 70px; color:#0088cc;"><i class="fa fa-exclamation"></i></h1></td>
		        			<td style="padding-left: 30px"><h3>Cetak Form </h3>
							<!-- <br> -->
							<p style="color: red">Cetak / unduh form ini sebagai tanda bukti !</p>
		        			</td>
		        		</tr>
		        	</table>
		        </div>
		      </div>
		       <div class="modal-footer">
		       	<button class="btn btn-primary" id="btprint"><i class="fa fa-print"></i> Cetak Form Permintaan</button>
		       </div>
		    </div>
		  </div>
		</div>
<?php } else { ?>
	<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: #47a447; color: white">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Permintaan Aplikasi Berhasil</h4>
      </div>
      <div class="modal-body">
        <div style="padding-left: 20px">
        	<table>
        		<tr>
        			<td><h1 style="font-size: 70px; color:#47a447;"><i class="fa fa-check"></i></h1></td>
        			<td style="padding-left: 30px"><h3>Permintaan aplikasi anda telah berhasil berikut nomor PSA anda <b><?php echo $key->no_psa ?></b> </h3>
					<!-- <br> -->
					<p style="color: red">Cetak / unduh form ini sebagai tanda bukti !</p>
        			</td>
        		</tr>
        	</table>
        </div>
      </div>
       <div class="modal-footer">
       	<button class="btn btn-primary" id="btprint"><i class="fa fa-print"></i> Cetak Form Permintaan</button>
       </div>
    </div>
  </div>
</div>
<?php } ?>


	<?php } ?>

		<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
<script>
	$('#overlay').modal('show');

$('#btprint').on('click' , function() { 
  $('.modal').modal('hide');
  window.print();
});

</script>
