<?php
require_once '../includes/db.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row" style="margin: 100px auto;width: 400px;">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <div class="text-center">
                <b>Selamat Datang</b>
              </div>
            </div>
            <div class="card-body">
              <?php
                if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
                  echo '<div class="text-center">Hai, '.$_SESSION['is_login'].'<br/><a href="logout.php" class="btn btn-danger btn-sm" style="border-radius:0px;">Keluar</a></div>';
                } else {
                  echo '<div class="text-center">Hai,Tamu<br/><a href="login.php" class="btn btn-danger btn-sm" style="border-radius:0px;">Masuk Akun</a> <a href="./register.php" class="btn btn-success btn-sm" style="border-radius:0px;">Buat Akun</a></div>';
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>