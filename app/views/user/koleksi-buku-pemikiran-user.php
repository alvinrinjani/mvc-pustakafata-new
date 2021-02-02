<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Koleksi Buku Pemikiran</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3  alert-danger">
      <h6 class="m-0 font-weight-bold text-danger">Koleksi Buku Pemikiran</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
          <thead class="alert-danger">
            <tr>
              <th>Judul Buku</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Pesan Buku</th>
            </tr>
          </thead>
          <!-- <tfoot class="alert-danger">
            <tr>
              <th>Judul Buku</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Pesan Buku</th>
            </tr>
          </tfoot> -->
          <tbody>
            <?php foreach ($data['buku_pemikiran'] as $b_pemikiran) : ?>
              <tr>
                <td class="align-middle"><?= $b_pemikiran['judul']; ?></td>
                <td class="align-middle"><?= $b_pemikiran['penulis']; ?></td>
                <td class="align-middle text-center"><img class="rounded border border-danger" src="<?= BASEURL . '/img/' . $b_pemikiran['gambar']; ?>" alt="" style="width: 60px; height:40px;"></td>
                <td class="align-middle">Rp. <?= $b_pemikiran['harga']; ?>,-</td>
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