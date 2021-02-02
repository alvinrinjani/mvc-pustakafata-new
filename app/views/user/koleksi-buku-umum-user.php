<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Koleksi Buku Umum</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3  alert-primary">
      <h6 class="m-0 font-weight-bold text-primary">Koleksi Buku Umum</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
          <thead class="alert-primary">
            <tr>
              <th>Judul Buku</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Pesan Buku</th>
            </tr>
          </thead>
          <!-- <tfoot class="alert-primary">
            <tr>
              <th>Judul Buku</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Pesan Buku</th>
            </tr>
          </tfoot> -->
          <tbody>
            <?php foreach ($data['buku_umum'] as $b_umum) : ?>
              <tr>
                <td class="align-middle"><?= $b_umum['judul']; ?></td>
                <td class="align-middle"><?= $b_umum['penulis']; ?></td>
                <td class="align-middle text-center"><img class="rounded border border-primary" src="<?= BASEURL . '/img/' . $b_umum['gambar']; ?>" alt="" style="width: 60px; height:40px;"></td>
                <td class="align-middle">Rp. <?= $b_umum['harga']; ?>,-</td>
                <td class="align-middle">
                  <a href="" class="badge badge-success"><i class="fab fa-whatsapp"></i> Pesan Buku via WhatsApp</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->