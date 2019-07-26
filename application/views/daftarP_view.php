<?php $this->view('template.php'); ?>
					<!-- start: page -->
					<header class="page-header">
						<h2>Request Aplication</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?php echo site_url() ?>/dashboard">
										<i class="fa fa-home"></i>
									</a>
								</li>	
								<li><span>Data Permintaan</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

						<section class="panel">
							<header class="panel-heading">						
								<h2 class="panel-title">Daftar permintaan</h2>
							</header>
							<div class="panel-body">
								<table id="example" class="display" style="width:100%">
							        <thead>
							            <tr>
							                <th></th>
							                <th>No. PSA</th>
							                <th>Nama User</th>
							                <th>No. Telepon</th>
							                <th>Divisi</th>
							                <th>Departemen</th>
							                <th>Nama Aplikasi</th>
							                <th>Tanggal Interview User</th>
							                <th>Tanggal Rencana Digunakan</th>
							                <th>Status</th>
							                <th>Aksi</th>

							            </tr>
							        </thead>
							    </table>
							</div>
						</section>
					<!-- end: page -->
				</section>
			</div>

			
		</section>
           <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="width: 70%">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="myModalLabel">UPDATE DIVISI</h4>
                     </div>
                     <div class="modal-body">
                         <?php $this->view('form_view.php'); ?>
                     </div>
                     <div class="modal-footer">
                     	<form action="<?php echo site_url('Form/printed') ?>" method="post">
				<input type="text" name="no_psa" style="display: none">
			<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-print"></i> PRINT</button>
			</form>
                     </div>
                  </div>
              </div>
           </div>
<?php $this->view('footer.php'); ?>
<script>
	/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="10" cellspacing="0" border="0" style="padding-left:50px;">'+
    	'<tr>'+
            '<td><b>Tanggal Onproses</b></td>'+
            '<td>'+d.tgl_onproses+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Tanggal Deploy</b></td>'+
            '<td>'+d.tgl_deploy+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>1. Permasalahan</b></td>'+
            '<td>'+d.permasalahan+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>2. Fungsi & Kegunaan</b></td>'+
            '<td>'+d.fungsi+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>3. Pengguna</b></td>'+
            '<td>'+d.pengguna+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td colspan="2"><b>4. Uraian & Alur Proses</b></td>'+
        '</tr>'+
        '<tr>'+
            '<td>\u00A0\u00A0\u00A0\u00A0<b>4.1. Inputing</b></td>'+
            '<td>'+d.input+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>\u00A0\u00A0\u00A0\u00A0<b>4.2. Proses-proses</b></td>'+
            '<td>'+d.proses+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>\u00A0\u00A0\u00A0\u00A0<b>4.3. Output</b></td>'+
            '<td>'+d.output+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>5. Kebutuhan Komputer & Peripheral</b></td>'+
            '<td>'+d.kebutuhan+'</td>'+
        '</tr>'+
    '</table>';
}
 
