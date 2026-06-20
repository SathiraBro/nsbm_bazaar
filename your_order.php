<?php include('header.php') ?>

<?php

if (isset($_GET['msg'])) {
?>
    <div class="alert alert-success">
        <?php echo $_GET['msg']; ?>
    </div>
<?php
}

?>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");
$email = $_SESSION['u_email'];
$query = "
SELECT orders.order_date,
       product.p_name,
       product.price,
       product.image
FROM orders
INNER JOIN product
ON orders.product_id = product.id
WHERE orders.user_email = '$email'
AND orders.status = 'Pending'
";

$result = mysqli_query($conn, $query);

?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
    <div class="container mt-4">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td>
                            <img src="./admin-pages/product_image/<?php echo $row['image']; ?>" width="100">
                        </td>

                        <td>
                            <?php echo $row['p_name']; ?>
                        </td>

                        <td>
                            Rs. <?php echo $row['price']; ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <form action="checkout.php" method="POST">
            <button type="submit" class="btn btn-success">
                Checkout
            </button>
        </form>
    </div>

<?php
} else {
?>
    <div class="container mt-5 text-center">
        <h2>No Orders Found</h2>
        <p>You haven't ordered any products yet.</p>

        <a href="index.php" class="btn btn-success">
            Browse Products
        </a>
    </div>
<?php
}
?>

</div>