<?php $this->view('template.php'); ?>
			
					<header class="page-header">
						<h2>Request Aplication</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?php echo site_url(). '/Dashboard' ?>">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data User</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

			
								<section class="panel">
									<header class="panel-heading">
										<h2 class="panel-title">TABEL USER</h2>
									</header>
									<div class="panel-body">
											<button class="btn navbar-btn mx-auto text-white btn-outline-light" data-toggle="modal" data-target="#myModalAdd" class onclick="delrec()"><i class="glyphicon glyphicon-plus"></i> TAMBAH USER</button>
									<table class="display" id="mytable" style="width:100%">
												<thead>
													<tr>
														<th>ID</th>
														<th>Nama Petugas</th>
														<th>Username</th>
														<th>Password</th>
														<th>Akses</th>
														<th>Aksi</th>
													</tr>
												</thead>
											</table>
									</div>
								</section>

		<form id="add-row-form" action="<?php echo base_url().'index.php/user/simpan'?>" method="post">
             <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">TAMBAH USER</h4>
                       </div>
                       <div class="alert alert-danger print-error-msg" style="display:none"></div>
                       <div class="alert alert-primary print-success-msg" style="display:none"></div>
                       <div class="modal-body">
                           <div class="form-group">
                               <input type="text" id="Nomer_petugas" name="ID" class="form-control" placeholder="Masukkan ID User" required>
                           </div>
                           <div class="form-group">
                               <input type="text" id="Nama_petugas" name="Nama" class="form-control" placeholder=" Masukkan Nama User" required>
                           </div>
                           <div class="form-group">
                               <input type="text" id="Username" name="Username" class="form-control" placeholder="Masukkan Username" required>
                           </div>
                           <div class="form-group">
                               <input type="password" id="Password" name="Password" class="form-control" placeholder="Masukkan Password" required>
                           </div>
                      </div>
                     <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
                          <button type="submit" id="add-row" class="btn btn-success"><i class="glyphicon glyphicon-floppy-save"></i> SIMPAN</button>
                     </div>
                  </div>
              </div>
           </div>
       </form>

       <!-- Modal Update Produk-->
        <form id="add-row-form" action="<?php echo base_url().'index.php/User/update'?>" method="post">
           <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">UPDATE DATA USER</h4>
                     </div>
                     <div class="modal-body">
                         <div class="form-group">
                               <input type="text" name="id" class="form-control" placeholder="Masukkan Nomer Petugas" readonly>
                           </div>
                           <div class="form-group">
                               <input type="text" name="Nama" class="form-control" placeholder=" Masukkan Nama User" required>
                           </div>
                           <div class="form-group">
                               <input type="text" name="Username" class="form-control" placeholder="Masukkan Username" required>
                           </div>
                           <div class="form-group">
                               <input type="password" name="Password" class="form-control" placeholder="Masukkan Password" required>
                           </div>
                     </div>
                     <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
                          <button type="submit" id="add-row" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i> PERBARUI</button>
                     </div>
                  </div>
              </div>
           </div>
       </form>
		
		<!-- Modul hapus data -->
       <form id="dell-row-form" action="<?php echo site_url().'/user/delete'?>" method="post">
       <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                 </div>
                 <div class="modal-body">
                         <input type="hidden" id="del-user" name="id" class="form-control" placeholder="Nomer Petugas" required>
                         <strong>Anda yakin ingin menghapus record ini?</strong>
                 </div>
                 <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
                      <button type="submit" id="dell-row" class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i> HAPUS</button>
                 </div>
              </div>
          </div>
        </div>
      </form>
						
					<!-- end: page -->
<?php $this->view('footer.php'); ?>


<!-- gawe reset record he -->
<script>
  $(document).ready(function(){
    // Setup datatables
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
          return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
      };

      var table = $("#mytable").DataTable({
          	
              oLanguage: {
              sProcessing: "LOADING..."
          },
              "processing": true,
              "serverSide": true,
              "ajax": {"url": "<?php echo base_url().'index.php/User/get_guest_json'?>", "type": "POST"},
                  "columns": [
                        {"data": "id_user"},
                        {"data": "nama_user"},
                        {"data": "username"},
                        {"data": "password", "visible":false, "searchable":false},
                        {"data": "akses", render : function(data) {
                                return data == '1' ? 'Administrator' : 'Administrator'},
                                 className: "text-center"
                        },
                        {"data": "view", "sortable":false},
                        // {"data": "view"},
                  ],
              "order": [[1, 'asc']],
          rowCallback: function(row, data, iDisplayIndex) {
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
          }

      });
      // end setup datatables
      // get Edit Records
      $('#mytable').on('click','.edit_record',function(){
            var id=$(this).data('id_user');
            var Nama=$(this).data('nama_user');
            var Username=$(this).data('username');
            var Password=$(this).data("password");
            // var akses=$(this).data("akses");
            $('#ModalUpdate').modal('show');
            $('[name="id"]').val(id);
            $('[name="Nama"]').val(Nama);
            $('[name="Username"]').val(Username);
            $('[name="Password"]').val(Password);
            
      });
      // End Edit Records
      // get Hapus Records
      $('#mytable').on('click','.hapus_record',function(){
            var id=$(this).data('id_user');
            $('#ModalHapus').modal('show');
            $('[name="id"]').val(id);
      });
      // End Hapus Records

  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $("#add-row").click(function(e){
        e.preventDefault();
        var id_user = $("input[id='Nomer_petugas']").val();
        var nama_user = $("input[id='Nama_petugas']").val();
        var username = $("input[id='Username']").val();
        var password = $("input[id='Password']").val();
        // var hak_akses =$("radio[id='Radio']").val();
          $.ajax({
              url: "<?php echo site_url() ?>/User/simpan",
              type:'POST',
              dataType: "json",
              data: {id:id_user, Nama:nama_user, Username:username, Password:password}, 
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    $(".print-success-msg").css('display','block');
                    // alert(data.success);
                    $(".print-success-msg").html(data.success);
                    $(".print-error-msg").css('display','none');

                    location.replace("<?php echo site_url() ?>/user");
                  }else{
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(data.error);
                  }
              }
          });
      }); 
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $("#dell-row").click(function(e){
        e.preventDefault();
        var id_user = $("input[id='del-user']").val();
          $.ajax({
              url: "<?php echo site_url() ?>/user/delete",
              type:'POST',
              dataType: "json",
              data: {id:id_user},
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    $(".print-success-msg").css('display','block');
                    // alert(data.success);
                    $(".print-success-msg").html(data.success);
                    $(".print-error-msg").css('display','none');

                    location.replace("<?php echo site_url() ?>/user");
                  }
                  // else{
                  //   $(".print-error-msg").css('display','none');
                  //   alert(data.error);
                  //   // $(".print-error-msg").html(data.error);
                  // }
              }
          });
      }); 
  });
</script>
<script>
function delrec() {
  document.getElementById("add-row-form").reset();
}
</script>