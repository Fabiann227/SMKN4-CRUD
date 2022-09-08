

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

    <link rel="stylesheet" href="style/materialize.min.css" />
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card z-depth-5">
                <div class="card-action cyan white-text">
                    <h3 align="center">Form Login</h3>
                </div>
                <form action="proses_login.php" method="post">
                <div class="card-content">
                    <div class="input-field">                        
                        <input placeholder="Username" type="text" name="username">
                    </div><br>
                    <div class="form-group">
                        <input placeholder="Password" type="Password" name="password">
                    </div><br>

                    <div class="input-field">
                        <button name="submit" class="btn-large waves-effect cyan btn" style="width: 100%"></i>login</button>
                    </div><br>
                </div></form>
            </div>
        </div>
    </div>
</body>
</html>