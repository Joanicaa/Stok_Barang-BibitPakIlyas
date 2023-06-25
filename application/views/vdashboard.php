    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Barang yang Tersedia <span>| Hari Ini</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah_id; ?></h6>
                      <span class="text-success small pt-1 fw-bold"><?= date("d M") ?></span><span class="text-muted small pt-2 ps-1"><?= date("Y") ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Stock Seluruh Barang <span>| Hari Ini</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah_stok; ?></h6>
                      <span class="text-success small pt-1 fw-bold"><?= date("d M") ?></span><span class="text-muted small pt-2 ps-1"><?= date("Y") ?></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Total Penjualan<span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>asdasd</h6>
                      <span class="text-success small pt-1 fw-bold"><?= date("d M") ?></span><span class="text-muted small pt-2 ps-1"><?= date("Y") ?></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Stok Kurang dari 3<span> | Hari Ini</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Stok Saat Ini</th>
                        <th scope="col">Detail</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php foreach ($barang_habis as $datahabis) :
                      ?>
                        <tr>
                          <td><?= $datahabis->Id_barang ?></td>
                          <td><?= $datahabis->Nama_barang ?></td>
                          <td><?= $datahabis->Harga_barang ?></td>
                          <td><?= $datahabis->Jumlah_barang ?></td>
                          <td>
                            <a href="<?= base_url('/Barang_masuk') ?>" type="button" class="btn btn-danger btn-sm">Check Detail</a>
                          </td>
                        </tr>

                      <?php endforeach; ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- <div class="col-lg-4">

          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" class="echart" _echarts_instance_="ec_1677924099616">
                <div style="position: relative; width: 885px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="1106" height="500" style="position: absolute; left: 0px; top: 0px; width: 885px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div>
                <div class=""></div>
              </div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 50,
                          name: 'LinkedIn'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div>
        </div> -->

      </div>
    </section>