<html>
<title>Detail Konsumen</title>
<head>
<link rel="stylesheet" href="../style/materialize.min.css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav>
  <div class="nav-wrapper indigo lighten-2">
    <a href="../index.php" class="brand-logo" style="margin-left:1%">Menu Utama</a>
      <ul class="right hide-on-med-and-down">
		<li><a href="../barang.php">Barang</a></li>
		<li class="active"><a href="../konsumen.php">Konsumen</a></li>
		<li><a href="../login.php" class="waves-effect indigo lighten-1 btn">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
	  	<li><a href="../barang.php">Barang</a></li>
		<li><a href="../konsumen.php">Konsumen</a></li>
		<li><a href="../login.php">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>

<?php
	include"../koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select id, nama, alamat, no_telp from data_konsumen where id = $_GET[id]");
	$row = mysqli_fetch_array ($data);
?>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Detail Konsumen</h5><hr>
				</center>
			</p>
			<br>
			<p>
				<a class="btn red lighten-2" href="../konsumen.php">Kembali</a>
			</p>
			<table class="table table-stripped">
				<tr>
					<td style="width:10%;">
						Nama 
					</td>
					<td>
						: <?php echo $row['nama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width:10%;">
						Alamat
					</td>
					<td>
						: <?php echo $row['alamat']; ?>
					</td>
				</tr>
				<tr>					
					<td>
						No Telp
					</td>
					<td>
						: <?php echo $row['no_telp']; ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../style/materialize.min.js"></script>
<script src="../style/init.js"></script>
</body>
</html>