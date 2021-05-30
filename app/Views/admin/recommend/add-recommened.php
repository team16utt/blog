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
							<label for="exampleInputEmail1">Link Image</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter link">
						</div>
					</div>
				</form>
				<!-- /.card-header -->
				<div class="card-body">
				<label for="exampleInputEmail1">Content</label>
					<textarea style="width: 100%; height: 500px" id="summernote">
              Place <em>some</em> <u>text</u> <strong>here</strong>
            </textarea>
			<input type="datetime-local" name="" />
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>

			</div>
		</div>
		<!-- /.col-->
	</div>
	<!-- ./row -->
</section>

<?= $this->endSection() ?>