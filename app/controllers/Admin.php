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

  // DELETE BUKU
  // DELETE BUKU
  // DELETE BUKU
  public function bukuAnak()
  {
    $data['title'] = 'Hapus Data Buku Anak';
    $data['buku_anak'] = $this->model('Model_Buku_Anak')->bukuAnak();

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar-admin');
    $this->view('templates/3_topbar');
    $this->view('admin/table-buku-anak', $data);
    $this->view('templates/5_footer');
  }

  public function deleteBukuAnak($slug)
  {
    if ($this->model('Model_Buku_Anak')->deleteBukuAnak($slug) > 0) {
      Flasher::setFlash('berhasil', 'buku anak', 'dihapus', 'success', BASEURL);
      header('Location:' . BASEURL . '/admin');
      exit;
    }
  }
}
