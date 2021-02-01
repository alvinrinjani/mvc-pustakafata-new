<?php

class KoleksiBuku extends Controller
{

  public function index()
  {
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
  // Table Buku Pemikiran
  // Table Buku Umum
}
