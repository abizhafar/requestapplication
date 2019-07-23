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
                <li><span>Data Divisi</span></li>
              </ol>
          
              <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


						<section class="panel">
							<header class="panel-heading">						
								<h2 class="panel-title">TABLE DIVISI</h2>
							</header>
							<div class="panel-body">
											<button class="btn navbar-btn mx-auto text-white btn-outline-light" data-toggle="modal" data-target="#myModalAdd" class onclick="delrec()"><i class="glyphicon glyphicon-plus"></i> TAMBAH DIVISI</button>
								<table class="display" id="mytable"  style="width:100%">
          							<thead>
      										<tr>
      											<th>Kode Divisi</th>
      											<th>Nama Divisi</th>
      											<th>Aksi</th>
      										</tr>
      									</thead>
									</table>
							</div>
						</section>
						<form id="add-row-form" action="<?php echo base_url().'index.php/Divisi/simpan'?>" method="post">
             <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">TAMBAH DIVISI</h4>
                       </div>
                       <div class="alert alert-danger print-error-msg" style="display:none"></div>
                       <div class="alert alert-primary print-success-msg" style="display:none"></div>
                       <div class="modal-body">
                           <div class="form-group">
                               <input type="text" id="id_divisi" name="Kode" class="form-control" placeholder="Masukkan Kode Divisi" required>
                           </div>
                           <div class="form-group">
                               <input type="text" id="Nama_divisi" name="Nama" class="form-control" placeholder=" Masukkan Nama Divisi" required>
                           </div>
                           
			 </div>
                     <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
                          <button type="submit" id="add-row" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> SIMPAN</button>
						</div>
					</div>
				</div>
			</aside>
		</section>
	</div>
</form>
<form id="add-row-form" action="<?php echo base_url().'index.php/Divisi/update'?>" method="post">
           <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">UPDATE DIVISI</h4>
                     </div>
                     <div class="modal-body">
                         <div class="form-group">
                               <input type="text" name="id" class="form-control" placeholder="Masukkan Kode Divisi" readonly>
                           </div>
                           <div class="form-group">
                               <input type="text" name="Nama" class="form-control" placeholder=" Masukkan Nama Divisi" required>
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
       <form id="dell-row-form" action="<?php echo site_url().'/Divisi/delete'?>" method="post">
       <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Hapus Divisi</h4>
                 </div>
                 <div class="modal-body">
                         <input type="button" id="del-divisi" name="Nomer" class="form-control" placeholder="Nomer Petugas" required>
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

	<?php $this->view('footer.php'); ?>

	

<script>
	function delrec() {
  document.getElementById("add-row-form").reset();
}
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
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'index.php/Divisi/get_guest_json'?>", "type": "POST"},
                  columns: [
                        {"data": "id_divisi"},
                        {"data": "divisi"},
                        {"data": "view", "sortable":false},
                        // {"data": "view"},
                  ],
              order: [[1, 'asc']],
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
            var id=$(this).data('id_divisi');
            var Nama=$(this).data('divisi');
           
            // var akses=$(this).data("akses");
            $('#ModalUpdate').modal('show');
            $('[name="id"]').val(id);
            $('[name="Nama"]').val(Nama);
            
      });
      // End Edit Records
      // get Hapus Records
      $('#mytable').on('click','.hapus_record',function(){
            var id=$(this).data('id_divisi');
            $('#ModalHapus').modal('show');
            $('[name="Nomer"]').val(id);
      });
      // End Hapus Records

  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $("#add-row").click(function(e){
        e.preventDefault();
        var id_divisi = $("input[id='id_divisi']").val();
        var nama_divisi = $("input[id='Nama_divisi']").val();
       
        // var hak_akses =$("radio[id='Radio']").val();
          $.ajax({
              url: "<?php echo site_url() ?>/Divisi/simpan",
              type:'POST',
              dataType: "json",
              data: {Kode:id_divisi, Nama:nama_divisi}, 
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    $(".print-success-msg").css('display','block');
                    // alert(data.success);
                    $(".print-success-msg").html(data.success);
                    $(".print-error-msg").css('display','none');

                    location.replace("<?php echo site_url() ?>/Divisi");
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
        var id = $("input[id='del-divisi']").val();
          $.ajax({
              url: "<?php echo site_url() ?>/Divisi/delete",
              type:'POST',
              dataType: "json",
              data: {Nomer:id},
              success: function(data) {
                  if($.isEmptyObject(data.error)){
                    $(".print-success-msg").css('display','block');
                    // alert(data.success);
                    $(".print-success-msg").html(data.success);
                    $(".print-error-msg").css('display','none');

                    location.replace("<?php echo site_url() ?>/Divisi");
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