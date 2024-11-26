<?php

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
  header("location: " . base_url('admin123'));
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://vanscdn.securityhub.id/klien_diet_kuy/css/css1.css">
  <link rel="stylesheet" href="https://vanscdn.securityhub.id/klien_diet_kuy/css/css2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="apple-touch-icon" sizes="180x180" href="#" />
  <link rel="icon" type="image/png" sizes="32x32" href="#" />
  <link rel="icon" type="image/png" sizes="16x16" href="#" />

  <style>
    .table tr td {
      width: 20px;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a href="<?= base_url('logout') ?>" class="nav-link text-danger"><i class="fas fa-sign-out-alt"></i>&nbsp;Keluar</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-dark elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('dashboard') ?>" class="brand-link">
        <!-- <img src="../assets/img/be/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">&ensp;ADMIN | Diet Kuy</span>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://vanscdn.securityhub.id/klien_diet_kuy/gbr/user.png" class="img-circle elevation-2"
              alt="User Image">
          </div>
          <div class="info">
            <a href="<?= base_url('dashboard') ?>" class="d-block">
              <?= $username ?>
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu">
              <a href="<?= base_url('dashboard') ?>" class="nav-link">
                <i></i>
                <p>
                  <i class='fa fa-home'></i>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('produk') ?>" class="nav-link">
                <p>
                  <i class='fas fa-newspaper'></i>
                  Produk
                </p>
              </a>
            </li>


            <li class="nav-item menu">
              <a href="<?= base_url('akun') ?>" class="nav-link">
                <i></i>
                <p>
                  <i class='fa fa-users'></i>
                  User Login
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('pengaturan').'/'.$username ?>" class="nav-link">
                <i></i>
                <p>
                  <i class='fa fa-user'></i>
                  Akun
                </p>
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/js1.js"></script>
      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/js2.js"></script>
      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/js3.js"></script>
      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/adminlte.js"></script>
      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/bootstrap.bundle.min.js"></script>
      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/bs-custom-file-input.min.js"></script>
      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/Chart.min.js"></script>
      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/dashboard3.js"></script>
      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/demo.js"></script>
      <script src="https://vanscdn.securityhub.id/klien_diet_kuy/js/jquery.min.js"></script>


      <?= $this->renderSection('content') ?>