    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 acme">Katalog Buku</h1>
      </div>

      <!-- Content Row -->
      <div class="row">

      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Area Chart -->
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
                  <a class="dropdown-item" href="#">Selengkapnya</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="card-deck">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                  <div class="col-sm-4 col-lg-4 mb-4">
                    <div class="card mx-2 border-bottom-info">
                      <a href=""><img src="img/undraw_posting_photo.svg" class="card-img-top" alt="..."></a>
                      <div class="card-body">
                        <h5 class="card-title text-center merienda">Card title</h5>
                        <p class="card-text sniglet">Harga : Rp.</p>
                      </div>
                      <div class="card-footer">
                        <a href="" class="badge badge-success">Pesan Buku</a>
                      </div>
                    </div>
                  </div>
                <?php endfor; ?>
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