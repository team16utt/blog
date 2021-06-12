<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title?></title>

    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/admin/plugins/style.min.css" rel="stylesheet">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url() ?>/admin/Home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://www.facebook.com/Thifnmi" class="nav-link">Contact</a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>/admin/home" class="brand-link">
                <img src="<?= base_url() ?>/admin/dist/img/SARS_CoV_2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Blog NCOV</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="scroll-sidebar">
                    <div class="user-profile">
                        <div class="user-pro-body">
                            <div>
                                <img src="<?= $_SESSION['user']['image'] ?>" class="img-circle" alt="User Image">
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['user']['fullname'] ?><span class="caret"></span></a>
                                <div class="dropdown-menu animated flipInY">
                                    <!-- text-->
                                    <a href="<?php echo base_url() . '/admin/profile?id=' . $_SESSION['user']['id']; ?>" class="dropdown-item"><i class="ti-user"></i> My
                                        Profile</a>
                                    <!-- text-->
                                    <a href="<?= base_url() ?>/admin/logout" class="dropdown-item"><i class="fas fa-power-off"></i>
                                        Logout</a>
                                    <!-- text-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item ">
                                <a href="#" class="nav-link active" aria-expanded="false">
                                    <class class="fas fa-user"></class></i>
                                    <p> Admin
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul style="margin-left:20px" class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>/admin/Admin" class="nav-link active">
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
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="fas fa-newspaper"></i>
                                    <p> News
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

                            <li class="nav-item ">
                                <a href="#" class="nav-link active">
                                    <i class="fas fa-video"></i>
                                    <p> Videos
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

                            <li class="nav-item ">
                                <a href="#" class="nav-link active"><i class="fas fa-stream"></i>
                                    <p> Timelines<i class="right fas fa-angle-left"></i></p>
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

                            <li class="nav-item ">
                                <a href="#" class="nav-link active"><i class="fas fa-bell"></i>
                                    <p> Advices<i class="right fas fa-angle-left"></i></p>
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

                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="fas fa-thumbs-up"></i>
                                    <p> Recommends
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
                            <li class="nav-item ">
                                <a href="#" class="nav-link active" aria-expanded="false">
                                    <class class="fas fa-user"></class></i>
                                    <p> Direction
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul style="margin-left:20px" class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>/admin/Direction" class="nav-link active">
                                            <!-- <i class="fas fa-users"></i> -->
                                            <p>All Direction</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>/admin/Direction/add" class="nav-link">
                                            <!-- <i class="fas fa-user-plus"></i> -->
                                            <p>Add Direction</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item ">
                                <a href="#" class="nav-link active" aria-expanded="false">
                                    <class class="fas fa-user"></class></i>
                                    <p> Policy
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul style="margin-left:20px" class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>/admin/Policy" class="nav-link active">
                                            <!-- <i class="fas fa-users"></i> -->
                                            <p>All Policy</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>/admin/Policy/add" class="nav-link">
                                            <!-- <i class="fas fa-user-plus"></i> -->
                                            <p>Add Policy</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
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
                            <h3><?= $title ?></h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/admin/home">Home</a></li>
                                <li class="breadcrumb-item active"><?= $title ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <?= $this->renderSection('content_Admin') ?>



        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="https://facebook.com/Thifnmi">Thiện và 4 con vợ</a>.</strong>All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>>




    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

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
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            // CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            //     mode: "htmlmixed",
            //     theme: "monokai"
            // });
        })
    </script>
</body>

</html>