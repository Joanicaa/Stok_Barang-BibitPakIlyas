<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Stock Barang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Stock Barang</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login with Your Account</h5>
                    <p class="text-center small">Enter your username &amp; password to login</p>
                  </div>
                  <!-- <h1><?= var_dump($this->session->flashdata('logout')); ?></h1> -->
                  <?= form_open('Login/validate') ?>
                  <div class="row g-3 needs-validation">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username">
                      </div>
                      <?= form_error('username') ?>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                      <?= form_error('password') ?>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </div>
                  <?= form_close() ?>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
  </svg>
</body><loom-container id="lo-engage-ext-container"><loom-shadow classname="resolved"></loom-shadow></loom-container><loom-container id="lo-companion-container"><loom-shadow classname="resolved"></loom-shadow></loom-container>

</html>

<!-- Vendor JS Files -->
<script src="<?= base_url('Asset/') ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url('Asset/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('Asset/') ?>assets/vendor/chart.js/chart.umd.js"></script>
<script src="<?= base_url('Asset/') ?>assets/vendor/echarts/echarts.min.js"></script>
<script src="<?= base_url('Asset/') ?>assets/vendor/quill/quill.min.js"></script>
<script src="<?= base_url('Asset/') ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url('Asset/') ?>assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?= base_url('Asset/') ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('Asset/') ?>assets/js/main.js"></script>