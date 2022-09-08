<?php
include"../koneksi.php";

$nama = $_POST['nama'];
$merek = $_POST['merek'];
$stok = $_POST['stok'];

$query = "insert INTO data_barang SET nama = '$nama', merek = '$merek', stok = '$stok'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:../barang.php');

?>

