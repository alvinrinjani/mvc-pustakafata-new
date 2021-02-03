<?php

class KoleksiBuku extends Controller
{

  public function index()
  {
    $this->view('404/index');
  }

  // Buku Hemat
  // Buku Hemat
  // Buku Hemat
  // Table
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
  // Detail
  public function detailBukuHemat($slug)
  {
    $data['title'] = 'Detail Buku';
    $data['buku_hemat'] = $this->model('Model_Buku_Paket_Hemat')->detail_BukuHemat($slug);

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('user/detail-buku-hemat-user', $data);
    $this->view('templates/5_footer');
  }

  // Buku Anak
  // Buku Anak
  // Buku Anak
  // Table
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
  // Detail
  public function detailBukuAnak($slug)
  {
    $data['title'] = 'Detail Buku';
    $data['buku_anak'] = $this->model('Model_Buku_Anak')->detail_BukuAnak($slug);

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('user/detail-buku-anak-user', $data);
    $this->view('templates/5_footer');
  }


  // Buku Pemikiran
  // Buku Pemikiran
  // Buku Pemikiran
  // Table 
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
  // Detail
  public function detailBukuPemikiran($slug)
  {
    $data['title'] = 'Detail Buku';
    $data['buku_pemikiran'] = $this->model('Model_Buku_Pemikiran')->detail_BukuPemikiran($slug);

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('user/detail-buku-pemikiran-user', $data['buku_pemikiran']);
    $this->view('templates/5_footer');
  }

  // Buku Umum
  // Buku Umum
  // Buku Umum
  // Table 
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
  // Detail
  public function detailBukuUmum($slug)
  {
    $data['title'] = 'Detail Buku';
    $data['buku_umum'] = $this->model('Model_Buku_Umum')->detail_BukuUmum($slug);

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('user/detail-buku-umum-user', $data['buku_umum']);
    $this->view('templates/5_footer');
  }
}
