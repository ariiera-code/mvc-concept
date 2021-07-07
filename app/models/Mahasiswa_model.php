<?php

class Mahasiswa_model{

  private $table = 'mahasiswa';
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function getAllMahasiswa(){
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMahasiswaById($id){
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id',$id);
    return $this->db->single();
  }

  public function AddMahasiswaData($data){
    $query = "INSERT INTO mahasiswa VALUES ('', :nama, :email, :jurusan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function DeleteMahasiswaData($id){
    $query = "DELETE FROM mahasiswa WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function ChangeMahasiswaData($data){
    $query = "UPDATE mahasiswa SET nama = :nama, email = :email, jurusan = :jurusan WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function getMahasiswaByKeyword(){
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }

  /* private $mhs = [
    [
      "nama" => "Nibros Ari",
      "nrp" => "3948902",
      "email" => "nibros@gmail.com",
      "jurusan" => "Informatika"
    ],
    [
      "nama" => "Ari Wibowo",
      "nrp" => "3948902",
      "email" => "ari@gmail.com",
      "jurusan" => "Akuntansi"
    ]
  ]; */
}