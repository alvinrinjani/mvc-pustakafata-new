<?php

class User extends Controller
{

  public function index()
  {
    $data['title'] = 'Home';
    $data['buku_anak'] = $this->model('Model_Buku_Anak')->bukuAnak();
    $data['buku_pemikiran'] = $this->model('Model_Buku_Pemikiran')->bukuPemikiran();
    $data['buku_umum'] = $this->model('Model_Buku_Umum')->bukuUmum();
    $data['buku_hemat'] = $this->model('Model_Buku_Paket_Hemat')->bukuHemat();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('user/index', $data);
    $this->view('templates/5_footer');
  }
}
