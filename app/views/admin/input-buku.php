    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 acme">Masukkan Data Buku Baru</h1>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-lg-8 border rounded shadow-sm py-2 mb-2">
          <!-- FORM -->
          <form action="<?= BASEURL; ?>/admin/inputBuku" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="judul">Judul Buku</label>
              <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
              <label for="penulis">Penulis</label>
              <input type="text" class="form-control" id="penulis" name="penulis">
            </div>
            <div class="form-group">
              <label for="penerbit">Penerbit</label>
              <input type="text" class="form-control" id="penerbit" name="penerbit">
            </div>
            <div class="form-group">
              <label for="tahun">Tahun Terbit</label>
              <input type="text" class="form-control" id="tahun" name="tahun">
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Kategori</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radios" id="buku_hemat" value="buku_hemat">
                    <label class="form-check-label" for="buku_hemat">
                      Paket Buku Hemat
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radios" id="buku_anak" value="buku_anak">
                    <label class="form-check-label" for="buku_anak">
                      Buku Anak
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radios" id="buku_pemikiran" value="buku_pemikiran">
                    <label class="form-check-label" for="buku_pemikiran">
                      Buku Pemikiran
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radios" id="buku_umum" value="buku_umum">
                    <label class="form-check-label" for="buku_umum">
                      Buku Umum
                    </label>
                  </div>
                </div>
            </fieldset>
            <div class="form-group">
              <label for="gambar">Pilih Gambar...</label>
              <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <div class="form-group">
              <label for="sinopsis">Sinopsis Buku</label>
              <textarea class="form-control" id="sinopsis" rows="5" name="sinopsis"></textarea>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="submit">Tambah Data Buku</button>
            </div>
          </form>
          <!-- ENDFORM -->
        </div>
      </div>


    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->