<?php

include './database/db_conn.php';
include './database/update_all_pro.php';


$sql = $conn->query("SELECT `id`, `category_name` FROM `product_categories`") or die($sql_error($conn));
$edit_id = $_GET['edit_id'];
// echo $edit_id;

$result = $conn->query("SELECT * FROM `products` WHERE id = $edit_id") or die($conn->error);
$row = $result->fetch_assoc();

?>

<?php include './includes/header.php'; ?>

<!-- Alert for Error if input is empty -->
<?php if (isset($error['alert'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $error['alert']; ?>
    </div>
    <!-- Alert for Error if input is not empty -->
<?php }
if (isset($error['success'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo $error['success']; ?>
    </div>
<?php } ?>



<div class="container my-4">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <div class="form-group">
            <label for="title_id">Product Title</label>
            <input type="text" name="title" class="form-control" id="title_id" aria-describedby="emailHelp" placeholder="Enter Product Title" value="<?php echo $row['product_title']; ?>">
        </div>

        <label for="Product_category">Product Category</label>
        <select id="Product_category" name="category_name" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <?php while ($res = $sql->fetch_assoc()) { ?>
                <?php if ($res['id'] == $row['product_category']) {  ?>
                    <option selected value="<?php echo $res['id']; ?>"><?php echo $res['category_name']; ?></option>
                <?php } else {  ?>
                    <option value="<?php echo $res['id']; ?>"><?php echo $res['category_name']; ?></option>
                <?php } ?>
            <?php } ?>
        </select>

        <div class="form-group">
            <label for="Short_description">Product Short Description</label>
            <input type="text" class="form-control" name="short_des" id="Short_description" aria-describedby="emailHelp" placeholder="Enter Product short description" value="<?php echo $row['product_short_desc']; ?>">
        </div>



        <div class="form-group">
            <label for="long_des">Enter Product Long Description</label>
            <textarea class="form-control" name="long_des" id="long_des" rows="3" placeholder="Enter Product long description"><?php echo $row['product_long_desc']; ?></textarea>
        </div>



        <div class="form-group">
            <label for="quantity">Product Quantity</label>
            <input type="number" name="quantity" min="1" max="3" class="form-control" id="quantity" aria-describedby="emailHelp" placeholder="Enter Product Quantity" value="<?php echo $row['product_quantity']; ?>">
        </div>

        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="number" name="price" min="1" id="price" class="form-control" placeholder="Enter Product Price" value="<?php echo $row['product_price']; ?>">
        </div>

        <div class="form-group">
            <label for="discount">Discount</label>
            <input type="number" name="discount" min="0" id="discount" class="form-control" placeholder=" Enter Product Discount" value="<?php echo $row['discount']; ?>">
        </div>

        <button type="submit" name="update" class="btn btn-success mt-3">Update</button>


    </form>
</div>



<?php include './includes/footer.php'; ?>
