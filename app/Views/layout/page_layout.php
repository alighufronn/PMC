<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->renderSection('title') ?></title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="<?php echo('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') ?>">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/fontawesome-free/css/all.min.css') ?>">
   <!-- daterange picker -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/daterangepicker/daterangepicker.css') ?>">
   <!-- iCheck for checkboxes and radio inputs -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
   <!-- Bootstrap Color Picker -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
   <!-- Select2 -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/select2/css/select2.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/dist/css/adminlte.min.css') ?>">
   <!-- Bootstrap4 Duallistbox -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') ?>">
   <!-- BS Stepper -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/bs-stepper/css/bs-stepper.min.css') ?>">
   <!-- dropzonejs -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/dropzone/min/dropzone.min.css') ?>">
  <!-- SweetAlert2 -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
   <!-- Toastr -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/toastr/toastr.min.css') ?>">
   <!-- Theme style -->
   <!-- Multiselect style -->
   <!-- DataTables -->
    <script src="<?php echo('https://code.jquery.com/jquery-3.7.0.min.js')?>"></script> 
   <link rel="stylesheet" href="<?php echo('https://cdn.datatables.net/2.1.5/css/dataTables.jqueryui.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.css')?>">
    <link rel="stylesheet" href="<?= base_url('AdminLTE/plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css')?>">
   <!-- Bootstrap -->
   <script src="<?php echo('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')?>"></script>
  
  <style>                   
    /* Catatan */
    #chat-container {
        z-index: 4000;
        position: fixed;
        bottom: 60px;
        right: 20px;
        width: 300px;
        height: 400px;
        display: none;
    }
  </style>
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url('AdminLTE/dist/img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
  </div> -->

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
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard') ?>" class="brand-link">
      <img src="<?= base_url ('AdminLTE/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('AdminLTE/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander the Great</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <!-- Dashboard -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('dashboard') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('dashboard-monitoring') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Dashboard (Monitoring)</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>
          
          <!-- HSE -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                HSE
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('izin-kerja') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Izin Kerja</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('rap-hse-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>RAP HSE Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('rap-hse-tambah-rev') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>RAP HSE Tambah (rev)</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('rap-hse-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>RAP HSE Edit</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- Engineering -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                Engineering
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('approval-material') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Approval Material</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('drawing') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Drawing</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('detail-drawing') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Detail Drawing</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- Laporan Pekerjaan -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                Laporan Pekerjaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('terpasang-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Tambah Laporan Pekerjaan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('terpasang-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Edit Laporan Pekerjaan</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- PO & DO -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                PO & DO
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('po-total') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Total PO</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('po-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>PO Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('po-detail') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>PO Detail</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('do-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>DO Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('do-detail') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>DO Detail</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- BPB -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                BPB
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('bpb-stock') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BPB Stock</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bpb-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BPB Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bpb-nonrap') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BPB NonRAP</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bpb-detail') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BPB Detail</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- Master -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('mastermaterial-stock') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Material Gudang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('groupmaterial-stock') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Group Material Stock</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- BPD -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                BPD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('bpd-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BPD Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bpd-detail') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BPD Detail</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- RAP -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                RAP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('rap-detail') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>RAP Detail</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('rap-tambah-ak') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>RAP Tambah Alat Kerja</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('rap-tambah-ak-rev') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>RAP Tambah Alat Kerja (rev)</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('rap-edit-ak') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>RAP Edit Alat Kerja</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- BBM -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                BBM
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('bbm-beli-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBM Beli Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbm-beli-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBM Beli Edit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbm-po-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBM PO Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbm-po-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBM PO Edit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbm-ll-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBM LL Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbm-ll-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBM LL Edit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbm-ti-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBM TI Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbm-ti-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBM TI Edit</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- BBK -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                BBK
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('bbk-sub-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBK Sub Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbk-to-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBK TO Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbk-po-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBK PO Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbk-ll-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBK LL Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbk-sub-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBK Sub Edit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbk-to-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBK TO Edit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbk-po-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBK PO Edit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbk-ll-edit') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBK LL Edit</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <!-- Workshop -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                Workshop
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <div class="container">
                <li class="nav-item">
                  <a href="<?= base_url('bbm-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBM Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('bbk-tambah') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>BBK Tambah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('stock-material') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Stock</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('laporan-pemakaian-seng') ?>" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>Laporan Pemakaian Seng (tambah)</p>
                  </a>
                </li>
              </div>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('ba-ins-edit') ?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>Edit BA Instalasi</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('modules') ?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>Modules</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('bpak-edit') ?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>BPAK (Edit)</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('bpas-edit') ?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>BPAS (Edit)</p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $this->renderSection('page-title') ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active"><?= $this->renderSection('page-breadcrumb') ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">

        <?= $this->renderSection('content') ?>

      </div>
    </section>
    <!-- End Main Content -->
  
  </div>

    <!-- Footer -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    <!-- End Footer -->

    <aside class="control-sidebar control-sidebar-dark">
      
    </aside>

    
</div>

<!-- Catatan -->
<script>
    document.getElementById('chat-button').addEventListener('click', function() {
        var chatContainer = document.getElementById('chat-container');
        if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
            chatContainer.style.display = 'block';
        } else {
            chatContainer.style.display = 'none';
        }
    });

    document.getElementById('remove-chat').addEventListener('click', function() {
        var chatContainer = document.getElementById('chat-container');
            chatContainer.style.display = 'none';
    });
</script>



<!-- jQuery -->
<script src="<?= base_url('AdminLTE/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Toastr -->
<script src="<?= base_url('AdminLTE/dist/js/adminlte.min.js') ?>"></script>
<script src="<?= base_url('AdminLTE/plugins/toastr/toastr.min.js') ?>"></script>

<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?= base_url('AdminLTE/plugins/select2/js/select2.full.min.js') ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') ?>"></script>
<!-- InputMask -->
<script src="<?= base_url('AdminLTE/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('AdminLTE/plugins/inputmask/jquery.inputmask.min.js') ?>"></script>
<!-- date-range-picker -->
<script src="<?= base_url('AdminLTE/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>"></script>
<!-- BS-Stepper -->
<script src="<?= base_url('AdminLTE/plugins/bs-stepper/js/bs-stepper.min.js') ?>"></script>
<!-- dropzonejs -->
<script src="<?= base_url('AdminLTE/plugins/dropzone/min/dropzone.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('AdminLTE/plugins/datatables/jquery.dataTables.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<!-- <script src="<?= base_url('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script> -->
<!-- <script src="<?= base_url('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script> -->
<script src="<?= base_url('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables-fixedcolumns/js/fixedColumns.bootstrap4.js')?>"></script>
<script src="<?= base_url('AdminLTE/plugins/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js')?>"></script>
<!-- Ellipsis -->
<script src="<?php echo('https://cdn.datatables.net/plug-ins/2.1.7/dataRender/ellipsis.js') ?>"></script>
<!-- overlayScrollbars -->
<!-- <script src="<?= base_url('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script> -->

<!-- Ekko Lightbox -->
<script src="<?= base_url('AdminLTE/plugins/ekko-lightbox/ekko-lightbox.min.js')?>"></script>

<!-- Page specific script -->
 
 
<script>
    $(function () {
      // $.fn.DataTable.ext.pager.numbers_length = 6;
      
    });
    
</script>


<script>
    $(function () {
      // Ekko Lightbox
      // $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      //   event.preventDefault();
      //   $(this).ekkoLightbox({
      //     alwaysShowClose: false,
      //   });
        
      // });

    $('.filter-container').filter({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });

      //Initialize Select2 Elements
      $('.select2').select2()
  
      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
  
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
  
      //Date picker
      $('#reservationdate').datetimepicker({
          format: 'L'
      });
  
      //Date and time picker
      $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
  
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )
  
      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })
  
      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()
  
      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()
  
      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })
  
      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })
  
    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })
  
    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false
  
    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)
  
    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })
  
    myDropzone.on("addedfile", function(file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
    })
  
    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })
  
    myDropzone.on("sending", function(file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })
  
    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })
  
    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
</script>
</body>
</html>
