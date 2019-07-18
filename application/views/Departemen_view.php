<?php $this->view('template.php'); ?>

	

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Table</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									
										 <div class="card-body card-block">
          						<button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd" onclick="delrec()">Tambah Departemen</button>
          					</div>
          					<br>
          							<thead>
										<tr>
											<th>Kode Departemen</th>
											<th>Nama Departemen</th>
											<th>Aksi</th>
											
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
												<td class="actions">
															<a href=""><i class="fa fa-pencil"></i></a>
															<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
											</td>
											
							</div>
						</section>
						
			
						</div>
					</div>
				</div>
			</aside>
		</section>

	<?php $this->view('footer.php'); ?>

	</body>
