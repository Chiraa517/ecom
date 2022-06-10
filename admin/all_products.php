<?php include './includes/header.php';
// include './database/delete_all_pro.php';
include './database/db_conn.php';


$result = $conn->query("SELECT products.*, product_categories.category_name FROM products LEFT JOIN product_categories ON products.product_category = product_categories.id") or die($conn->error);
// print_r($result->fetch_assoc());
// die;
?>


<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Products</h1>
        <a href="add_product.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Add product</a>
    </div>


    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Thumb</th>
                                            <th>Product Title</th>
                                            <th>Product Category</th>
                                            <th>Product S.Description</th>
                                            <th>Product Quantity</th>
                                            <th>Product Price</th>
                                            <th>Product Discount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Thumb</th>
                                            <th>Product Title</th>
                                            <th>Product Category</th>
                                            <th>Product S.Description</th>
                                            <th>Product Quantity</th>
                                            <th>Product Price</th>
                                            <th>Product Discount</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="img-fluid" src="./upload_img/<?php echo $row['product_thumbnail'] ?>" width="100px">
                                                </td>
                                                <td><?php echo $row['product_title']; ?></td>
                                                <td><?php echo $row['category_name']; ?></td>
                                                <td><?php echo $row['product_short_desc']; ?></td>
                                                <td><?php echo $row['product_quantity']; ?></td>
                                                <td><?php echo $row['product_price']; ?></td>
                                                <td><?php echo $row['discount']; ?></td>
                                                <td>
                                                    <a href="edit_all_pro.php?edit_id=<?php echo $row['id']  ?>" class="btn btn-primary">Edit</a>
                                                    <!-- Edit Images -->
                                                    <a href="edit_pro_img.php?edit_img_id=<?php echo $row['id']  ?>" class="btn btn-primary my-2">Edit Images</a>
                                                    <!-- Delete -->
                                                    <button class="delete btn btn-danger" id="<?php echo $row['id']  ?>" data-bs-toggle="modal" data-bs-target="#deleteData">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->






    <!-- Delete modal -->

    <!-- Modal -->
    <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this data?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    <a href="" class="del_prod btn btn-danger">Yes</a>
                </div>
            </div>
        </div>
    </div>



    <!-- JS  -->

    <script>
        let del = document.querySelectorAll('.delete');
        for (let i = 0; i < del.length; i++) {
            // console.log(del[i]);
            del[i].addEventListener('click', function() {
                // console.log('clicked');
                let id = this.id;
                console.log(id);
                let prod_del = document.querySelector('.del_prod');
                // console.log(prod_del);
                prod_del.setAttribute('href', './database/delete_all_pro.php?delete_id=' + this.id);
            })
        }
    </script>


    <?php include './includes/footer.php' ?>
