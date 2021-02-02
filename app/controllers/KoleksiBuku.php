<?php

class KoleksiBuku extends Controller
{

  public function index()
  {
    $this->view('404/index');
  }

  // Table Buku Hemat
  public function bukuHemat()
  {
    $data['title'] = 'Promo Paket Buku Hemat';
    $data['buku_hemat'] = $this->model('Model_Buku_Paket_Hemat')->bukuHemat();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('user/koleksi-buku-hemat-user', $data);
    $this->view('templates/5_footer');
  }

  // Table Buku Anak
  public function bukuAnak()
  {
    $data['title'] = 'Promo Paket Buku Hemat';
    $data['buku_anak'] = $this->model('Model_Buku_Anak')->bukuAnak();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('user/koleksi-buku-anak-user', $data);
    $this->view('templates/5_footer');
  }
  // Table Buku Pemikiran
  public function bukuPemikiran()
  {
    $data['title'] = 'Promo Paket Buku Hemat';
    $data['buku_pemikiran'] = $this->model('Model_Buku_Pemikiran')->bukuPemikiran();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('user/koleksi-buku-pemikiran-user', $data);
    $this->view('templates/5_footer');
  }

  // Table Buku Umum
  public function bukuUmum()
  {
    $data['title'] = 'Promo Paket Buku Hemat';
    $data['buku_umum'] = $this->model('Model_Buku_Umum')->bukuUmum();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('user/koleksi-buku-umum-user', $data);
    $this->view('templates/5_footer');
  }
}
