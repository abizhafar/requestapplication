<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" type="image/png" href="https://pmb.aknbojonegoro.ac.id/wp-content/uploads/2019/02/cropped-polinema.png">
  <title>Form Application Request</title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheets/aquamarine.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="<?php echo base_url() ?>assets/javascripts/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="<?php echo base_url() ?>assets/javascripts/animate-in.js"></script>

  <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body class="text-center">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
                <a class="navbar-brand" href="#"><img width="120px" src="<?php echo base_url() ?>assets/images/logopal.png" alt=""></a>
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="<?php echo site_url('') ?>/Registrasi">Register Permintaan Aplikasi</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#cek">Cek Status Aplikasi</a>
          </li>
        </ul>
        <a class="btn navbar-btn mx-2 text-white btn-outline-light" id="myBtn" >Login<br></a>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="d-flex align-items-center section-aquamarine py-5 cover" style="background-image: url(&quot;<?php echo base_url() ?>assets/images/bgn.jpeg&quot;); background-position: left top; background-size: 100%; background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-white mt-5">
          <h2 class="text-capitalize w-100" style=""><b>WELCOME</b></h2>
          <h3 class="display-3">Form Application Request</h3>
          <h3 style="" class=""><b>DIVISI TEKNOLOGI PT. PAL INDONESIA</b></h3>
          <a href="<?php echo site_url('') ?>/Registrasi" class="btn btn-lg mt-4 btn-outline-light">Daftarkan Permintaan Aplikasi</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Parallax section -->
  <!-- Speakers -->
  <!-- Schedule -->
  <!-- Sponsor logos -->
  <!-- Call to action -->
  <!-- Footer -->
  <div class="py-5 bg-light" id="cek" style="">
    <div class="container">
      <div class="row">
        <div class="p-5 col-md-12 d-flex flex-column justify-content-center outline-primary ">
          <h1 class="text-capitalize w-100 text-left" style=""><b>Cek Status Permintaan Aplikasi</b></h1>
          <form action="">
            <div class="input-group">
              <input type="text" class="form-control form-control-lg" placeholder="Nomor Registrasi PSA">
              <div class="input-group-append"><button class="btn btn-outline-primary btn-lg text-blue" type="button" onclick="myFunction()" id="cari">Cari</button></div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12" style="display: none" id="table">
                <section class="panel">
                  <header class="panel-heading">            
                    <h2 class="panel-title">Status Permintaan Aplikasi</h2>
                  </header>
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-condensed mb-none">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </section>
              </div>

              <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content col-lg-4">
                  <span class="close pull-right" style="margin-left: inherit;">&times;</span>
                  <div class="row">
                    <div class="mx-auto col-md-6 col-10 bg-white">
                      <h1 class="mb-4">Log in</h1>
                       <?php echo form_open('Home/CekLogin'); ?>
                       <?php echo validation_errors(); ?>
                        <div class="form-group"> <input type="text" class="form-control" placeholder="Enter username" required="true" name="username"> </div>
                        <div class="form-group mb-3"> <input type="password" class="form-control" placeholder="Password" required="true" name="password"> <small class="form-text text-muted text-right">
                          </small> </div> <button type="Login" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
                  </div>
              </div>
      </div>
    </div>
  </div>
  <footer class="text-md-left text-center p-4 bg-dark text-light" id="login" style="">
    <div class="container">
      
      <div class="row">
        <div class="col-md-12">
          <p class="text-muted">© Copyright 2019 PT. PAL INDONESIA - DIVISI TEKNOLOGI </p> 
        </div>
      </div>
    </div>
  </footer>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="<?php echo base_url() ?>assets/javascripts/smooth-scroll.js" style=""></script>
  <script>
    function myFunction() {
      document.getElementById("table").style.display = "block";
    }
  </script>
</body>

</html>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>