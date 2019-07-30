<?php $this->view('template.php'); ?>
					<!-- start: page -->
					<header class="page-header">
						<h2>Dasboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<div class="col-md-12 col-lg-6 col-xl-6">
						<section class="panel panel-featured-left panel-featured-warning">
							<div class="panel-body">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon bg-warning">
											<i class="fa fa-clock-o"></i>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary">
											<h4 class="title">Status Project Waiting</h4>
											<div class="warning">
												<strong class="amount"><?php echo $waiting ?></strong>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-md-12 col-lg-6 col-xl-6">
						<section class="panel panel-featured-left panel-featured-primary">
							<div class="panel-body">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon bg-primary">
											<i class="fa fa-cogs"></i>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary">
											<h4 class="title">Status Project On-Progress</h4>
											<div class="info">
												<strong class="amount"><?php echo $proses ?></strong>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-md-12 col-lg-6 col-xl-6">
						<section class="panel panel-featured-left panel-featured-info">
							<div class="panel-body">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon bg-info">
											<i class="fa fa-bug"></i>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary">
											<h4 class="title">Status Project Testing</h4>
											<div class="info">
												<strong class="amount"><?php echo $trial ?></strong>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-md-12 col-lg-6 col-xl-6">
						<section class="panel panel-featured-left panel-featured-success">
							<div class="panel-body">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon bg-success">
											<i class="fa fa-check"></i>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary">
											<h4 class="title">Status Project Deploy</h4>
											<div class="info">
												<strong class="amount"><?php echo $deploy ?></strong>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>

					<div class="col-lg-12 col-md-12">
					<section class="panel  panel-primary">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								<a href="#" class="fa fa-times"></a>
							</div>

							<h2 class="panel-title">Projects Stats</h2>
						</header>
						<div class="panel-body">
								<table id="example" class="display" >
									<thead>
										<tr>
											<th>No. PSA</th>
											<th>Project</th>
											<th>Status</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</tfoot>
								</table>
							</div>
					</section>
				</div>
					<!-- end: page -->
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
$(document).ready(function() {
	var table = $('#example').DataTable( {
    	"processing": true,
        "serverSide": true,
         "ordering": false,
         "paging": true,
         "searching":false,
         "scrollX":false,
         "lengthChange":true,
         "autoWidth": false,
        "ajax": "<?php echo site_url('') ?>/daftarP/get_data",
        "columns": [
            { "data": "no_psa", "width":"30px"},
            { "data": "nama_aplikasi" },
            { "data": "status", "width":"100px" },
            ],
        "columnDefs" : [
		        { targets : [2],
		          render : function (data, type, row) {
		            switch(data) {
		               case '1' : return '<span class="label label-warning">Waiting</span>'; break;
		               case '2' : return '<span class="label label-primary">On-Process</span>'; break;
		               case '3' : return '<span class="label label-info">In Trial</span>'; break;
		               case '4' : return '<span class="label label-success">Deployment</span>'; break;
		               default  : return 'N/A';
		            }
		          }
		        }
		   ],
        "order": [[1, 'asc']],
	} );
});
</script>