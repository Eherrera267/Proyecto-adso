<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ventas Online | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">


<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
  
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Ventas Online</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

      <!-- Messages Dropdown Menu -->
      
      <!--Full Screen-->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>" class="brand-link">
      <img src="<?php echo $URL; ?>/public/images/cafe.png" alt="" class="brand-image img-square elevation-3" style="opacity: .6">
      <span class="brand-text font-weight-light">Ventas Online</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/public/template/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nombres; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item"> <!--quitar menu-open-->
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/usuarios/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/creacion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de usuarios</p>
                </a>
              </li>
            </ul>
          </li>

          <!--Productos-->
           <li class="nav-item"> <!--quito el menu open para que no quede abierto siempre-->
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-list"></i> <!-- fa-tachometer-alt" lo cambio por lo que está actualmente -->
                <p>
                  Productos <!--cambio el nombre a USUARIOS antes Starter pages-->
                  <i class="right fas fa-angle-leftfa"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/producto/index.php" class="nav-link"> <!--quito el active page para que no aparezca blanco en la página ppal 
                  y cambio el # por la ruta de usuarios-->
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de Productos</p> <!-- puedo cambiarlo por; Listado de Usuarios -->
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>../productos/creacion.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Creación de Productos</p> <!-- Puedo cambiarlo por : Creación de usuario-->
                  </a>
                </li>
              </ul>
            </li>





          <li class="nav-item">
          
            <a href="<?php echo $URL;?>/app/controladores/login/cerrar_sesion.php" class="nav-link" style="background-color:brown">
              <i class="nav-icon fas fa-door-closed"></i><!--cambio de icono-->
            
            
            
            <p>Cerrar sesion</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
