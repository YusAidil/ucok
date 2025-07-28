<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form login</title>
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
  </head>
  <body>
    <div class="container-fluid">
      <form class="form-login" method="post" action="login.php">
        <h3 class="text-center text-light">Masuk</h3>
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
            type="password"
            name="password"
            class="form-control"
            placeholder="Password"
            required
          />
          <label for="">Password</label>
        </div>


        <button
          class="btn btn-primary w-100 text-light mb-2"
          type="submit"
        >
          Masuk
        </button>
        <p class="text-light">
          Tidak punya akun <a href="daftar.php">Daftar!</a>
        </p>
      </form>
    </div>
  </body>
</html>
