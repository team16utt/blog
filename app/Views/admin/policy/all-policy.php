<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>


<section class="content">
	<div class="container-fluid">
		<!-- SELECT2 EXAMPLE -->
		<div class="card card-default">
				<div class="row">
							<div class="card-body">
								<div class="table-responsive">
									<table id="example23" class="table table-striped">
										<thead>
											<tr style="text-align: center;">
												<th>No</th>
												<th>Time</th>
												<th>Title</th>
												<th>Heading</th>
												<th>Content</th>
                                                <th>Province</th>
												<th style="width:80px">Action</th>
											</tr>
										</thead>

										<tbody>
											<?php foreach ($Policy as $row) : ?>
												<tr class="obj-item">
													<td>
														<?= $row['id'] ?>
													</td>
													<td>
														<?= $row['time'] ?>
													</td>
													<td>
														<?= $row['title'] ?>
													</td>
													<td>
														<?= $row['heading'] ?>
													</td>
													<td>
														<?= $row['content'] ?>
													</td>
                                                    <td>
														<?= $row['province-city'] ?>
													</td>
													<td>
														<div class="obj-action">
															<div class="ac">
																<a href="<?php echo base_url() . '/admin/Policy/edit?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
																<a href="<?php echo base_url() . '/admin/Policy/delete?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure?');"><i class="far fa-trash-alt"></i></a>

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