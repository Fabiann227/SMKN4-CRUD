<?php
include"koneksi.php";



$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$query = "UPDATE data_konsumen SET nama = '$nama', alamat = '$alamat', no_telp = '$telp' WHERE id = '$id'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:konsumen.php');

?>

