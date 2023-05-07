<div class="pagetitle">
  <h1>Barang Masuk</h1>
</div><!-- End Page Title -->


<!-- start modal Tambah barang -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#TambahBarang"><i class="bi bi-file-earmark-plus"></i>
  Tambah Barang </button>

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
          <th scope="col">Tanggal Barang Masuk</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($databarangmasuk->result_array() as $dbmasuk) :
          $tabel1 = $dbmasuk['Id_barang'];
          $tabel2 = $dbmasuk['Nama_barang'];
          $tabel3 = $dbmasuk['Ukuran_barang'];
          $tabel4 = $dbmasuk['Harga_barang'];
          $tabel5 = $dbmasuk['Jumlah_barang'];
          $tabel6 = $dbmasuk['Tanggal_barang_masuk'];
        ?>
          <tr>
            <td><?= $tabel1 ?></td>
            <td><?= $tabel2 ?></td>
            <td><?= $tabel3 ?></td>
            <td><?= number_format($tabel4) ?></td>
            <td><?= $tabel5 ?></td>
            <td><?= $tabel6 ?></td>
            <td>
              <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Edit"><i class="bi bi-pen"></i></a>
              <!-- <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Hapus"><i class="bi bi-trash"></i></a> -->
              <a href="<?= base_url("Barang_masuk/hapus_barang/" . $tabel1); ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>

            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>


<!-- Modal Tambah Barang -->
<div class="modal fade" id="TambahBarang" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?= form_open('Barang_masuk/tambah_barang') ?>
      <div class="modal-header">
        <h5 class="modal-title">Tambah Barang Masuk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Vertical Form -->
        <div class="row g-3">
          <div class="col-10">
            <label for="Namabarang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="Namabarang" name="Namabarang" required>
          </div>
          <div class="col-2">
            <label for="Jumlahbarang" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="Jumlahbarang" name="Jumlahbarang" required>
          </div>
          <div class="col-6">
            <label for="Ukuran" class="form-label">Ukuran Barang</label>
            <select class="form-select" id="Ukuran" name="Ukuran" required>
              <option selected="" value="Kecil">Kecil</option>
              <option value="Sedang">Sedang</option>
              <option value="BEsar">Besar</option>
            </select>
          </div>
          <div class="col-6">
            <label for="Harga" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="Harga" name="Harga">
          </div>
        </div><!-- Vertical Form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Tambah Barang</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>
<!-- end modal Tambah barang -->

<!-- Modal Edit -->
<div class="modal fade" id="Edit" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-primary">Save changes</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="Hapus" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal hapus</h5>
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