<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Table Data Buku Umum</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3  alert-primary">
      <h6 class="m-0 font-weight-bold text-primary">Data Buku Umum</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="alert-primary">
            <tr>
              <th>Judul Buku</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Ubah Data Buku</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tfoot class="alert-primary">
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
            <?php foreach ($data['buku_umum'] as $b_umum) : ?>
              <tr>
                <td><?= $b_umum['judul']; ?></td>
                <td><?= $b_umum['penulis']; ?></td>
                <td class="text-center"><img src="<?= BASEURL . '/img/' . $b_umum['gambar']; ?>" alt="" style="width: 60px; height:30px;"></td>
                <td>Rp. <?= $b_umum['harga']; ?>,-</td>
                <td class="text-center">
                  <a href="<?= BASEURL; ?>/admin/update/<?= $b_umum['slug']; ?>"><span class="badge badge-primary">Ubah Data</span></a>
                </td>
                <td class="text-center">
                  <a href="<?= BASEURL; ?>/admin/deleteBukuUmum/<?= $b_umum['slug']; ?>" onclick="return confirm('Yakin ingin menghapus data buku <?= $b_umum['judul']; ?>')"><span class="badge badge-danger">Delete</span></a>
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