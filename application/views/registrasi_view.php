<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png">
    <!-- <link rel="shortcut icon" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png"> -->
	<title>registration</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styleReg.css"/>
    <!-- tanggalan -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css"/>
    <!-- markdown -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
    <!-- <link rel="stylesheet" href="vendor/bootrap/css/bootstrap.css" /> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/> -->

	<!-- <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css" /> -->
    <!-- <link data-require="fontawesome@4.1.0" data-semver="4.1.0" rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdn.rawgit.com/toopay/bootstrap-markdown/master/css/bootstrap-markdown.min.css" /> -->
    <!-- <link rel="stylesheet" href="markdown/style.css" /> -->

    
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Informasi User</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Informasi User</h3>
									<p>Silakan masukkan informasi Anda dan lanjutkan ke langkah berikutnya  </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>No. PSA (by DIVTI)</legend>
											<input type="text" class="form-control" id="psa" name="no_psa" placeholder="No. PSA" required readonly>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Divisi / Departemen</legend>
											<input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi / Departemen" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Nama User</legend>
											<input type="text" class="form-control" id="name" name="nama_user" placeholder="Nama User" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Nomor Telepon</legend>
											<input type="text" class="form-control" id="notlp" name="no_telp" placeholder="Nomor Telepon" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Tanggal Interview User</legend>
											<input type="text" class="form-control"	data-provide="datepicker" name="tgl_interview" placeholder="00/00/0000">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Tanggal Rencana Digunakan</legend>
											<input placeholder="00/00/0000" type="text" class="form-control" name="tgl_interview" data-provide="datepicker">
										</fieldset>
									</div>
								</div>
								
								</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Kebutuhan Aplikasi</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Kebutuhan Aplikasi</h3>
									<p>Silahkan isi uraian kebutuhan software aplikasi yang diinginkan</p>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Permasalahan</legend>
											<!-- <textarea id="bootstrap-markdown" name="comment" placeholder="Say something..."></textarea> -->
											<textarea name="content" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Fungsi & Kegunaan</legend>
											<!-- <textarea id="bootstrap-markdown" name="comment" placeholder="Say something..."></textarea> -->
											<textarea name="content" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>	
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Fungsi</legend>
											<!-- <textarea id="bootstrap-markdown" name="comment" placeholder="Say something..."></textarea> -->
											<textarea name="content" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Inputing</legend>
											<textarea name="content" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Proses-proses</legend>
											<textarea name="content" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Output</legend>
											<textarea name="content" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Kebutuhan Komputer dan Peripheral</legend>
											<textarea name="content" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Konfirmasi</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Informasi Status</h3>
									<p>Terdapat 3 jenis informasi status yang akan anda temukan pada halaman landing page. </p>
								</div>
								<div class="form-row">
			                		<div class="form-holder form-holder-2">
			                			<input type="radio" class="radio" name="radio1" id="plan-1" value="plan-1">
			                			<label class="plan-icon plan-1-label" for="plan-1">
		                					<img src="<?php echo base_url() ?>assets/images/list.png" style="height: 35px" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">Waiting</span>
		                					<p class="plan-text">Berarti Aplikasi anda sedang berada dalam waiting list Divisi Teknologi menunggu untuk di proses</p>
		                				</div>
			                			<input type="radio" class="radio" name="radio1" id="plan-2" value="plan-2">
			                			<label class="plan-icon plan-2-label" for="plan-2">
			                					<img src="<?php echo base_url() ?>assets/images/process.png" style="height: 40px" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">On Process</span>
		                					<p class="plan-text">Berarti aplikasi anda sedang dalam proses pengerjaan</p>
		                				</div>
										<input type="radio" class="radio" name="radio1" id="plan-3" value="plan-3" checked>
										<label class="plan-icon plan-3-label" for="plan-3">
		                					<img src="<?php echo base_url() ?>assets/images/finish.png" style="height: 40px" alt="pay-2">
										</label>
										<div class="plan-total">
		                					<span class="plan-title">Finish</span>
		                					<p class="plan-text">Berarti aplikasi anda sudah selesai dalam proses pengerjaan dan siap untuk digunakan</p>
		                				</div>
			                		</div>
			                	</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<!-- <link rel="stylesheet" href="vendor/bootrap/js/bootstrap.js" /> -->
	<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.steps.js"></script>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
	<!-- tanggal -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
	<!-- markdown -->
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap-markdown/js/markdown.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>

	

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>