<?php include('header.php'); ?>

<?php
$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");
$query = "
SELECT orders.order_id,
       orders.user_email,
       orders.order_date,
       orders.status,
       product.p_name,
       product.price
FROM orders
INNER JOIN product
ON orders.product_id = product.id
";

$result = mysqli_query($conn, $query);

?>
<div class="container mt-4">

    <h2>Orders</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Order ID</th>
                <th>Customer Email</th>
                <th>Product</th>
                <th>Price</th>
                <th>Order Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['order_id']; ?></td>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['p_name']; ?></td>
                    <td>Rs. <?php echo $row['price']; ?></td>
                    <td><?php echo $row['order_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>


<?php include('footer.php'); ?>