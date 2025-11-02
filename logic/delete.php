<?php 
include '../config/koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);
if($result){
    header("Location: ../index.php");
}else{
    echo "Error: Gagal menghapus data!";
}

?>