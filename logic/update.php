<?php 
include "../config/koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$sql = "UPDATE mahasiswa SET nama='$nama', nim ='$nim', jenis_kelamin='$jenis_kelamin' WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: ../index.php");
}else{
    echo "Error : Gagal mengupdate data!";
}

?>