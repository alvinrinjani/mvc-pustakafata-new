<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Table Data Paket Buku Hemat</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3  alert-info">
      <h6 class="m-0 font-weight-bold text-info">Data Paket Buku Hemat</h6>
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
              <th>Ubah Data Buku</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tfoot class="alert-info">
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
            <?php foreach ($data['buku_hemat'] as $b_hemat) : ?>
              <tr>
                <td><?= $b_hemat['judul']; ?></td>
                <td><?= $b_hemat['penulis']; ?></td>
                <td class="text-center"><img src="<?= BASEURL . '/img/' . $b_hemat['gambar']; ?>" alt="" style="width: 60px; height:30px;"></td>
                <td>Rp. <?= $b_hemat['harga']; ?>,-</td>
                <td class="text-center">
                  <a href="<?= BASEURL; ?>/admin/update/<?= $b_hemat['slug']; ?>"><span class="badge badge-primary">Ubah Data</span></a>
                </td>
                <td class="text-center">
                  <a href="<?= BASEURL; ?>/admin/deleteBukuHemat/<?= $b_hemat['slug']; ?>" onclick="return confirm('Yakin ingin menghapus data buku <?= $b_hemat['judul']; ?>')"><span class="badge badge-danger">Delete</span></a>
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