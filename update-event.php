<?php 

include 'koneksi.php';

$id = $_POST['DATA_E'];
$nama_e = $_POST['nama_e'];
$tanggal = $_POST['tanggal'];
$deksripsi = $_POST['deskripsi'];

mysqli_query($koneksi, "UPDATE event SET  TANGGAL ='$tanggal', NAMA_E ='$nama_e', DESKRIPSI ='$deksripsi' WHERE FOTO_E='$id' ");
 
header("location:admin.php?pesan=Update");
?>