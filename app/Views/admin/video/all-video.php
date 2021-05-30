<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>


<section class="content">
	<div class="container-fluid">
		<!-- SELECT2 EXAMPLE -->
		<div class="card card-default">
			<!-- <div class="card-header">
				<h3 class="card-title">Our Video</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div> -->
			<!-- /.card-header -->
			<!-- <div class="card-body"> -->
				<div class="row">
					<!-- <div class="col-12">
						<div class="card"> -->
							<div class="card-body">
								<div class="table-responsive">
									<table id="example23" class="table table-striped">
										<?php

										?>
										<thead>
											<tr style="text-align: center;">
												<th>No</th>
												<th>Title</th>
												<th>Time</th>
												<th>Video</th>
												<th>Heading</th>
												<th style="width:80px;">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($Videos as $row) : ?>
												<tr class="obj-item">
													<td>
														<?= $row['id'] ?>
													</td>
													<td>
														<?= $row['title'] ?>
													</td>
													<td>
														<?= $row['time'] ?>
													</td>
													<td>
														<video style="width:300px; height:200px" controls preload="true">
															<source src="<?= $row['video'] ?>">
														</video>
													</td>
													<td>
														<?= $row['heading'] ?>
													</td>

													<td>
														<div class="obj-action">
															<div class="ac">
																<a href="#" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
																<a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
																<a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure?');"><i class="far fa-trash-alt"></i></a>
															</div>

														</div>
													</td>
												</tr>
											<?php endforeach; ?>

										</tbody>
									</table>
								</div>
							</div>
						<!-- </div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>