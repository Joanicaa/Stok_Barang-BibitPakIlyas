<div class="pagetitle">
    <h1>Histori Pembelian</h1>
</div><!-- End Page Title -->

<div class="card">
    <div class="card-body mt-3">


        <!-- Table with stripped rows -->
        <table class="table table-striped" id="tabel_barang_masuk">
            <thead>
                <tr>
                    <th scope="col">Id Pembelian</th>
                    <th scope="col">Id Detail</th>
                    <th scope="col">Tanggal Pembelian</th>
                    <th scope="col">View More</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($datapembelian->result_array() as $dbmasuk) :
                    $tabel1 = $dbmasuk['Id_histori'];
                    $tabel2 = $dbmasuk['Id_detail'];
                    $tabel3 = $dbmasuk['Tanggal'];
                ?>
                    <tr>
                        <td style="font-family: 'Libre Barcode 128', cursive; font-size:40px"><?= strtoupper($tabel1) ?></td>
                        <!-- ini style untuk barcode  -->
                        <td><?= strtoupper($tabel2) ?></td>
                        <td><?= $tabel3 ?></td>
                        <td>
                            <a href="<?= base_url('/Histori/Detail/' . $tabel2) ?>" class="btn btn-warning"><i class="bi bi-clock-history"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- End Table with stripped rows -->


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