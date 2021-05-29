<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Blog</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>/admin/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<!-- <div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?= base_url() ?>/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
		</div> -->

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url() ?>/admin/home" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="https://www.facebook.com/l0seriam" class="nav-link">Contact</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url() ?>/admin/Home" class="brand-link">
				<img src="<?= base_url() ?>/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Admin Blog</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url() ?>/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Alexander Pierce</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item menu-open">
							<a href="<?= base_url() ?>/admin/Home" class="nav-link active">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>


						<li class="nav-item menu-open">
							<a href="#" class="nav-link active">
								<class class="fas fa-user"></class></i>
								<p>
									Admin
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul style="margin-left:20px" class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Admin/index" class="nav-link active">
										<!-- <i class="fas fa-users"></i> -->
										<p>All Admin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Admin/add" class="nav-link">
										<!-- <i class="fas fa-user-plus"></i> -->
										<p>Add Admin</p>
									</a>
								</li>

							</ul>
						</li>



						<li class="nav-item menu-open">
							<a href="#" class="nav-link active">
								<i class="fas fa-newspaper"></i>
								<p>
									News
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul style="margin-left:20px" class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/News" class="nav-link active">
										<!-- <i class="far fa-newspaper"></i> -->
										<p>All News</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/News/add" class="nav-link">
										<!-- <i class="fas fa-folder-plus"></i> -->
										<p>Add News</p>
									</a>
								</li>

							</ul>
						</li>

						<li class="nav-item menu-open">
							<a href="#" class="nav-link active">
								<i class="fas fa-video"></i>
								<p>
									Videos
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul style="margin-left:20px" class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Videos" class="nav-link active">
										<!-- <i class="far fa-newspaper"></i> -->
										<p>All Video</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Videos/add" class="nav-link">
										<!-- <i class="fas fa-folder-plus"></i> -->
										<p>Add Video</p>
									</a>
								</li>

							</ul>
						</li>

						<li class="nav-item menu-open">
							<a href="#" class="nav-link active">
								<i class="fas fa-stream"></i>
								<p>
									Timelines
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul style="margin-left:20px" class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Timelines" class="nav-link active">
										<!-- <i class="far fa-newspaper"></i> -->
										<p>All Timeline</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Timelines/add" class="nav-link">
										<!-- <i class="fas fa-folder-plus"></i> -->
										<p>Add Timeline</p>
									</a>
								</li>

							</ul>
						</li>

						<li class="nav-item menu-open">
							<a href="#" class="nav-link active">
								<i class="fas fa-bell"></i>
								<p>
									Advices
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul style="margin-left:20px" class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Advice" class="nav-link active">
										<!-- <i class="far fa-newspaper"></i> -->
										<p>All Advice</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Advice/add" class="nav-link">
										<!-- <i class="fas fa-folder-plus"></i> -->
										<p>Add Advice</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item menu-open">
							<a href="#" class="nav-link active">
								<i class="fas fa-thumbs-up"></i>
								<p>
									Recommends
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul style="margin-left:20px" class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Recommend" class="nav-link active">
										<!-- <i class="far fa-newspaper"></i> -->
										<p>All Recommend</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url() ?>/admin/Recommend/add" class="nav-link">
										<!-- <i class="fas fa-folder-plus"></i> -->
										<p>Add Recommend</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

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
													<label class="col-md-12" for="example-text">User Name</span>
													</label>
													<div class="col-md-12">
														<input type="text" id="example-text" name="username" class="form-control" placeholder="enter your username">
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
													<label class="col-md-12" for="fName">Full Name</span>
													</label>
													<div class="col-md-12">
														<input type="text" id="fName" name="fullname" class="form-control" placeholder="enter your full name">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-12" for="bdate">Date of Birth</span>
													</label>
													<div class="col-md-12">
														<input type="date" id="bdate" name="birthday" class="form-control mydatepicker" placeholder="enter your birth date">
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

						<!-- /.content-wrapper -->
						<footer class="main-footer" style="position: relative; bottom: 0">
							<strong>Copyright &copy; 2021 <a href="https://facebook.com/datbeu28">Nhom 4</a>.</strong>
							All rights reserved.

						</footer>

						<!-- Control Sidebar -->
						<aside class="control-sidebar control-sidebar-dark">
							<!-- Control sidebar content goes here -->
						</aside>
						<!-- /.control-sidebar -->
					</div>
					<!-- ./wrapper -->
				</div>
			</section>
		</div>
	</div>
	<!-- jQuery -->
	<script src="<?= base_url() ?>/admin/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?= base_url() ?>/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?= base_url() ?>/admin/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?= base_url() ?>/admin/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?= base_url() ?>/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url() ?>/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?= base_url() ?>/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?= base_url() ?>/admin/plugins/moment/moment.min.js"></script>
	<script src="<?= base_url() ?>/admin/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?= base_url() ?>/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="<?= base_url() ?>/admin/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?= base_url() ?>/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>/admin/dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url() ?>/admin/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?= base_url() ?>/admin/dist/js/pages/dashboard.js"></script>
</body>

</html>