<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png">
    <!-- <link rel="shortcut icon" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png"> -->
	<title>Regristation Application Request</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.css" />
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/steyele.css"/>
    <!-- tanggalan -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap-datepicker/css/datepicker4.css"/>
    <!-- CSS navigasibar -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheets/nav.css">
    <!-- Script: Make my navbar transparent when the document is scrolled to top -->
    <script src="<?php echo base_url() ?>assets/javascripts/navbar-ontop.js"></script>
    <!-- Script: Animated entrance -->
    <script src="<?php echo base_url() ?>assets/javascripts/animate-in.js"></script>
    <!-- markdown -->
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" /> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap-markdown/csgo/csgo-markdown.min.css" />
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootrap/css/gaemark.css" /> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootrap/css/bootstrap.css" /> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/> -->

	<!-- <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css" /> -->
    <!-- <link data-require="fontawesome@4.1.0" data-semver="4.1.0" rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdn.rawgit.com/toopay/bootstrap-markdown/master/css/bootstrap-markdown.min.css" /> -->
    <!-- <link rel="stylesheet" href="markdown/style.css" /> -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css"> -->
<style type="text/css">
body {
    background-color: #0dd42b
}
h1 {
    color: #96f226;
    font-size: 36px;
    width: 108px;
}

.ui-autocomplete {
    /*background-image: -webkit-linear-gradient( 450deg, #4f289a 0%, #74ebd5 100%);*/
    background-color: #fff;
    border-radius: 1px;
    border: 2px solid #e5e5e5;
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    max-height: 90px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
    /* add padding to account for vertical scrollbar */
    padding-right: 3px;

}
.ui-menu .ui-menu-item {
 	color: black;
    border-radius: 4px;
    border: none;
}

.ui-menu .ui-menu-item:hover {
 	color: white;
    border-radius: 4px;
    border: none;
    background: #12bbad;
}

/*.ui-front{
	color: #4f289a;
    border-radius: 4px;
    border: none;
    background-color: black;
}
.ui-widget{
	color: #4f289a;
    border-radius: 4px;
    border: none;
    background-color: black;
}
.ui-widget-content{
	color: #4f289a;
    border-radius: 4px;
    border: none;
    background-color: black;
}*/
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #8f8f8f; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background-image: -webkit-linear-gradient( 450deg, #4f289a 0%, #12bbad 100%); 
}

</style>


    
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
				<a class="navbar-brand" href="<?php echo site_url() ?>/Home"><img width="120px" src="<?php echo base_url() ?>assets/images/logopal.png" alt=""></a>	
			</div>
		</div>
	</nav>
	<!-- end NAVBAR -->
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="<?php echo site_url('Registrasi/simpan') ?>" method="post" id="form">
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
											<legend>Divisi</legend>
											<input type="text" class="form-control" id="divisi" name="divisi" placeholder="Nama Divisi" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Departemen</legend>
											<input type="text" class="form-control" id="departemen" name="departemen" placeholder="Nama Departemen" required>
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
											<legend>Nama Aplikasi</legend>
											<input type="text" class="form-control" name="nama_aplikasi" placeholder="Nama Aplikasi">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Tanggal Rencana Digunakan</legend>
											<input placeholder="00/00/0000" type="text" class="form-control" name="tgl_digunakan" data-provide="datepicker">
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
											<textarea name="permasalahan" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Fungsi & Kegunaan</legend>
											<!-- <textarea id="bootstrap-markdown" name="comment" placeholder="Say something..."></textarea> -->
											<textarea name="fungsi" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>	
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Pengguna</legend>
											<!-- <textarea id="bootstrap-markdown" name="comment" placeholder="Say something..."></textarea> -->
											<textarea name="pengguna" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Inputing</legend>
											<textarea name="input" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Proses-proses</legend>
											<textarea name="proses" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Output</legend>
											<textarea name="output" data-provide="markdown" rows="10"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Kebutuhan Komputer dan Peripheral</legend>
											<textarea name="kebutuhan" data-provide="markdown" rows="10"></textarea>
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
			                			<label class="plan-icon plan-1-label" for="plan-1" style="background-color: #dcdc31;">
		                					<img src="<?php echo base_url() ?>assets/images/list.png" style="height: 35px" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">Waiting</span>
		                					<p class="plan-text">Berarti Aplikasi anda sedang berada dalam waiting list Divisi Teknologi menunggu untuk di proses</p>
		                				</div>
			                			<input type="radio" class="radio" name="radio1" id="plan-2" value="plan-2">
			                			<label class="plan-icon plan-2-label" for="plan-2" style="background-color: #45dc31">
			                					<img src="<?php echo base_url() ?>assets/images/process.png" style="height: 40px" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">On Progress</span>
		                					<p class="plan-text">Berarti aplikasi anda sedang dalam proses pengerjaan</p>
		                				</div>
										<input type="radio" class="radio" name="radio1" id="plan-3" value="plan-3" checked>
										<label class="plan-icon plan-3-label" for="plan-3" style="background-color: #31afdc">
		                					<img src="<?php echo base_url() ?>assets/images/finish.png" style="height: 40px" alt="pay-2">
										</label>
										<div class="plan-total">
		                					<span class="plan-title">Complete</span>
		                					<p class="plan-text">Berarti aplikasi anda sudah selesai dalam proses pengerjaan dan siap untuk digunakan</p>
		                				</div>
		                				<p style="font-size: 25px; color: red">Peringatan!</p>
		                				<p style="color: red">Pastikan data yang anda isi sudah benar. Jika terjadi kesalahan dalam pengisian data dapat langsung melapor ke Divisi Teknologi dengan menunjukan Nomor PSA</p>
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
	<script src="<?php echo base_url() ?>assets/vendor/bootrap/js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	

	<!-- <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script> -->
	<script src="<?php echo base_url() ?>assets/js/jquery.steps.js"></script>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
	<!-- tanggal -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
	<!-- markdown -->
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap-markdown/js/markdown.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap-markdown/js/bs-md.js"></script>


<!-- Gawe autocomplete -->
<script type="text/javascript">	
 jQuery( function() {
    var availableTags = [
     	<?php 
			foreach ($divisi as $key) {
				echo '"'.$key->id_divisi.' | '.$key->divisi.'",';
			}

		 ?>
	];
    jQuery( "#divisi" ).autocomplete({
      source: availableTags,
      minLength:2//gawe minimal data nde autocomplete
    });
  } );
  </script>
</body>
</html>