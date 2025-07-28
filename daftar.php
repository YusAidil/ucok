<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['email'])){
  header('location: halaman1.php');
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>daftar</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <script src="bootstrap/js2/bootstrap.bundle.js"></script>
    <style type="text/css">
      body {
        height: 100vh;
        display: center;
        align-content: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: chocolate;
        
      }

      .form-login {
        max-width: 330px;
        margin: auto;
        align-items: center;
      }
    </style>
    <script type="text/javascript">
      function validateForm(){
        var password = document.getElementById("password").value;
        var noHp = document.getElementById("noHp").value;

        //alert('daftar berhasil')
        return true;
      }
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <form class="form-login" onsubmit="return validateForm()" method="post" action="regist.php">
        <h3 class="text-center text-light">Daftar Akun</h3>
<?php
if(isset($_SESSION['log'])){
?>
        <div class="alert alert-warning alert-danger fade show" role="alert">
          <strong>Gagal!</strong> email sudah terdaftar ! 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
session_unset();
}
?>
        <div class="form-floating mb-2">
          <input
            type="text"
            name="email"
            class="form-control"
            placeholder="email"
            required
          />
          <label for="">email</label>
        </div>

        <div class="form-floating mb-2">
          <input
            id="password"
            type="password"
            name="password"
            class="form-control"
            placeholder="Password"
            required
          />
          <label for="">Password</label>
        </div>

        <button
          href="index.html"
          class="btn btn-primary w-100 text-light mb-2"
          type="submit"
        >
          daftar
        </button>
        <p class="text-light">
          sudah punya akun <a href="formlogin.php">masuk!</a>
        </p>
      </form>
    </div>
  </body>
</html>