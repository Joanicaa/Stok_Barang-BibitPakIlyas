<!-- <script src="<?= base_url('Asset/assets/js/jquery-3.5.1.js') ?>"></script> -->

<div class="pagetitle">
    <h1>Keranjang Barang Keluar</h1>
</div><!-- End Page Title -->


<div class="card">
    <div class="card-body mt-3">

        <!-- Table with stripped rows -->
        <table class="table table-striped" id="tabel_barang_masuk">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Ukuran Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($databarangmasuk as $dbmasuk) :
                ?>
                    <tr>
                        <td><?= $dbmasuk->Id_barang ?></td>
                        <td><?= $dbmasuk->Nama_barang ?></td>
                        <td><?= $dbmasuk->Ukuran_barang ?></td>
                        <td><?= $dbmasuk->Harga_barang ?></td>
                        <td><?= $dbmasuk->Jumlah_barang ?></td>
                        <!-- <td><?= $dbmasuk->Tanggal_barang_masuk ?></td> -->
                        <td> <input type="number" name="quantity" id="<?= $dbmasuk->Id_barang ?>" value="1" class="quantity form-control"></td>
                        <td>
                            <button class="add_cart btn btn-success" data-produkid='<?= $dbmasuk->Id_barang ?>' data-produknama='<?= $dbmasuk->Nama_barang ?>' data-produkharga='<?= $dbmasuk->Harga_barang ?>' data-produkukuran='<?= $dbmasuk->Ukuran_barang ?>'><i class="bi bi-cart-plus"></i></button>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <hr class="my-4">
        <div class="keranjangbelanja">
            <h4> Keranjang Belanja </h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Ukuran</th>
                        <th>QTY</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="detail_keranjang">
                </tbody>
            </table>
        </div>
        <!-- End Table with stripped rows -->
        <div class="d-flex flex-row-reverse me-2">
        </div>
        <div class="d-flex justify-content-end">
            <a href="<?= base_url('Keranjang/Berhasil') ?>" type="button" class="btn btn-primary mt-2"><i class="bi bi-cart me-2"></i> Beli Sekarang </a>
        </div>
    </div>
</div>

<!-- Ini untuk menjadikan tabel biasa menjadi Data Tables -->
<link href="<?= base_url("Asset/datatables/dataTables.bootstrap5.min.css") ?>" rel="stylesheet">
<link href="<?= base_url("Asset/datatables/bootstrap5.min.css") ?>" rel="stylesheet">

<script src="<?= base_url("Asset/datatables/jquery-3.5.1.js") ?>"></script>
<script src="<?= base_url("Asset/datatables/jquery.dataTables.min.js") ?>"></script>
<script src="<?= base_url("Asset/datatables/dataTables.bootstrap5.min.js") ?>"></script>
<script>
    $(document).ready(function() {
        $('#tabel_barang_masuk').DataTable();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        // Load shopping cart 
        $('#detail_keranjang').load("<?= base_url('Keranjang/load_cart'); ?> ");

        // Hapus item cart 
        $(document).on('click', '.hapus_cart', function() {
            var row_id = $(this).attr("id");
            $.ajax({
                url: "<?= base_url('Keranjang/hapus_cart')  ?>",
                method: "POST",
                data: {
                    row_id: row_id
                },
                success: function(data) {
                    $('#detail_keranjang').html(data);
                }
            });
        });

        $('.add_cart').click(function() {
            var produk_id = $(this).data("produkid");
            var produk_nama = $(this).data("produknama");
            var produk_harga = $(this).data("produkharga");
            // var produk_ukuran = $(this).data("produkukuran");
            var quantity = $('#' + produk_id).val();
            $.ajax({
                url: '<?= base_url('Keranjang/add_to_cart'); ?>',
                method: "POST",
                data: {
                    produk_id: produk_id,
                    produk_nama: produk_nama,
                    produk_harga: produk_harga,
                    // produk_ukuran: produk_ukuran,
                    quantity: quantity
                },
                success: function(data) {
                    $('#detail_keranjang').html(data);
                }
            });
        });
    });
</script>