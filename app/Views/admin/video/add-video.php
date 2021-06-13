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
					<form action="<?= base_url() ?>/admin/Videos/add"enctype="multipart/form-data" method='POST'>
						<div class="card-body">
							<div class="form-group">
								<label for="title">Tittle</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="Enter tittle">
							</div>
							<div class="form-group">
								<label for="heading">Heading</label>
								<input type="text" class="form-control" id="heading" name="heading" placeholder="Enter heading">
							</div>
							<div class="form-group">
								<label for="content">Content</label>
								<input type="text" class="form-control" id="content" name="content" placeholder="Enter content">
							</div>
							<div class="form-group">
								<label for="content">Poster</label>
								<input type="text" class="form-control" id="poster" name="poster" placeholder="Enter content">
							</div>
							<div class="form-group">
								<label for="video">Video</label>
								<input type="text" class="form-control" id="video" name="video" placeholder="Enter link video">
							</div>
							
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="button" class="btn btn-inverse waves-effect waves-light"><a href="<?= base_url()?>/admin/Videos">Cancel</a></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<?= $this->endSection() ?>