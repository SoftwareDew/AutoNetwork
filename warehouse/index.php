<?php
include("../templates/header.php");
?>

<div class="posts-list w-100 p-5">
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
        if(isset($_SESSIO["delete"])){
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
<div class="d-flex flex-column flex-sm-row gap-2">
    <div class="button">
        <a class="btn btn-info" href="categoryManagement/index.php">Manage Categories</a>
    </div>

    <div class="button">
        <a class="btn btn-success" href="../warehouse/addproduct.php" >Add new Product</a>
    </div>
</div>

    <div class="container text-center">
        <div class="row row-cols-auto ">
            <?php
        include('../connect.php');
        $sqlSelect = "SELECT * FROM products";
        $result = mysqli_query($conn, $sqlSelect);

        if (mysqli_num_rows($result) > 0): 
            while ($data = mysqli_fetch_array($result)): 
        ?>
            <div class="col mx-1 my-1">
                <div class="card" style="width: 15rem;">
                <?php if (!empty($data['image'])): ?>
                        <img src="uploads/<?php echo htmlspecialchars($data['image']); ?>" 
                            alt="Current Image" 
                            style="width: 100%; height: 200px; object-fit: cover; border-radius: 2%;">
                    <?php else: ?>
                        <p>No image uploaded</p>
                    <?php endif; ?>

                <div class="card-body">
                    
                    <h5 class="card-title"><?php echo $data['productName']; ?></h5>
                    <p class="card-text"><?php echo $data['comments']; ?></p>
                    <div class="d-flex">
                        <p>Price for one: <?php echo $data['sellPrice']; ?></p>
                        <p>Quantity: <?php echo $data["quantity"]?></p>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <a class="btn btn-info" href="view.php?id=<?php echo $data["product_id"]; ?>">View</a>
                        <a class="btn btn-warning" href="editproduct.php?id=<?php echo $data["product_id"]; ?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $data["product_id"]; ?>">Delete</a>
                    </div>
                </div>
            </div>

        </div>

        <?php
            endwhile;
        else:
        ?>
            <div class="row row-cols-auto">
                <p colspan="6" class="text-center text-muted">No products found</p>
            </div>
        <?php endif; ?>
    </div>

</div>

<?php
include("../templates/footer.php");
?>