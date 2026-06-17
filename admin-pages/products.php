<?php include('header.php'); ?>


<div class="container mt-4">
    <h1>Products</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price (Rs.)</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>01</td>
                <td>Hang Bag</td>
                <td>Shopping</td>
                <td>5000</td>
                <td>45</td>
                <td>
                    <img src="../images/download.jpg" width="60" alt="Pakaya">
                </td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td>01</td>
                <td>Hang Bag</td>
                <td>Shopping</td>
                <td>5000</td>
                <td>45</td>
                <td>
                    <img src="../images/download.jpg" width="60" alt="Pakaya">
                </td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

    <button class="btn btn-success">+ Add Product</button>


</div>

<?php include('footer.php'); ?>