<?php 
include "config/koneksi.php";
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

if ($keyword) {
    $sql = "SELECT * FROM mahasiswa 
            WHERE nama LIKE '%$keyword%' 
            OR nim LIKE '%$keyword%' 
            OR jenis_kelamin LIKE '%$keyword%'";
} else {
    $sql = "SELECT * FROM mahasiswa";
}
$result = mysqli_query($koneksi, $sql);
?>

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
        <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="Speda" width="30" height="24">Speda</a>
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
      <h2>Daftar Mahasiswa</h2>
      <br>
      <form class="d-flex" role="search" method="GET" action="index.php">
          <input class="form-control me-2" type="search" name="keyword" placeholder="Cari Mahasiswa" value="<?=isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>" aria-label="Search"/>
          <button class="btn btn-outline-secondary" type="button">Cari</button>
        </form>
        <br>
    <table class="table table-dark table-striped-columns">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
       <?php if(mysqli_num_rows($result) > 0) : ?>
            <?php 
                $i = 1;
                while($data = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i++?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nim']?></td>
            <td><?= $data['jenis_kelamin']?></td>
              <td>      
            <button type="button" class="btn btn-primary"> <a href="update.php?id=<?=$data['id']?>">Update</a></button>
            <button type="button" class="btn btn-danger" onclick="showPopup('<?=$data['id'] ?>',  '<?= $data['nama'] ?>')">Delete</button>
          </td>
        </tr>
        <?php endwhile ?>
        <?php else : ?>
            <tr>
                <td colspan="5" style="text-align:center">Tidask ada data!</td>
            </tr>
            <?php endif; ?>
      </tbody>
    </table>
    </div>

    <div class="overlay" id="overlay">
      <div class="popup">
        <div class="popup-header">
          Hapus Data
          <span style="cursor:pointer;" onclick="closePopup()">✕</span>
        </div>
        <div class="popup-body">
          Apakah anda yakin menghapus mahasiswa dengan nama <strong id="namaMahasiswa"></strong>?
        </div>
        <div class="popup-footer">
          <button class="btn btn-batal" onclick="closePopup()">Batal</button>
          <a href="#" id="hapusLink" class="btn btn-hapus text-white text-decoration-none">Hapus</a>
        </div>
      </div>
    </div>
    <script>
        function showPopup(id, nama) {
            document.getElementById("overlay").style.display = "flex";
            document.getElementById("namaMahasiswa").textContent = nama;
            document.getElementById("hapusLink").href = "logic/delete.php?id=" + id;
        }

        function closePopup() {
          document.getElementById("overlay").style.display = "none";
        }

        function hapusData() {
          alert("Data berhasil dihapus!");
          closePopup();
        }
        </script>
</body>
</html>