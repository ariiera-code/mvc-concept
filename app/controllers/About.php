<?php

class About extends Controller{ // controller
  public function index($nama = 'Nibros', $pekerjaan = 'Pesepakbola'){ // pastikan mempunyai method default index
    $data['judul'] = 'About';
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $this->view('includes/head', $data);
    $this->view('about/index', $data);
    $this->view('includes/footer');
  }
  public function page(){ // method
    $this->view('includes/head');
    $this->view('about/page');
    $this->view('includes/footer');
  }
}