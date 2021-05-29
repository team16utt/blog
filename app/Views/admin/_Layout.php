<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Blog</title>

    <link href="<?= base_url() ?>/admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?= base_url() ?>/admin/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/admin/crm/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?= base_url() ?>/admin/crm/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- more CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/admin/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/admin/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/crm/dist/css/duongCustomStyle.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/assets/node_modules/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/crm/dist/css/duongCustomStyle.css">

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
                    <a href="https://www.facebook.com/l0seriam" class="nav-link">Contact</a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>/admin/home" class="brand-link">
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
                            <a href="<?= base_url() .'/Admin/profile?id='. $_SESSION['user']['id']?>" class="d-block">My Profile</a>
                        </div>
                    </div>
                <?php ?>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <!-- <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li> -->



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
                            <a href="#" class="nav-link active"><i class="fas fa-stream"></i><p> Timelines<i class="right fas fa-angle-left"></i></p></a>
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
                            <a href="#" class="nav-link active"><i class="fas fa-bell"></i><p> Advices<i class="right fas fa-angle-left"></i></p></a>
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
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <?= $this->renderSection('content_Admin') ?>




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

    <!-- jQuery -->
    <script src="<?= base_url() ?>/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)


        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>>



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
    <script src="<?= base_url() ?>/admin/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?= base_url() ?>/admin/assets/node_modules/popper/popper.min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url() ?>/admin/crm/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>/admin/crm/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>/admin/crm/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>/admin/crm/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?= base_url() ?>/admin/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?= base_url() ?>/admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>

    <!-- jQuery peity -->
    <script src="<?= base_url() ?>/admin/assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/node_modules/peity/jquery.peity.init.js"></script>


    <!--JS import file -->
    <script src="<?= base_url() ?>/admin/assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/node_modules/dff/dff.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/admin/assets/node_modules/dff/test.js" type="text/javascript"></script>
</body>

</html>