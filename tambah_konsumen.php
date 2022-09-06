<html>
<title>Tambah Konsumen</title>

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
          <h5>Tambah Data Konsumen</h5><hr>
      </center>
  </p>
  <br>

  <div class="row">
    <form class="col s12" method="post" action="input_konsumen.php">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="" name="nama" type="text" class="validate">
          <label for="nama">Nama Konsumen</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="" name="alamat" type="text" class="validate">
          <label for="alamat">Alamat Konsumen</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          Nomor Telpon:
          <div class="input-field inline">
            <input name="telp" type="number" value="08" class="validate">
          </div>
        </div>
      </div>
      <button type="submit" class="btn green">Simpan</button>
      <a href="konsumen.php" class="btn red" style="margin-right:1%;">Batal</a>
    </form>
  </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="style/materialize.min.js"></script>
<script src="style/init.js"></script>
</body>

</html>