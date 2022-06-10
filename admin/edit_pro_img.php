<?php

include './database/db_conn.php';
include './database/update_img.php';

$id = $_GET['edit_img_id'];

$result = $conn->query("SELECT id, product_images, product_thumbnail FROM products WHERE id = $id") or die($conn->error);
// print_r($result->fetch_assoc());
$row = $result->fetch_assoc();
// print_r($row['product_images']);
// die;


$explode_img = explode(',', $row['product_images']);
// print_r($explode_img);
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
        <input class="form-control" type="hidden" name="update_id" value="<?php echo $row['id'] ?>">
        <div class="mb-3">
            <div>
                <label for="formFile" class="form-label">Add Thumbnail</label>
                <input class="form-control" name="thumbnail" type="file" id="formFile" accept="image/png, image/jpeg">
            </div>

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Add Only 3 Images</label>
                <input class="form-control" name="product_img[]" type="file" id="formFileMultiple" multiple accept="image/png, image/jpeg">
            </div>
            <button name="update_img" class="btn btn-success">Update Images</button>
    </form>
</div>





<!-- Images SHOWING -->
<div class="d-flex justify-content-between">

    <div>
        <h3 class="h1 mt-5">Product Thumbnail</h3>
        <div class="card my-5" style="width: 18rem;">
            <img src="./upload_img/<?php echo $row['product_thumbnail'] ?>" class="card-img-top shadow-lg p-3 bg-body rounded" alt="Kch b ni">
        </div>
    </div>

    <div>
        <h3 class="h1 mt-5">Product Images</h3>
        <?php for ($i = 0; $i < count($explode_img); $i++) { ?>
            <div class="card my-5" style="width: 18rem;">
                <img src="./upload_img/<?php echo $explode_img[$i] ?>" class="card-img-top shadow-lg p-3 bg-body rounded" alt="HAHHAAHHHA">
            </div>
        <?php } ?>
    </div>

</div>



<?php include './includes/footer.php'; ?>
