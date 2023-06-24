<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $titlepage ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('Asset/') ?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url('Asset/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('Asset/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('Asset/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('Asset/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('Asset/') ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url('Asset/') ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url('Asset/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('Asset/') ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('Asset/') ?>assets/css/style.css" rel="stylesheet">

  <style type="text/css">
    @font-face {
      font-weight: 400;
      font-style: normal;
      font-family: 'Circular-Loom';

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
    }

    @font-face {
      font-weight: 500;
      font-style: normal;
      font-family: 'Circular-Loom';

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Medium.woff2') format('woff2');
    }

    @font-face {
      font-weight: 700;
      font-style: normal;
      font-family: 'Circular-Loom';

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
    }

    @font-face {
      font-weight: 900;
      font-style: normal;
      font-family: 'Circular-Loom';

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Black.woff2') format('woff2');
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Bibit Buah Pak Ilyas</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Lorem Ipsum</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>30 min. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-x-circle text-danger"></i>
            <div>
              <h4>Atque rerum nesciunt</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>1 hr. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-check-circle text-success"></i>
            <div>
              <h4>Sit rerum fuga</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>2 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div>
              <h4>Dicta reprehenderit</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>4 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
          </li>

        </ul><!-- End Notification Dropdown Items -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $this->session->userdata('nama'); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $this->session->userdata('nama') ?></h6>
              <span> <?php if ($this->session->userdata('level') == '1') {
                        echo 'Superadmin';
                      } else {
                        echo 'Admin';
                      }
                      ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('Login/Logout') ?>">
                <i class="bi bi-box-arrow-right"></i>
                Sign Out
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="<?= ($this->uri->segment(1) === 'Dashboard') ? 'nav-link' : 'nav-link collapsed' ?>" href="<?= base_url('Dashboard') ?>">
          <i class="bi bi-folder"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <li class="nav-item">
        <a class="<?= ($this->uri->segment(1) === 'Barang_masuk') ? 'nav-link' : 'nav-link collapsed' ?>" href="<?= base_url('Barang_masuk') ?>">
          <i class="bi bi-cart-plus"></i>
          <span>Barang Masuk</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <!-- <li class="nav-item">
        <a class="<?= ($this->uri->segment(1) === 'Barang_keluar') ? 'nav-link' : 'nav-link collapsed' ?>" href="<?= base_url('Barang_keluar') ?>">
          <i class="bi bi-cart-plus"></i>
          <span>Barang Keluar</span>
        </a>
      </li> -->
      <li class="nav-item">
        <a class="<?= ($this->uri->segment(1) === 'Keranjang') ? 'nav-link' : 'nav-link collapsed' ?>" href="<?= base_url('Keranjang') ?>">
          <i class="bi bi-cart2"></i>
          <span>Keranjang</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <li class="nav-item">
        <a class="<?= ($this->uri->segment(1) === 'Histori') ? 'nav-link' : 'nav-link collapsed' ?>" href="<?= base_url('Histori') ?>">
          <i class="bi bi-people"></i>
          <span>Histori Pembelian</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <?php if ($this->session->userdata('level') == '1') { ?>
        <li class="nav-item">
          <a class="<?= ($this->uri->segment(1) === 'User') ? 'nav-link' : 'nav-link collapsed' ?>" href="<?= base_url('User') ?>">
            <i class="bi bi-people"></i>
            <span>User</span>
          </a>
        </li><!-- End Blank Page Nav -->

      <?php
      } else {
      }
      ?>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">