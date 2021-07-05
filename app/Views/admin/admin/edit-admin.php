<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<?php if ($msg == "fail") : ?>
	<?php
	header('Refresh:1;URL=http://localhost:8080/blog/public/admin/Admin');
	exit();
	?>
<?php endif; ?>
<section class="content">
	<div class="container-fluid">
		<!-- SELECT2 EXAMPLE -->
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Basic Information</h3>

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
										<label class="col-md-12" for="username">User Name</span>
										</label>
										<div class="col-md-12">
											<input type="text" id="username" name="username" class="form-control" placeholder="enter your username" readonly="readonly" value="<?= $user['username'] ?>">
										</div>
									</div>


									<div class="form-group">
										<label class="col-md-12" for="fullname">Full Name</span>
										</label>
										<div class="col-md-12">
											<input type="text" id="fullname" name="fullname" class="form-control" placeholder="enter your full name" readonly="readonly" value="<?= $user['fullname'] ?>">

										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12" for="bdate">Date of Birth</span>
										</label>
										<div class="col-md-12">
											<input type="date" id="bdate" name="birthday" class="form-control mydatepicker" placeholder="enter your birth date" value="<?= $user['birthday'] ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-12" for="email">Email</span>
										</label>
										<div class="col-md-12">
											<input type="email" id="email" name="email" class="form-control" placeholder="enter your email" value="<?= $user['email'] ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12" for="phone">Phone</span>
										</label>
										<div class="col-md-12">
											<input type="number" maxlength="11" id="phone" name="phone" class="form-control" placeholder="enter your phone" value="<?= $user['phone_number'] ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12" for="address">Address</span>
										</label>
										<div class="col-md-12">
											<input type="text" id="address" name="address" class="form-control" placeholder="enter your address"  value="<?= $user['address'] ?>">

										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12" for="phone">Avatar</span>
										</label>
										<div class="col-md-12">
											<label for="input-file-now">Choose a image</label>
											<input type="file" id="input-file-now" name="file" class="dropify">
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
</section>

<?= $this->endSection() ?>