<?php
include "../config/koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin) VALUES (?, ?, ?)";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("sss", $nim, $nama, $jenis_kelamin);

if($stmt->execute()){
    header("Location: ../index.php");
}else{
    echo "Error : $stmt->error";
}
$stmt->close();
$koneksi->close();

exit;

?>