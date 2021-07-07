  <div class="container mt-4">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
        <p class="card-subtitle text-muted"><?= $data['mhs']['email']; ?></p>
        <p><?= $data['mhs']['jurusan']; ?></p>
        <a href="<?= URLROOT; ?>/mahasiswa">Back</a>
      </div>
    </div>
  </div>