<?php
include"koneksi.php";



$id = $_POST['id'];
$nama = $_POST['nama'];
$merek = $_POST['merek'];
$stok = $_POST['stok'];

$query = "UPDATE data_barang SET nama = '$nama', merek = '$merek', stok = '$stok' WHERE id = '$id'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:barang.php');

?>

