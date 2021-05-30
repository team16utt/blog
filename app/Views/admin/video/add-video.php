<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="card card-primary">
					
					<!-- /.card-header -->
					<!-- form start -->
					<form>
						<div class="card-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Tittle</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter tittle">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Heading</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter heading">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Content</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter content">
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Video</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="exampleInputFile">
										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
									</div>
									<div class="input-group-append">
										<span class="input-group-text">Upload</span>
									</div>
								</div>
							</div>
							<input type="datetime-local" name="" />
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<?= $this->endSection() ?>