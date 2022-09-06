<?php
include"koneksi.php";


$query = "DELETE FROM data_konsumen WHERE id ='$_GET[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:konsumen.php');

?>

