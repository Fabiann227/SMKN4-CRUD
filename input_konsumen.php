<?php
include"koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$query = "insert INTO data_konsumen SET nama = '$nama', alamat = '$alamat', no_telp = '$telp'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:konsumen.php');

?>

