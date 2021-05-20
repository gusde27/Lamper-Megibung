<?php 

include 'koneksi.php';

$id = $_GET['NAME'];
mysqli_query($koneksi, "DELETE FROM produk WHERE NAMA_A='$id'");
 
header("location:admin.php?pesan=hapus");
?>