<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-outline card-info">
				<div class="card-header">
					<!-- <div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove">
						<i class="fas fa-times"></i>
					</button>
				</div> -->
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form action="#" class="form-material form-horizontal m-t-30" enctype="multipart/form-data" method='POST'>
										<div class="form-group">
											<label class="col-md-12" for="title">Title</label>
											<div class="col-md-12">
												<input type="text" id="title" name="title" class="form-control"  value="<?= $Recommend['title'] ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12" for="title">Image</label>
											<div class="col-md-12">
												<input type="text" id="image" name="image" class="form-control"  value="<?= $Recommend['image'] ?>">
												<img src="<?= $Recommend['image'] ?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12" for="heading">Heading </label>
											<div class="col-md-12">
												<textarea type="text" id="heading" name="heading" class="form-control" placeholder="enter your full name"  ><?= $Recommend['heading']?>
											</textarea>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-12" for="summernote">Content</label>
											<div class="col-md-12">
												<textarea type="text" id="summernote" name="summernote" class="form-control" placeholder="enter your full name"  ><?= $Recommend['content']?>
											</textarea>
											</div>
										</div>

										<button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
										<button type="button" onclick="window.history.back();" class="btn btn-inverse waves-effect waves-light">Cancel</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?= $this->endSection() ?>