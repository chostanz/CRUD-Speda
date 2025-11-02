<?php 
include "config/koneksi.php";

// Ambil data mahasiswa berdasarkan ID
$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
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
          <h2>Update Mahasiswa</h2>
      <form action="logic/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>" >

        <div class="mb-3">
          <label for="NIM" class="form-label">NIM</label>
          <input type="number" class="form-control" name="nim" value="<?=$data['nim']?>" required>
        </div>
        <div class="mb-3">
          <label for="Nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" value="<?=$data['nama']?>" required>
        </div>
         <p>Jenis Kelamin</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="radioDefault1"
                    <?= ($data['jenis_kelamin'] == 'Laki-laki') ? 'checked' : '' ?>>
            <label class="form-check-label" for="radioDefault1">Laki-laki</label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="radioDefault2"
                <?= ($data['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>>
        <label class="form-check-label" for="radioDefault2">Perempuan</label>
        </div>
      <br>
      <button type="submit" class="btn btn-primary">Update</button>
      </form>
     
      </div>
</body>
</html>