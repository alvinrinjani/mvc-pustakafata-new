<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Koleksi Paket Buku Hemat</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3  alert-info">
      <h6 class="m-0 font-weight-bold text-info">Koleksi Paket Buku Hemat</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="alert-info">
            <tr>
              <th>Judul Buku</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Pesan Buku</th>
            </tr>
          </thead>
          <tfoot class="alert-info">
            <tr>
              <th>Judul Buku</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Pesan Buku</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($data['buku_hemat'] as $b_hemat) : ?>
              <tr>
                <td class="align-middle"><?= $b_hemat['judul']; ?></td>
                <td class="align-middle"><?= $b_hemat['penulis']; ?></td>
                <td class=" text-center"><img src="<?= BASEURL . '/img/' . $b_hemat['gambar']; ?>" alt="" style="width: 90px; height:60px;"></td>
                <td class="align-middle">Rp. <?= $b_hemat['harga']; ?>,-</td>
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