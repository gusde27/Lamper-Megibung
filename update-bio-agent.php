<?php 
include 'koneksi.php';

session_start();

$nama = $_POST['nama'];
$nick = $_POST['nick'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];

$user = $_SESSION['USERNAME'];

$query = "UPDATE user SET 
						NAME='$nama',
						NICKNAME='$nick',
						NO_TELP='$telp',
						ALAMAT='$alamat',
						JK='$jk'
						WHERE USERNAME='$user' AND LEVEL = 2 ";

mysqli_query($koneksi,$query);

header("location:agent.php");

?>