<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <nav class="navbar navbar-expand-lg" style="margin-left:30px">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="Bootstrap" width="30" height="24">Speda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tambah.php">Tambah Mahasiswa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </nav>
      <div class="box">
          <h2>Tambah Mahasiswa</h2>
      <form action="logic/create.php" method="POST">
        <div class="mb-3">
          <label for="NIM" class="form-label">NIM</label>
          <input type="number" class="form-control" name="nim">
        </div>
        <div class="mb-3">
          <label for="Nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama">
        </div>
       <p>Jenis Kelamin</p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="radioDefault1">
        <label class="form-check-label" for="radioDefault1">
          Laki-laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="radioDefault2">
        <label class="form-check-label" for="radioDefault2">
          Perempuan
        </label>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     
      </div>
</body>
</html>