<?php

class Model_Buku_Umum
{
  private $table_buku_umum = 'buku_umum';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function bukuUmum()
  {
    $this->db->query('SELECT * FROM ' . $this->table_buku_umum . ' ORDER BY id DESC');
    return $this->db->resultSet();
  }

  public function detail_BukuUmum($slug)
  {
    $this->db->query('SELECT * FROM ' . $this->table_buku_umum . ' WHERE slug=:slug');
    $this->db->bind('slug', $slug);
    return $this->db->single();
  }

  public function upload()
  {
    $namagambar = $_FILES['gambar']['name'];
    $ukuranGambar = $_FILES['gambar']['size'];
    $errorGambar = $_FILES['gambar']['error'];
    $tmpGambar = $_FILES['gambar']['tmp_name'];

    // cek ada gambar
    if ($errorGambar === 4) {
      Flasher::setFlash('gagal', 'buku', 'ditambahkan', 'danger', BASEURL);
      header('Location:' . BASEURL . '/admin');
      exit;
    }

    // cek file upload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namagambar);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      Flasher::setFlash('gagal', 'buku', 'ditambahkan', 'danger', BASEURL);
      header('Location:' . BASEURL . '/admin');
      exit;
    }

    // cek ukuran gambar
    if ($ukuranGambar > 1500000) {
      Flasher::setFlash('gagal', 'buku', 'ditambahkan', 'danger', BASEURL);
      header('Location:' . BASEURL . '/admin');
      exit;
    }

    move_uploaded_file($tmpGambar, 'assets/img/' . $namagambar);

    return $namagambar;
  }

  public function input_BukuUmum($data)
  {
    $judul = $data['judul'];
    $slug = slug($data['judul']);
    $penulis = $data['penulis'];
    $penerbit = $data['penerbit'];
    $tahun = $data['tahun'];
    $harga = $data['harga'];
    // upload gambar
    $gambar = $this->upload($data);
    if (!$gambar) {
      return false;
    }
    // $gambar = $data['gambar'];
    $sinopsis = $data['sinopsis'];

    $query = "INSERT INTO buku_umum
              VALUES
              ('', :judul, :slug, :penulis, :penerbit, :tahun, :harga, :gambar, :sinopsis)";

    $this->db->query($query);
    $this->db->bind('judul', $judul);
    $this->db->bind('slug', $slug);
    $this->db->bind('penulis', $penulis);
    $this->db->bind('penerbit', $penerbit);
    $this->db->bind('tahun', $tahun);
    $this->db->bind('harga', $harga);
    $this->db->bind('gambar', $gambar);
    $this->db->bind('sinopsis', $sinopsis);

    $this->db->execute();
    return $this->db->rowCount();
  }


  public function delete_BukuUmum($slug)
  {
    // $query = "DELETE FROM buku_Umum WHERE slug = :slug";
    $this->db->query('DELETE FROM ' . $this->table_buku_umum . ' WHERE slug=:slug');
    $this->db->bind('slug', $slug);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
