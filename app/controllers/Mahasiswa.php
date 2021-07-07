<?php

class Mahasiswa extends Controller{
  public function index(){
    $data['judul'] = 'Daftar Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('includes/head', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('includes/footer');
  }

  public function detail($id){
    $data['judul'] = 'Detail Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('includes/head', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('includes/footer');
  }

  public function tambah(){
    if($this->model('Mahasiswa_model')->AddMahasiswaData($_POST) > 0){
      Flasher::setFlash('berhasil','ditambahkan', 'success');
      header('location:'. URLROOT . '/mahasiswa');
      exit;
    }
    else {
      Flasher::setFlash('gagal','ditambahkan', 'danger');
      header('location:'. URLROOT . '/mahasiswa');
      exit;
    }
  }

  public function delete($id){
    if($this->model('Mahasiswa_model')->DeleteMahasiswaData($id) > 0){
      Flasher::setFlash('berhasil','dihapus', 'success');
      header('location:'. URLROOT . '/mahasiswa');
      exit;
    }
    else {
      Flasher::setFlash('gagal','dihapus', 'danger');
      header('location:'. URLROOT . '/mahasiswa');
      exit;
    }
  }

  public function getChange(){
    echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
  }

  public function change(){
    if($this->model('Mahasiswa_model')->ChangeMahasiswaData($_POST) > 0){
      Flasher::setFlash('berhasil','diubah', 'success');
      header('location:'. URLROOT . '/mahasiswa');
      exit;
    }
    else {
      Flasher::setFlash('gagal','diubah', 'danger');
      header('location:'. URLROOT . '/mahasiswa');
      exit;
    }
  }

  public function search(){
    $data['judul'] = 'Daftar Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByKeyword();
    $this->view('includes/head', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('includes/footer');
  }
}