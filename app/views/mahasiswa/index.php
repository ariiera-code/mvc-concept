  <div class="container mt-4">
    <div class="col-6">
      <?php Flasher::flash(); ?>
    </div>
    <div class="col-6">
    <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-3 buttonAddDataMahasiswa" data-bs-toggle="modal" data-bs-target="#formModal">
        Add Data
      </button>
      <h1><strong> Daftar Mahasiswa</strong></h1>
      <div class="row mt-2 mb-3">
        <div class="col-10">
          <form class="form-inline" action="<?= URLROOT; ?>/mahasiswa/search" method="post">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="keyword" id="keyword" autocomplete="off">
        </div>
        <div class="col-2">
          <button button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
      
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs): ?>
          <li class="list-group-item"><?= $mhs['nama']; ?>
            <a href="<?= URLROOT; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-outline-primary float-end" role="button">Detail</a>
            <a href="<?= URLROOT; ?>/mahasiswa/update/<?= $mhs['id']; ?>" class="btn btn-outline-success float-end me-2 showUpdateModal" role="button" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Update</a>
            <a href="<?= URLROOT; ?>/mahasiswa/delete/<?= $mhs['id']; ?>" class="btn btn-outline-danger float-end me-2" role="button" onclick="return confirm('Are you sure want to delete data?;')">Delete</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">Add Mahasiswa Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form action="<?= URLROOT; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
            <div class="form-group mb-2">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group mb-2">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <select class="form-select w-100 mt-2" id="jurusan" name="jurusan">
                <option selected>Pilih Jurusan...</option>
                <option value="Informatika">Informatika</option>
                <option value="Mesin">Mesin</option>
                <option value="Akuntansi">Akuntansi</option>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  