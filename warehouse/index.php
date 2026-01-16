<?php
    $title = "warehouse";
    $page_css = "../assets/css/warehouse.css";
include("../templates/header.php");
?>

<div class="posts-list w-100 p-1 justify-content-center ">
    <?php
        if(isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
        <?php
        if(isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php
                echo $_SESSION["update"];
            ?>
        </div>
        <?php
            unset($_SESSION["update"]);
        }
        ?>
        <?php
        if(isset($_SESSION["delete"])){
        ?>
        <div class="alert alert-success">
            <?php
                echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
    ?>

<div class="container my-3">

    <!-- Buttons -->
    <div class="d-flex justify-content-center gap-2 mb-3">
        <a class="btn btn-info" href="categoryManagement/index.php">Manage Categories</a>
        <a class="btn btn-success" href="../warehouse/addproduct.php">Add new Product</a>
    </div>

    <!-- Product Grid -->
    <div class="d-grid"
         style="
            grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
            gap: 0.5vw;
         ">

        <?php
        include('../connect.php');
        $sqlSelect = "SELECT * FROM products";
        $result = mysqli_query($conn, $sqlSelect);

        if (mysqli_num_rows($result) > 0):
            while ($data = mysqli_fetch_array($result)):
        ?>

        <div class="card h-100">

            <?php if (!empty($data['image'])): ?>
                <img src="uploads/<?php echo htmlspecialchars($data['image']); ?>"
                     alt="Product image"
                     style="width:100%; height:200px; object-fit:cover;">
            <?php else: ?>
                <div class="text-muted text-center p-4">No image</div>
            <?php endif; ?>

            <div class="card-body d-flex flex-column">

                <h5 class="card-title">
                    <?php echo htmlspecialchars($data['productName']); ?>
                </h5>

                <p class="card-text small">
                    <?php echo htmlspecialchars($data['comments']); ?>
                </p>

                <p class="mb-1">Price: <?php echo $data['sellPrice']; ?></p>
                <p class="mb-2">Qty: <?php echo $data['quantity']; ?></p>

                <div class="mt-auto d-flex justify-content-between">
                    <a class="btn btn-info btn-sm"
                       href="view.php?id=<?php echo $data['product_id']; ?>">View</a>

                    <a class="btn btn-warning btn-sm"
                       href="editproduct.php?id=<?php echo $data['product_id']; ?>">Edit</a>

                    <a class="btn btn-danger btn-sm"
                       href="delete.php?id=<?php echo $data['product_id']; ?>">Delete</a>
                </div>

            </div>
        </div>

        <?php
            endwhile;
        else:
        ?>
            <p class="text-center text-muted">No products found</p>
        <?php endif; ?>

    </div>
</div>


</div>

<?php
include("../templates/footer.php");
?>