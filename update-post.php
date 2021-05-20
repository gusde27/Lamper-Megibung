<?php 

include 'koneksi.php';

$id = $_POST['DATA_T'];
$nama_t = $_POST['nama_t'];
$tipe = $_POST['tipe'];
$deksripsi = $_POST['deskripsi'];

mysqli_query($koneksi, "UPDATE postingan SET  TIPE ='$tipe', NAMA_T ='$nama_t', DESKRIPSI ='$deksripsi' WHERE FOTO_T='$id' ");
 
header("location:admin.php?pesan=Update");
?>