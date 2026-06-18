<?php include('header.php') ?>

<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");
$query = "SELECT * FROM product";

$result = mysqli_query($conn, $query);
?>



<section class="collection" id="products_menu">
  <h1>The Collection</h1>
  <p>
    Every product tells a story. Browse our collection of carefully crafted
    items and <br />support creativity within the NSBM community.
  </p>
</section>

<section class="products">
  <?php
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="product-card">
      <img src="./admin-pages/product_image/<?php echo $row['image']  ?>" alt="nothing" />
      <h3><?php echo $row['p_name'] ?></h3>
      <p>Rs.<?php echo $row['price'] ?></p>
      <?php
      if ($_SESSION['u_email'] && $_SESSION['u_password'] && $_SESSION['u_role'] == "user") {
      ?>
        <button><a href="orders.php">Buy Now</a></button>
      <?php
      } else {
      ?>
        <button><a href="./login-register-pages/login_page.php?login=Please login to purchase items.">Buy Now</a></button>
      <?php
      }
      ?>

    </div>
  <?php
  }

  ?>
</section>



<?php include('footer.php') ?>