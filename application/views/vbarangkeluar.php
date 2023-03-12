<div class="pagetitle">
    <h1>Tabel Keluar</h1>
</div><!-- End Page Title -->


<!-- start modal Tambah barang -->
<button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#TambahBarang"><i class="bi bi-file-earmark-post"></i>
    Tambah Barang </button>

<div class="modal fade" id="TambahBarang" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Large Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal Tambah barang -->


<div class="card">
    <div class="card-body">

        <!-- Table with stripped rows -->
        <table class="table table-striped" id="tabel_barang_keluar">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Tanggal Barang Masuk</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($databarangkeluar->result_array() as $dbkeluar) :
                    $tabel0 = $dbkeluar['No'];
                    $tabel1 = $dbkeluar['Id'];
                    $tabel2 = $dbkeluar['Nama_barang'];
                    $tabel3 = $dbkeluar['Jumlah_barang'];
                    $tabel4 = $dbkeluar['Tanggal_barang_masuk'];
                ?>
                    <tr>
                        <th scope="row"><?= $tabel0 ?></th>
                        <td><?= $tabel1 ?></td>
                        <td><?= $tabel2 ?></td>
                        <td><?= $tabel3 ?></td>
                        <td><?= $tabel4 ?></td>
                        <td>
                            <a class="btn btn-success"><i class="bi bi-arrow-bar-right"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- End Table with stripped rows -->

    </div>
</div>

<!-- Ini untuk menjadikan tabel biasa menjadi Data Tables -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabel_barang_keluar').DataTable();
    });
</script>