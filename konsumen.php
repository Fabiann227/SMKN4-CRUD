<html>
<title>Konsumen</title>
<head>
	<link rel="stylesheet" href="style/materialize.min.css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav>
  <div class="nav-wrapper indigo lighten-2">
    <a href="index.php" class="brand-logo" style="margin-left:1%">Menu Utama</a>
      <ul class="right hide-on-med-and-down">
		<li><a href="barang.php">Barang</a></li>
		<li class="active"><a href="konsumen.php">Konsumen</a></li>
		<li><a href="login.php" class="waves-effect indigo lighten-1 btn">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
	  	<li><a href="barang.php">Barang</a></li>
		<li><a href="konsumen.php">Konsumen</a></li>
		<li><a href="login.php">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>List Konsumen</h5><hr>
				</center>
			</p>
			<br>
			<p>
				<a href="tambah_konsumen.php" class="waves-effect indigo lighten-1 btn">Tambah</a>
			</p>
			<table class="striped">
				<tr>
					<th>
						No 
					</th>
					<th>
						Nama 
					</th>
					<th>
						Alamat
					</th>
					<th>
						No Telp
					</th>
					<th>
						Opsi
					</th>
				</tr>
					<?php
						include"koneksi.php";
						$no = 1;
						$data = mysqli_query ($koneksi, " select id, nama, alamat, no_telp from data_konsumen order by id DESC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $row['nama']; ?>
					</td>
					<td>
						<?php echo $row['alamat']; ?>
					</td>
					<td>
						<?php echo $row['no_telp']; ?>
					</td>
					<td>
						<a class="btn orange" href="detail_konsumen.php?id=<?php echo $row['id']; ?>">Detail</a> 
						<a class="btn green" href="edit_konsumen.php?id=<?php echo $row['id']; ?>">Edit</a> 
						<a class="btn red" href="hapus_konsumen.php?id=<?php echo $row['id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="style/materialize.min.js"></script>
<script src="style/init.js"></script>
</body>
</html>