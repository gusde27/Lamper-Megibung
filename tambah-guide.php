<?php 
include 'koneksi.php';

$username = $_POST['username'];
$pass = $_POST['pass'];

$query = "INSERT INTO user (USERNAME, PASSWORD, LEVEL) VALUES ('$username','$pass', 0)";

mysqli_query($koneksi, $query);

header("location:admin.php")

?>