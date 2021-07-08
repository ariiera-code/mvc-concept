<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- <link rel="stylesheet" href="../app/lib/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" hreF="<?= URLROOT;?>/css/bootstrap.min.css">

  <script src="<?= URLROOT; ?>/js/bootstrap.min.js"></script>
  
  <title><?= $data['judul']; ?></title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= URLROOT; ?>/index">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= URLROOT; ?>/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URLROOT; ?>/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URLROOT; ?>/about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>