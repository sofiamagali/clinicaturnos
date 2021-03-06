<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Turnos</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->


            

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <div class="dropdown-divider"></div>
                <a href="#"  >

                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="img/user.png" class="user-image img-circle elevation-2" alt="User Image">
                            <span href="perfil.php" class="d-none d-md-inline"><?php echo $_SESSION['nombreyapellido']; ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                <img href="perfil.php" src="img/user.png" class="img-circle elevation-2" alt="User Image">

                                <p>
                                <?php echo $_SESSION['nombreyapellido']; ?>

                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="perfil.php" class="btn btn-default btn-flat">Perfil</a>
                        <a href="index.php" class="btn btn-default btn-flat float-right">Cerrar Sesion</a>
                    </li>
                    </ul>
                    </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="turnos.php" class="brand-link">
                <img src="img/logo-chico.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">ClinicaSaludPrimera</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src=img/user.png class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['nombreyapellido']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



                        <li class="nav-item has-treeview">
                            <a href="turnos.php" class="nav-link">
                                <i class="nav-icon fas fa-notes-medical"></i>
                                <p>
                                    Mis turnos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="profesionales.php" class="nav-link">
                                <i class="nav-icon fas fa-laptop-medical"></i>
                                <p>
                                    Nuestros Profesionales
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="contacto.php" class="nav-link">
                                <i class="nav-icon fas fa-briefcase-medical"></i>
                                <p>
                                    Contacto
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="index2.php" class="nav-link">
                                <i class="nav-icon fas fa-hospital"></i>
                                <p>
                                    Clinica Salud
                                </p>
                            </a>
                        </li>




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
                            <h1>Turnos</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active">Turnos medicos </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>