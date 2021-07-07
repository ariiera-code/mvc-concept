<?php
class Home extends Controller{ // jangan lupa exnteds class Controller
  public function index(){ // method defaultnya
    $data['judul'] = 'Home';
    $this->view('includes/head', $data);
    $this->view('home/index');
    $this->view('includes/footer');
  }
}