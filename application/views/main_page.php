<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inventori</title>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style2.css">
  <link rel="shortcut icon" href="<?php echo base_url()?>assets//images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <a style="color:#2e86de" class="navbar-brand brand-logo" href="../../index.html">
              <i class="mdi mdi-elevation-rise"></i>Inventory</a>
      </a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html">
          <img src="<?php echo base_url()?>assets/images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
    
          <li class="nav-item active">
            <a href="<?= site_url('login/logout') ?>" class="nav-link">
              <i class="fa fa-sign-out"></i> Logout </a>
          </li>
      
        </ul>
      
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?php echo base_url()?>assets/images/user.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <div>
                    <small class="designation text-muted">Administrator</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">Main Menu
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Data/dashboard')?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account-location"></i>
              <span class="menu-title">Data Supplier</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
           
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/input_supplier') ?>">Input Supplier</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/supplier') ?>">Data Supplier</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-database"></i>
              <span class="menu-title">Data Barang</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/v_barang') ?>"><i class="menu-icon mdi mdi-file-chart"></i>
                  <span class="menu-title">Data Barang</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/input_barang') ?>"><i class="menu-icon mdi mdi-account-edit"></i>
                  <span class="menu-title">Input Barang</span></a>
                </li>
              </ul>
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-folder-plus"></i>
              <span class="menu-title">Data Barang Masuk</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/v_barang_masuk') ?>"><i class="menu-icon mdi mdi-file-chart"></i>
                  <span class="menu-title">Barang Masuk</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/masuk') ?>"><i class="menu-icon mdi mdi-account-edit"></i>
                  <span class="menu-title">Input Barang</span></a>
                </li>
              </ul>
            </div>
          </li>  
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-folder-remove"></i>
              <span class="menu-title">Data Barang Keluar</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/v_barang_keluar') ?>"><i class="menu-icon mdi mdi-file-chart"></i>
                  <span class="menu-title">Barang Keluar</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/keluar') ?>"><i class="menu-icon mdi mdi-account-edit"></i>
                  <span class="menu-title">Input Barang</span></a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Admin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/input_admin') ?>"><i class="menu-icon mdi mdi-file-chart"></i>
                  <span class="menu-title">Input Admin</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Data/v_admin') ?>"><i class="menu-icon mdi mdi-account-edit"></i>
                  <span class="menu-title">Data Admin</span></a>
                </li>
              </ul>
            </div>
          </li>
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
              <?php $this->load->view($main_content); ?>

          </div>
        </div>
       
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Inventori</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <script src="<?php echo base_url()?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url()?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="<?php echo base_url()?>assets/vendors/js/data-table.js"></script>
  <script src="<?php echo base_url()?>assets/vendors/js/data-sup.js"></script>

  <script src="<?php echo base_url()?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url()?>assets//js/misc.js"></script>

</body>

</html>