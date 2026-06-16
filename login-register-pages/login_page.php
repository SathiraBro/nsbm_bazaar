<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="./style.css?v=2"" />
</head>

<body>
  <div class=" container">


  <h1>Welcome to NSBM Bazaar</h1>
  <div class="form-box active" id="login-form">
    <form action="../config/login_process.php" method="post">
      <h2>Login</h2>
      <input type="email" name="email" placeholder="Email" required />
      <input
        type="password"
        name="password"
        placeholder="Password"
        required />
      <button type="submit" name="login">Login</button>


      <h6 class="not-valid-values">
        <?php
        if (isset($_GET['message'])) {
          echo $_GET['message'];
        }
        ?>
      </h6>
      <p>
        Don't have an account?
        <a href="./register_page.php">Register</a>
      </p>
    </form>
  </div>
  </div>
  </body>

</html>