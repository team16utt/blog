<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h3>Add Admin Form</h3>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>/admin/Home">Home</a></li>
						<li class="breadcrumb-item active">Add Admin</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<!-- SELECT2 EXAMPLE -->
			<div class="card card-default">
				<div class="card-header">
					<h3 class="card-title">Basic Information</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove">
							<i class="fas fa-times"></i>
						</button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form action="<?php echo base_url() . '/admin/admin/add' ?>" class="form-material form-horizontal m-t-30" enctype="multipart/form-data" method='POST'>
										<div class="form-group">
											<label class="col-md-12" for="username">User Name</span>
											</label>
											<div class="col-md-12">
												<input type="text" id="username" name="username" class="form-control" placeholder="enter your username">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12" for="password">Password</span>
											</label>
											<div class="col-md-12">
												<input type="password" id="password" name="password" class="form-control" placeholder="enter your password">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12" for="fullname">Full Name</span>
											</label>
											<div class="col-md-12">
												<input type="text" id="fullname" name="fullname" class="form-control" placeholder="enter your full name">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12" for="birthday">Date of Birth</span>
											</label>
											<div class="col-md-12">
												<input type="date" id="birthday" name="birthday" class="form-control mydatepicker" placeholder="enter your birth date">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-12" for="email">Email</span>
											</label>
											<div class="col-md-12">
												<input type="email" id="email" name="email" class="form-control" placeholder="enter your email">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12" for="phone">Phone</span>
											</label>
											<div class="col-md-12">
												<input type="number" maxlength="11" id="phone" name="phone" class="form-control" placeholder="enter your phone">
											</div>
										</div>


										<button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
										<button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?= $this->endSection() ?>