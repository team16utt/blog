<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>


<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="<?= base_url() ?>/admin/Policy/add" enctype="multipart/form-data" method='POST'>
				<div class="card card-outline card-info">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tittle</label>
							<input type="text" class="form-control" id="title" name="title" placeholder="Enter tittle">
						</div>
						<div class="form-group">
							<label for="heading">Heading</label>
							<input type="text" class="form-control" id="heading" name="heading" placeholder="Enter tittle">
						</div>
						<div class="form-group">
							<label for="source">Source</label>
							<input type="text" class="form-control" id="source" name="source" placeholder="Enter tittle">
						</div>
						<div class="form-group">
							<label for="province">Province</label>
							<input type="text" class="form-control" id="province" name="province" placeholder="Enter tittle">
						</div>
						<label for="exampleInputEmail1">Content</label>
						<textarea style="width: 100%; height: 500px" id="summernote" name="summernote"></textarea>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="button" class="btn btn-inverse waves-effect waves-light"><a href="<?= base_url() ?>/admin/Policy">Cancel</a></button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- /.col-->
	</div>
	<!-- ./row -->
</section>

<?= $this->endSection() ?>