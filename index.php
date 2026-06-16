<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="./style.css?v=2" />
</head>

<body class="home-body">
  <nav>
    <a class="my_logo" href="./index.php">NSBM Bazaar</a>
    <ul>
      <li>
        <a href="#products_menu">Products</a>
      </li>
      <li>
        <a href="#">Contact</a>
      </li>
      <?php session_start();
      if (
        isset($_SESSION['u_email']) &&
        $_SESSION['u_password']
      ) { ?>
        <li>
          <a class="logout_btn" href="./login-register-pages/logout.php">Logout</a>
        </li>
      <?php } else { ?>
        <li>
          <a href="./login-register-pages/register_page.php">Register</a>
        </li>

        <li>
          <a href="./login-register-pages/login_page.php">Login</a>
        </li>
      <?php } ?>
    </ul>
  </nav>
  <section class="collection" id="products_menu">
    <h1>The Collection</h1>
    <p>
      Every product tells a story. Browse our collection of carefully crafted
      items and <br />support creativity within the NSBM community.
    </p>
  </section>

  <section class="products">
    <div class="product-card">
      <img src="images/download.jpg" alt="" />
      <h3>Hand Bag</h3>
      <p>Rs.5000.00</p>
      <button>Buy Now</button>
    </div>
  </section>



  <section class="footer">
    <h1>NSBM BAZAAR</h1>

    <div>
      <h2>Services</h2>
      <ul>
        <li> <a href="#">Web Development</a><br></li>
        <li><a href="#">Mobile App Development</a><br></li>
        <li><a href="#">DevOps</a><br></li>
      </ul>
    </div>

    <div>
      <h2>Social Links</h2>
      <ul>
        <li> <a href="#">Instergram</a></li>
        <li> <a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
      </ul>
    </div>

    <div>
      <h2>Quick Links</h2>
      <ul>
        <li><a href="#">Home</a><br></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact</a></li>
      </ul>


    </div>

    <div>
      <h2>Locations</h2>
      <ul>
        <li>
          <a>NSBM Green University</a>
        </li>
        <li><a>Gmail : nsbmbazaar@gmail.com</a></li>
        <li><a>Contact : 074 - 3809575 / 077 - 6595069</a></li>
      </ul>
    </div>

  </section>
  <hr>
  <div class="copyright">
    <p>&copy NSBM BAZZAR. All Right Reserved.</p>
  </div>
</body>

</html>