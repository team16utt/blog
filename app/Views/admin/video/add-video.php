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
								<label for="title">Tittle</label>
								<input type="text" class="form-control" id="title" placeholder="Enter tittle">
							</div>
							<div class="form-group">
								<label for="heading">Heading</label>
								<input type="text" class="form-control" id="heading" placeholder="Enter heading">
							</div>
							<div class="form-group">
								<label for="content">Content</label>
								<input type="text" class="form-control" id="content" placeholder="Enter content">
							</div>
							<div class="form-group">
								<label for="video">Video</label>
								<input type="text" class="form-control" id="video" placeholder="Enter link video">
								<!-- <div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="file">
										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
									</div>
								</div> -->
							</div>
							<!-- <input type="datetime-local" name="" /> -->
							
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="button" class="btn btn-inverse waves-effect waves-light"><a href="<?= base_url()?>/admin/News">Cancel</a></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<?= $this->endSection() ?>