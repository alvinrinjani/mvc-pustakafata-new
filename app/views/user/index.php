    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 acme">Katalog Buku</h1>
      </div>

      <!-- Content Row -->
      <div class="row">

      </div>

      <!-- Katalog Buku Hemat -->
      <!-- Katalog Buku Hemat -->
      <!-- Katalog Buku Hemat -->
      <!-- Content Row -->
      <div class="row" id="buku_hemat">
        <div class="col-xl col-lg">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-info">
              <h6 class="m-0 font-weight-bold text-info">Buku Hemat Terbaru <span class="badge badge-pill badge-info">Promo</span></h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= BASEURL; ?>/koleksibuku/bukuHemat">Selengkapnya</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="card-deck">
                <?php foreach ($data['buku_hemat'] as $b_hemat) : ?>
                  <div class="col-lg-4 col mb-4">
                    <div class="card border-bottom-info h-100">
                      <a href=""><img src="<?= 'img/' . $b_hemat['gambar']; ?>" class="card-img-top" alt="<?= $b_hemat['slug']; ?>"></a>
                      <div class="card-body">
                      </div>
                      <a href="" class="card-title text-center merienda mb-5"><?= $b_hemat['judul']; ?></a>
                      <p class="card-text sniglet mx-4">Harga : Rp. <?= $b_hemat['harga']; ?>,-</p>
                      <div class="card-footer">
                        <a href="" class="badge badge-success"><i class="fab fa-whatsapp"></i> Pesan Buku</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Katalog Buku Anak -->
      <!-- Katalog Buku Anak -->
      <!-- Katalog Buku Anak -->
      <!-- Content Row -->
      <div class="row" id="buku_anak">
        <div class="col-xl col-lg">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-warning">
              <h6 class="m-0 font-weight-bold text-warning">Buku Anak Terbaru</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= BASEURL; ?>/koleksibuku/bukuAnak">Selengkapnya</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="card-deck">
                <?php foreach ($data['buku_anak'] as $b_anak) : ?>
                  <div class="col-lg-4 col mb-4">
                    <div class="card border-bottom-warning h-100">
                      <a href=""><img src="<?= BASEURL . '/img/' . $b_anak['gambar']; ?>" class="card-img-top" alt="<?= $b_anak['slug']; ?>"></a>
                      <div class="card-body">
                      </div>
                      <a href="" class="card-title text-center merienda mb-5"><?= $b_anak['judul']; ?></a>
                      <p class="card-text sniglet mx-4">Harga : Rp. <?= $b_anak['harga']; ?>,-</p>
                      <div class="card-footer">
                        <a href="" class="badge badge-success"><i class="fab fa-whatsapp"></i> Pesan Buku</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Katalog Buku Pemikiran -->
      <!-- Katalog Buku Pemikiran -->
      <!-- Katalog Buku Pemikiran -->
      <!-- Content Row -->
      <div class="row" id="buku_pemikiran">
        <div class="col-xl col-lg">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-danger">
              <h6 class="m-0 font-weight-bold text-danger">Buku Pemikiran Terbaru</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= BASEURL; ?>/koleksibuku/bukuPemikiran">Selengkapnya</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="card-deck">
                <?php foreach ($data['buku_pemikiran'] as $b_pemikiran) : ?>
                  <div class="col-lg-4 col mb-4">
                    <div class="card border-bottom-danger h-100">
                      <a href=""><img src="<?= BASEURL . '/img/' . $b_pemikiran['gambar']; ?>" class="card-img-top" alt="<?= $b_pemikiran['slug']; ?>"></a>
                      <div class="card-body">
                      </div>
                      <a href="" class="card-title text-center merienda mb-5"><?= $b_pemikiran['judul']; ?></a>
                      <p class="card-text sniglet mx-4">Harga : Rp. <?= $b_pemikiran['harga']; ?>,-</p>
                      <div class="card-footer">
                        <a href="" class="badge badge-success"><i class="fab fa-whatsapp"></i> Pesan Buku</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Katalog Buku Umum -->
      <!-- Katalog Buku Umum -->
      <!-- Katalog Buku Umum -->
      <!-- Content Row -->
      <div class="row" id="buku_umum">
        <div class="col-xl col-lg">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-primary">
              <h6 class="m-0 font-weight-bold text-primary">Buku Umum Terbaru</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?= BASEURL; ?>/koleksibuku/bukuUmum">Selengkapnya</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="card-deck">
                <?php foreach ($data['buku_umum'] as $b_umum) : ?>
                  <div class="col-lg-4 col mb-4">
                    <div class="card border-bottom-primary h-100">
                      <a href=""><img src="<?= BASEURL . '/img/' . $b_umum['gambar']; ?>" class="card-img-top" alt="<?= $b_umum['slug']; ?>"></a>
                      <div class="card-body">
                      </div>
                      <a href="" class="card-title text-center merienda mb-5"><?= $b_umum['judul']; ?></a>
                      <p class="card-text sniglet mx-4">Harga : Rp. <?= $b_umum['harga']; ?>,-</p>
                      <div class="card-footer">
                        <a href="" class="badge badge-success"><i class="fab fa-whatsapp"></i> Pesan Buku</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Content Row -->
      <!-- <div class="row"> -->
      <!-- Content Column -->
      <!-- <div class="col-lg-6 mb-4"></div>
        <div class="col-lg-6 mb-4"></div>
      </div> -->

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-gradient-warning">
      <div class="container my-auto">
        <div class="copyright text-center my-auto text-white">
          <span>Copyright &copy; <?= SHOP . ' ' . date('Y'); ?></span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->