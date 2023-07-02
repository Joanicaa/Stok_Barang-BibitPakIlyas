<div class="pagetitle">
    <h1>User</h1>
</div><!-- End Page Title -->


<!-- start modal tambah user -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#User"><i class="bi bi-file-earmark-plus"></i>
    Tambah User </button>

<div class="card">
    <div class="card-body mt-3">


        <!-- Table with stripped rows -->
        <table class="table table-striped" id="tabel_tambah_user">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">user</th>
                    <th scope="col">nama</th>
                    <th scope="col">level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($tampiluser->result_array() as $dbmasuk) :
                    $tabel1 = $dbmasuk['id'];
                    $tabel2 = $dbmasuk['user'];
                    $tabel3 = $dbmasuk['nama'];
                    $tabel4 = $dbmasuk['level'];
                ?>
                    <tr>
                        <td><?= $tabel1 ?></td>
                        <td><?= $tabel2 ?></td>
                        <td><?= $tabel3 ?></td>
                        <td><?= $tabel4 ?></td>
                        <td>
                            <a data-bs-toggle="modal" data-bs-target="#Hapus-User<?= $tabel1 ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- End Table with stripped rows -->

    </div>
</div>


<!-- Modal Tambah user -->
<div class="modal fade" id="User" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <?= form_open('User/tambah_user') ?>
            <div class="modal-header">
                <h5 class="modal-title">Tambah User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Vertical Form -->
                <div class="row g-3">
                    <div class="col-12">
                        <label for="user" class="form-label">Username</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                    </div>
                    <div class="col-12">
                        <label for="user" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>
                    <div class="col-12">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="col-12">
                        <label for="level" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option selected="" value="1">Superadmin</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                </div><!-- Vertical Form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Tambah User</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<!-- end modal Tambah user -->

<?php
foreach ($tampiluser->result_array() as $dbmasuk) :
    $tabel1 = $dbmasuk['id'];
    $tabel2 = $dbmasuk['nama'];
?>
    <div class="modal fade" id="Hapus-User<?= $tabel1 ?>" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <?= form_open('/User/hapus_user/' . $tabel1) ?>
                <div class="modal-header">
                    <h5 class="modal-title">Modal edit <mark> <?= $tabel2 ?></mark></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-3">
                            <label for="Id_barang" class="form-label">Id</label>
                            <input type="text" class="form-control" id="Id_barang" name="Id_barang" value="<?= $tabel1 ?>" disabled>
                        </div>
                        <div class="col-9">
                            <label for="UpdateNamabarang" class="form-label">Nama User</label>
                            <input type="text" class="form-control" id="UpdateNamabarang" name="UpdateNamabarang" value="<?= $tabel2 ?>" disabled>
                        </div>
                    </div><!-- Vertical Form -->
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-danger">Hapus User</button>
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
        $('#tabel_User').DataTable();
    });
</script>