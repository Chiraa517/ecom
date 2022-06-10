<?php include './database/db_conn.php'  ?>
<?php include './includes/header.php'  ?>
<?php include './database/insert_products.php'  ?>


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

        <div class="form-group">
            <label for="title_id">Product Title</label>
            <input type="text" name="title" class="form-control" id="title_id" aria-describedby="emailHelp"
                placeholder="Enter Product Title" value="<?php echo $title ?? ''  ?>">
        </div>

        <label for="Product_category">Product Category</label>
        <select id="Product_category" name="product_category" class="form-select form-select-lg mb-3"
            aria-label=".form-select-lg example">
            <!-- getting category name form Database  -->
            <?php $result = $conn->query("SELECT `id`, `category_name` FROM `product_categories` ");  ?>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <option selected value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
            <?php } ?>
        </select>

        <div class="form-group">
            <label for="Short_description">Product Short Description</label>
            <input type="text" class="form-control" name="short_des" id="Short_description" aria-describedby="emailHelp"
                placeholder="Enter Product short description" value="<?php echo $short_des ?? ''  ?>">
        </div>



        <div class="form-group">
            <label for="long_des">Enter Product Long Description</label>
            <textarea class="form-control" name="long_des" id="long_des" rows="3"
                placeholder="Enter Product long description" value=""><?php echo $long_des ?? ''  ?></textarea>
        </div>


        <div class="mb-3">
            <label for="formFile" class="form-label">Add Thumbnail</label>
            <input class="form-control" name="thumbnail" type="file" id="formFile" accept="image/png, image/jpeg">
        </div>

        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Add Only 3 Images</label>
            <input class="form-control" name="product_img[]" type="file" id="formFileMultiple" multiple
                accept="image/png, image/jpeg">
        </div>

        <div class="form-group">
            <label for="quantity">Product Quantity</label>
            <input type="number" name="quantity" min="1" max="3" class="form-control" id="quantity"
                aria-describedby="emailHelp" placeholder="Enter Product Quantity"
                value="<?php echo $quantity ?? ''  ?>">
        </div>

        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="number" name="price" min="1" id="price" class="form-control" placeholder="Enter Product Price"
                value="<?php echo $price ?? ''  ?>">
        </div>

        <div class="form-group">
            <label for="discount">Discount</label>
            <input type="number" name="discount" min="0" id="discount" class="form-control"
                placeholder=" Enter Product Discount" value="<?php echo $discount ?? ''  ?>">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Add Product</button>

    </form>
</div>


<?php include './includes/footer.php'; ?>
