<?php $this->view('template.php'); ?>
					<!-- start: page -->
					<header class="page-header">
						<h2>Request Aplication</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
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
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
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

							            </tr>
							        </thead>
							        <tfoot>
							            <tr>
							                <th></th>
							                <th>No. PSA</th>
							                <th>Nama User</th>
							                <th>No. Telepon</th>
							                <th>Divisi</th>
							                <th>Departemen</th>
							                <th>Nama Aplikasi</th>
							                <th>Tanggal Interview User</th>
							                <th>Status</th>
							            </tr>
							        </tfoot>
							    </table>
							</div>
						</section>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>
<?php $this->view('footer.php'); ?>
<script>
	/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="10" cellspacing="0" border="0" style="padding-left:50px;">'+
    	'<tr>'+
            '<td>Tanggal Onproses</td>'+
            '<td>'+d.tgl_onproses+'f</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Tanggal Deploy</td>'+
            '<td>'+d.tgl_deploy+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>1. Permasalahan</td>'+
            '<td>'+d.permasalahan+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>2. Fungsi & Kegunaan:</td>'+
            '<td>'+d.fungsi+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>3. Pengguna:</td>'+
            '<td>'+d.pengguna+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td colspan="2">4. Uraian & Alur Proses</td>'+
        '</tr>'+
        '<tr>'+
            '<td>\u00A04.1. Inputing:</td>'+
            '<td>'+d.input+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>\u00A04.2. Proses-proses:</td>'+
            '<td>'+d.proses+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>\u00A04.3. Output:</td>'+
            '<td>'+d.output+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>5. Kebutuhan Komputer & Peripheral:</td>'+
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
            { "data": "tgl_interview" },
            { "data": "tgl_digunakan" },
            { "data": "status" }
        ],
        "order": [[1, 'asc']],
	} );
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