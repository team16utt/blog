<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<section class="content">
	<div class="container-fluid">
		<!-- SELECT2 EXAMPLE -->
		<div class="card card-default">
			<!-- <div class="card-header">
				<h3 class="card-title">Our Advices</h3>

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
												<th>Image</th>
												<th>Title</th>
												<th>Time</th>
												<th>Heading</th>
												<th style="width:80px;">Action</th>
											</tr>
										</thead>

										<tbody>
											<?php foreach ($Advice as $row) : ?>
												<tr class="obj-item">
													<td>
														<?= $row['id'] ?>
													</td>
													<td>
														<img style="width:200px;height=200px;" src="<?= $row['image'] ?>" alt="">
													</td>
													<td>
														<?= $row['title'] ?>
													</td>
													<td>
														<?= $row['time'] ?>
													</td>
													<td>
														<?= $row['heading'] ?>
													</td>

													<td>
														<div class="obj-action">
															<div class="ac">

																<a href="<?php echo base_url() . '/admin/profile?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
																<a href="<?php echo base_url() . '/admin/Advice/edit?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
																<a href="<?php echo base_url() . '/admin/Advice/delete?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure?');"><i class="far fa-trash-alt"></i></a>

															</div>

														</div>
													</td>
												</tr>
											<?php endforeach; ?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					<!-- </div>
				</div>
			</div> -->
		</div>
	</div>
</section>


<?= $this->endSection() ?>