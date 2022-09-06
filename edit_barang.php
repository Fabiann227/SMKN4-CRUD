<html>
<title>Edit Barang</title>

<head>
<link rel="stylesheet" href="style/materialize.min.css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<nav>
  <div class="nav-wrapper indigo lighten-2">
    <a href="index.php" class="brand-logo" style="margin-left:1%">Menu Utama</a>
      <ul class="right hide-on-med-and-down">
		<li class="active"><a href="barang.php">Barang</a></li>
		<li><a href="konsumen.php">Konsumen</a></li>
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
<?php
    include"koneksi.php";
    $no = 1;
    $data = mysqli_query ($koneksi, " select id, nama, merek, stok from data_barang where id = $_GET[id]");
    $row = mysqli_fetch_array ($data);	
?>
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <center>
                    <h5>Edit Data Barang</h5>
                    <hr>
                </center>
            </p>
            <br>

            <form role="form" method="post" action="update_barang.php">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ; ?>">
                    <input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
                </div>
                <div class="form-group">
                    <label>Merek</label>
                    <input class="form-control" name="merek" value="<?php echo $row['merek'] ; ?>">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input class="form-control" name="stok" value="<?php echo $row['stok'] ; ?>">
                </div>
                <button type="submit" class="btn green">Perbarui</button>
                <a href="barang.php" class="btn red" style="margin-right:1%;">Batal</a>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="style/materialize.min.js"></script>
<script src="style/init.js"></script>
</body>

</html>