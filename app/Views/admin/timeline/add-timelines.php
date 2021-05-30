<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>


<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-outline card-info">
				<div class="card-header">
					<h3 class="card-title">
						Summernote
					</h3>
				</div>
				<form action="<?= base_url() ?>/admin/Timelines/add"enctype="multipart/form-data" method='POST'>
					<div class="card-body">
						<div class="form-group">
							<label for="title">Tittle</label>
							<input type="text" class="form-control" id="title" name="title" placeholder="Enter tittle">
						</div>
					</div>
					<div class="card-body">
						<label for="exampleInputEmail1">Content</label>
						<textarea style="width: 100%; height: 500px" id="summernote" name="summernote">
						</textarea>
						<!-- <input type="datetime-local" name="" /> -->
						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="button" class="btn btn-inverse waves-effect waves-light"><a href="<?= base_url() ?>/admin/News">Cancel</a></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /.col-->
	</div>
	<!-- ./row -->
</section>

<?= $this->endSection() ?>