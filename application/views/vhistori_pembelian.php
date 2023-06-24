<div class="pagetitle">
    <h1>Histori Pembelian</h1>
</div><!-- End Page Title -->

<div class="card">
    <div class="card-body mt-3">


        <!-- Table with stripped rows -->
        <table class="table table-striped" id="tabel_barang_masuk">
            <thead>
                <tr>
                    <th scope="col">Id Penjualan</th>
                    <th scope="col">Id Detail</th>
                    <th scope="col">Tanggal Pembelian</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datapembelian->result_array() as $dbmasuk) :
                    $tabel1 = $dbmasuk['Id_Penjualan'];
                    $tabel2 = $dbmasuk['Id_Detail'];
                    $tabel3 = $dbmasuk['Tanggal_Barang_Keluar'];
                ?>
                    <tr>
                        <td><?= $tabel1 ?></td>
                        <td><?= $tabel2 ?></td>
                        <td><?= $tabel3 ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- End Table with stripped rows -->


    </div>
</div>

<?php
foreach ($datapembelian->result_array() as $dbmasuk) :
    $tabel1 = $dbmasuk['Id_Penjualan'];
    $tabel2 = $dbmasuk['Id_Detail'];
    $tabel3 = $dbmasuk['Tanggal_Barang_Keluar'];
?>
    <div class="modal fade" id="Edits<?= $tabel1 ?>" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <?= form_open('Barang_masuk/update/' . $tabel1)  ?>
                <div class="modal-header">
                    <h5 class="modal-title">Modal edit <?= $tabel1 ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-3">
                            <label for="Id_barang" class="form-label">Id</label>
                            <input type="text" class="form-control" id="Id_barang" name="Id_barang" value="<?= $tabel1 ?>" required readonly>
                        </div>
                        <div class="col-7">
                            <label for="UpdateNamabarang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="UpdateNamabarang" name="UpdateNamabarang" value="<?= $tabel2 ?>" required>
                        </div>
                        <div class="col-2">
                            <label for="UpdateJumlahbarang" class="form-label">Jumlah Barang </label>
                            <input type="number" class="form-control" id="UpdateJumlahbarang" name="UpdateJumlahbarang" value="<?= $tabel5 ?>" required>
                        </div>
                        <div class="col-3">
                            <label for="UpdateUkuran" class="form-label">Ukuran Barang</label>
                            <select class="form-select" id="UpdateUkuran" name="UpdateUkuran" required>
                                <option value="Kecil" <?php if ($tabel3 == "Kecil") { ?> selected <?php } ?>>Kecil</option>
                                <option value="Sedang" <?php if ($tabel3 == "Sedang") { ?> selected <?php } ?>>Sedang</option>
                                <option value="Besar" <?php if ($tabel3 == "Besar") { ?> selected <?php } ?>>Besar</option>
                            </select>
                        </div>
                        <div class="col-9">
                            <label for="UpdateHarga" class="form-label">Harga Barang</label>
                            <input type="number" class="form-control" id="UpdateHarga" name="UpdateHarga" value="<?= $tabel4 ?>">
                        </div>
                    </div><!-- Vertical Form -->
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-success">Update Barang</button>
                </div>
                <?= form_close()  ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>


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