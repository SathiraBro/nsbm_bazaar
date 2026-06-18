<?php include('header.php'); ?>

<?php
$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
?>

<div class="container mt-4">
    <h1>Products</h1>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + Add Product
    </button>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price (Rs.)</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['p_name'] ?></td>
                    <td><?php echo $row['category'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['stock'] ?></td>
                    <td>
                        <img src="../admin-pages/product_image/<?php echo $row['image'] ?>" width="100" alt="Pakaya">
                    </td>
                    <td>

                        <a class="btn btn-danger btn-sm">Edit</a>
                        <a class="btn btn-warning btn-sm" href="../config/delete_product_process.php?id=<?php echo $row['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>

    <form action="../config/add_product_process.php" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="p_name" class="form-label">Product Name :</label>
                            <input type="text" name="p_name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="category" class="form-label">Category : </label>
                            <input type="text" name="category" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="price" class="form-label">Price : </label>
                            <input type="number" name="price" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="stock" class="form-label">Stock : </label>
                            <input type="number" name="stock" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Image : </label>
                            <input type="file" name="image" class="form-control" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Add" name="add_product"></input>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>








<?php include('footer.php'); ?>