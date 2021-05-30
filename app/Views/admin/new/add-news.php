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
				<!-- /.card-header -->
				<div class="card-body">
					<textarea style="width: 100%; height: 500px" id="summernote">
              Place <em>some</em> <u>text</u> <strong>here</strong>
            </textarea>

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