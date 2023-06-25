<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

</head>

<body>
    <div class="mx-5 my-3">


        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Barang berhasil di checkout!
        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="text-center mb-2">
                    <h1> Bibit Buah Pak Ilyas</h1>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detail Barang yang di Checkout</h5>
                        <!-- Small tables -->
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Ukuran</th>
                                    <th>QTY</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody id="detail-keranjang-berhasil">
                            </tbody>
                        </table>
                        <!-- End small tables -->

                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="<?= base_url("/Keranjang") ?>" class="btn btn-secondary me-2">Kembali</a>
                    <button class="btn btn-warning" onclick="window.print()"> <i class="bi bi-printer me-2"></i>Cetak Bukti Pembelian</button>
                </div>
            </div>

        </div>

    </div>



</body>

</html>

<script src="<?= base_url("Asset/datatables/jquery-3.5.1.js") ?>"></script>
<script src="<?= base_url("Asset/datatables/jquery.dataTables.min.js") ?>"></script>
<script src="<?= base_url("Asset/datatables/dataTables.bootstrap5.min.js") ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Load shopping cart 
        $('#detail-keranjang-berhasil').load("<?= base_url('Keranjang/load_cart_success'); ?> ");
    });
</script>