<?php

class Contact extends Controller
{
  public function index()
  {
    $data['title'] = 'Hubungi Kami';

    $this->view('templates/1_header', $data);
    $this->view('templates/2_sidebar');
    $this->view('templates/3_topbar');
    $this->view('contact/index', $data);
    $this->view('templates/5_footer');
  }
}
