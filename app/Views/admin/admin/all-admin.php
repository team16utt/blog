<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- Content Wrapper. Contains page content -->
<section class="content">
	<div class="container-fluid">
		<div class="card-body">

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table id="example23" class="table table-striped">
									<?php

									?>
									<thead>
										<tr>
											<th>No</th>
											<th>Username</th>
											<th>Fullname</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
										<?php foreach ($admin as $row) : ?>
											<tr class="obj-item">
												<td>
													<?= $row['id'] ?>
												</td>
												<td>
													<?= $row['username'] ?>
												</td>
												<td>
													<?= $row['fullname'] ?>
												</td>
												<td>
													<?= $row['email'] ?>
												</td>
												<td>
													<?= $row['phone_number'] ?>
												</td>
												<td>
													<div class="obj-action">
														<div class="ac">
															<a href="#" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
															<a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
															<a href="#" data-toggle="tooltip" data-placement="bottom" onclick="return confirm('Are you sure?');" id="sa-confirm" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
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
				</div>
			</div>
		</div>

	</div>
</section>
<?= $this->endSection() ?>