<?php

class Admin extends Controller
{
  public function index()
  {
    $data['title'] = 'Admin';

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar-admin');
    $this->view('templates/3_topbar');
    $this->view('admin/index', $data);
    $this->view('templates/5_footer');
  }


  // INPUT BUKU
  // INPUT BUKU
  // INPUT BUKU
  public function inputBuku()
  {
    $data['title'] = 'Input Data Buku';
    if (isset($_POST['submit']) && empty($_POST['radios'])) {
      Flasher::setFlash('gagal', 'buku', 'ditambahkan', 'danger', BASEURL);
      header('Location:' . BASEURL . '/admin/index');
      exit;
    } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_hemat') {
      if ($this->model('Model_Buku_Paket_Hemat')->input_BukuHemat($_POST) > 0) {
        Flasher::setFlash('berhasil', 'paket buku hemat', 'ditambahkan', 'success', BASEURL . '#buku_hemat');
        header('Location:' . BASEURL . '/admin');
        exit;
      }
    } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_anak') {
      if ($this->model('Model_Buku_Anak')->input_BukuAnak($_POST) > 0) {
        Flasher::setFlash('berhasil', 'buku anak', 'ditambahkan', 'success', BASEURL . '#buku_anak');
        header('Location:' . BASEURL . '/admin');
        exit;
      }
    } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_pemikiran') {
      if ($this->model('Model_Buku_Pemikiran')->input_BukuPemikiran($_POST) > 0) {
        Flasher::setFlash('berhasil', 'buku pemikiran', 'ditambahkan', 'success', BASEURL . '#buku_pemikiran');
        header('Location:' . BASEURL . '/admin');
        exit;
      }
    } elseif (isset($_POST['submit']) && $_POST['radios'] == 'buku_umum') {
      if ($this->model('Model_Buku_Umum')->input_BukuUmum($_POST) > 0) {
        Flasher::setFlash('berhasil', 'buku umum', 'ditambahkan', 'success', BASEURL . '#buku_umum');
        header('Location:' . BASEURL . '/admin');
        exit;
      }
    }

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar-admin');
    $this->view('templates/3_topbar');
    $this->view('admin/input-buku', $data);
    $this->view('templates/5_footer');
  }

  // TABLE BUKU ANAK
  // TABLE BUKU ANAK
  // TABLE BUKU ANAK
  public function bukuAnak()
  {
    $data['title'] = 'Data Buku Anak';
    $data['buku_anak'] = $this->model('Model_Buku_Anak')->bukuAnak();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar-admin');
    $this->view('templates/3_topbar');
    $this->view('admin/table-buku-anak', $data);
    $this->view('templates/5_footer');
  }

  // TABLE BUKU HEMAT
  // TABLE BUKU HEMAT
  // TABLE BUKU HEMAT
  public function bukuHemat()
  {
    $data['title'] = 'Data Paket Buku Hemat';
    $data['buku_hemat'] = $this->model('Model_Buku_Paket_Hemat')->bukuHemat();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar-admin');
    $this->view('templates/3_topbar');
    $this->view('admin/table-buku-hemat', $data);
    $this->view('templates/5_footer');
  }

  // TABLE BUKU Pemikiran
  // TABLE BUKU Pemikiran
  // TABLE BUKU Pemikiran
  public function bukuPemikiran()
  {
    $data['title'] = 'Data Buku Pemikiran';
    $data['buku_pemikiran'] = $this->model('Model_Buku_Pemikiran')->bukuPemikiran();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar-admin');
    $this->view('templates/3_topbar');
    $this->view('admin/table-buku-pemikiran', $data);
    $this->view('templates/5_footer');
  }

  // TABLE BUKU Umum
  // TABLE BUKU Umum
  // TABLE BUKU Umum
  public function bukuUmum()
  {
    $data['title'] = 'Data Buku Umum';
    $data['buku_umum'] = $this->model('Model_Buku_Umum')->bukuUmum();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar-admin');
    $this->view('templates/3_topbar');
    $this->view('admin/table-buku-umum', $data);
    $this->view('templates/5_footer');
  }

  // DELETE BUKU
  // DELETE BUKU
  // DELETE BUKU
  public function deleteBukuAnak($slug)
  {
    if ($this->model('Model_Buku_Anak')->deleteBukuAnak($slug) > 0) {
      Flasher::setFlash('berhasil', 'buku anak', 'dihapus', 'success', BASEURL . '#buku_anak');
      header('Location:' . BASEURL . '/admin');
      exit;
    }
  }

  public function deleteBukuHemat($slug)
  {
    if ($this->model('Model_Buku_Paket_Hemat')->deleteBukuHemat($slug) > 0) {
      Flasher::setFlash('berhasil', 'buku hemat', 'dihapus', 'success', BASEURL . '#buku_hemat');
      header('Location:' . BASEURL . '/admin');
      exit;
    }
  }

  public function deleteBukuPemikiran($slug)
  {
    if ($this->model('Model_Buku_Pemikiran')->deleteBukuPemikiran($slug) > 0) {
      Flasher::setFlash('berhasil', 'buku pemikiran', 'dihapus', 'success', BASEURL . '#buku_pemikiran');
      header('Location:' . BASEURL . '/admin');
      exit;
    }
  }

  public function deleteBukuUmum($slug)
  {
    if ($this->model('Model_Buku_Umum')->deleteBukuUmum($slug) > 0) {
      Flasher::setFlash('berhasil', 'buku umum', 'dihapus', 'success', BASEURL . '#buku_umum');
      header('Location:' . BASEURL . '/admin');
      exit;
    }
  }
}
