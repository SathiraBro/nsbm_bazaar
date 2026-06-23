<?php include('header.php') ?>

<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");

if (isset($_GET['search']) && $_GET['search'] != "") {
  $search = $_GET['search'];
  $query = "SELECT * FROM product
              WHERE p_name LIKE '%$search%'
              OR price LIKE '%$search%'";
  $result = mysqli_query($conn, $query);
} else {
  $query = "SELECT * FROM product";
  $result = mysqli_query($conn, $query);
}

?>


<form action="" method="GET" class="search-form">
  <input
    type="text"
    name="search"
    class="search-input"
    placeholder="Search products..."
    value="<?php if (isset($_GET['search'])) echo $_GET['search']; ?>">
  <button type="submit" class="search-btn">
    Search
  </button>
</form>

<section class="collection" id="products_menu">
  <h1>The Collection</h1>
  <p>
    Every product tells a story. Browse our collection of carefully crafted
    items and <br />support creativity within the NSBM community.
  </p>
</section>

<section class="products">

  <?php
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <div class="product-card">
        <img src="./admin-pages/product_image/<?php echo $row['image']; ?>" alt="">
        <h3><?php echo $row['p_name']; ?></h3>
        <p>Rs.<?php echo $row['price']; ?></p>

        <?php
        if (isset($_SESSION['u_role']) && $_SESSION['u_role'] == "user") {
          echo '<a href="./login-register-pages/login_page.php?login=Please login to purchase items."><button>Buy</button></a>';
        } else if (isset($_SESSION['u_role']) && $_SESSION['u_role'] == "admin") {
          echo '<a href="./login-register-pages/login_page.php?login=Please login to purchase items."><button>Buy</button></a>';
        } else {
          echo '<a href="./login-register-pages/login_page.php?login=Please login to purchase items."><button>Buy</button></a>';
        }
        ?>
      </div>
  <?php
    }
  } else {
    echo "<h2>No products found.</h2>";
  }
  ?>

</section>



<?php include('footer.php') ?>