$(document).ready(function() {
	
    var table = $('#example').DataTable( {
    	"processing": true,
        "serverSide": true,
        "ajax": "<?php echo site_url('') ?>/daftarP/get_data",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "no_psa" },
            { "data": "nama_user" },
            { "data": "no_telp" },
            { "data": "divisi" },
            { "data": "departemen" },
            { "data": "nama_aplikasi" },
            { "data": "tgl_interview", defaultContent: ""},
            { "data": "tgl_digunakan" },
            { "data": "status" },
            { "data": "", "visible":true,"orderable":false, "searchable": false, "render": function (data, type, row) {
                  return '<a class="edit_record" data-no_psa="'+row.no_psa+'" data-nama_user="'+row.nama_user+'" data-no_telp="'+row.no_telp+'" data-divisi="'+row.divisi+'"data-departemen="'+row.departemen+'" data-nama_aplikasi="'+row.nama_aplikasi+'"data-tgl_interview="'+row.tgl_interview+'"data-tgl_digunakan="'+row.tgl_digunakan+'" data-status="'+row.status+'"  data-tgl_proses="'+row.tgl_onproses+'" data-tgl_deploy="'+row.tgl_deploy+'" data-permasalahan="'+row.permasalahan+'" data-fungsi="'+row.fungsi+'" data-pengguna="'+row.pengguna+'" data-input="'+row.input+'" data-proses="'+row.proses+'" data-output="'+row.output+'" data-kebutuhan="'+row.kebutuhan+'" href="javascript:void(0);" ><i style="font-size:20px" class="icon fa fa-edit"></i></a>'; }
        	}],
        	 "columnDefs" : [
		        { targets : [9],
		        	render : function (data, type, row) {
		            switch(data) {
		               case '1' : return '<span class="label label-warning">Waiting</span>'; break;
		               case '2' : return '<span class="label label-primary">On-Process</span>'; break;
		               case '3' : return '<span class="label label-info">In Trial</span>'; break;
		               case '4' : return '<span class="label label-success">Deployment</span>'; break;
		               default  : return 'N/A';
		            }
		          }
		        },
		        { targets : [7,8],
		        	render : function(data, type, row, meta){
		        		if (data == null || data=="Belum Diset" || data=="01 Jan 1970"){
	                          return '';
	                      }else{
		        		 	  return moment(data).format('DD MMM YYYY');
	                      }
		        		}
		        }
		          
		        
		   ],
        "order": [[0, 'asc']],
	} );

$('#example').on('click','.edit_record',function(){
        var no_psa=$(this).data("no_psa");
        var nama_user=$(this).data("nama_user");
        var no_telp=$(this).data('no_telp');
        var divisi=$(this).data('divisi');
        var departemen=$(this).data('departemen');
        var nama_aplikasi=$(this).data('nama_aplikasi');
        var tgl_interview=$(this).data('tgl_interview');
        var tgl_digunakan=$(this).data('tgl_digunakan');
        var status=$(this).data('status');
        var tgl_proses=$(this).data('tgl_proses');
        var tgl_deploy=$(this).data('tgl_deploy');
        var permasalahan=$(this).data('permasalahan');
        var fungsi=$(this).data('fungsi');
        var input=$(this).data('input');
        var pengguna=$(this).data('pengguna');
        var proses=$(this).data('proses');
        var output=$(this).data('output');
        var kebutuhan=$(this).data('kebutuhan');

        $('#ModalUpdate').modal('show');
        $('[name="no_psa"]').val(no_psa);
        $('[name="nama_user"]').val(nama_user);
        $('[name="no_telp"]').val(no_telp);
        $('[name="divisi"]').val(divisi);
        $('[name="departemen"]').val(departemen);
        $('[name="nama_aplikasi"]').val(nama_aplikasi);
        $('[name="tgl_interview"]').val(tgl_interview);
        $('[name="tgl_digunakan"]').val(tgl_digunakan);
        $('[name="tgl_proses"]').val(tgl_proses);
        $('[name="tgl_deploy"]').val(tgl_deploy);
        $('[name="permasalahan"]').text(permasalahan);
        $('[name="fungsi"]').text(fungsi);
        $('[name="input"]').text(input);
        $('[name="pengguna"]').text(pengguna);
        $('[name="proses"]').text(proses);
        $('[name="output"]').text(output);
        $('[name="kebutuhan"]').text(kebutuhan);
        if(status=="1"){
          $('input[id="optradio1"]').prop('checked',true);
        }else if(status=="2"){
          $('input[id="optradio2"]').prop('checked',true);
        }else if(status=="3"){
          $('input[id="optradio3"]').prop('checked',true);
        }else if(status=="4"){
          $('input[id="optradio4"]').prop('checked',true);
        };
      });


	var detailRows = [];
     
    // Add event listener for opening and closing details
    $('#example tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    table.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );
} );
</script>