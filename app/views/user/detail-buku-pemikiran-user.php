<div class="container-fluid">

  <div class="row">
    <div class="col-lg-5">
      <!-- Page Heading -->
      <h1 class="h1 mb-2 merienda ml-2" style="font-size: 35px;"><?= $data['judul'] ?></h1>
      <div class="card mb-3 border-bottom-danger" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= BASEURL; ?>/img/<?= $data['gambar']; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text sniglet">Penulis : <?= $data['penulis']; ?></p>
              <p class="card-text sniglet">Penerbit : <?= $data['penerbit']; ?></p>
              <p class="card-text sniglet">Tahun Terbit : <?= $data['tahun']; ?></p>
              <p class="card-text sniglet">Harga : Rp. <?= $data['harga']; ?>,-</p>
            </div>
          </div>
        </div>
        <div class="card-footer bg-transparent text-center">
          <a href="" class="badge badge-success"><i class="fab fa-whatsapp"></i> Pesan Buku Ini Sekarang</a>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <h3>Sinopsis</h3>
      <p class="text-justify"><?= $data['sinopsis']; ?></p>
    </div>
  </div>