<?php

class Model_Buku_Anak
{
  private $table_buku_anak = 'buku_anak';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // BUKU ANAK
  // BUKU ANAK
  // BUKU ANAK
  public function bukuAnak()
  {
    $this->db->query('SELECT * FROM ' . $this->table_buku_anak . ' ORDER BY id DESC');
    return $this->db->resultSet();
  }

  public function detail_BukuAnak($slug)
  {
    $this->db->query('SELECT * FROM ' . $this->table_buku_anak . ' WHERE slug=:slug');
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

  public function input_BukuAnak($data)
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

    $query = "INSERT INTO buku_anak
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

  public function delete_BukuAnak($slug)
  {
    // $query = "DELETE FROM buku_anak WHERE slug = :slug";
    $this->db->query('DELETE FROM ' . $this->table_buku_anak . ' WHERE slug=:slug');
    $this->db->bind('slug', $slug);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
