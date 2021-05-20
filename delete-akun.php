<?php 

include 'koneksi.php';

$id = $_GET['NAME'];
mysqli_query($koneksi, "DELETE FROM user WHERE NAME='$id'");
 
header("location:admin.php?pesan=hapus");
?>