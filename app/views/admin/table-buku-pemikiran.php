<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Table Data Buku Pemikiran</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3  alert-warning">
      <h6 class="m-0 font-weight-bold text-warning">Data Buku Pemikiran</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="alert-warning">
            <tr>
              <th>Judul Buku</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Ubah Data Buku</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tfoot class="alert-warning">
            <tr>
              <th>Judul Buku</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Ubah Data Buku</th>
              <th>Hapus</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($data['buku_pemikiran'] as $b_pemikiran) : ?>
              <tr>
                <td><?= $b_pemikiran['judul']; ?></td>
                <td><?= $b_pemikiran['penulis']; ?></td>
                <td class="text-center"><img src="<?= BASEURL . '/img/' . $b_pemikiran['gambar']; ?>" alt="" style="width: 60px; height:30px;"></td>
                <td>Rp. <?= $b_pemikiran['harga']; ?>,-</td>
                <td class="text-center">
                  <a href="<?= BASEURL; ?>/admin/update/<?= $b_pemikiran['slug']; ?>"><span class="badge badge-primary">Ubah Data</span></a>
                </td>
                <td class="text-center">
                  <a href="<?= BASEURL; ?>/admin/deleteBukuPemikiran/<?= $b_pemikiran['slug']; ?>" onclick="return confirm('Yakin ingin menghapus data buku <?= $b_pemikiran['judul']; ?>')"><span class="badge badge-danger">Delete</span></a>
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