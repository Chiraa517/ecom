<?php include './includes/header.php';
include './database/db_conn.php';
include './database/insert_roles.php';
?>



<div class="container-fluid my-5">


    <!-- Pie Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add Role Name</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

                    <div class="mb-3">
                        <label for="role_name" class="form-label">Enter Role Name</label>
                        <input type="text" class="form-control mb-3" id="role_name" name="role_name" value="<?php echo $name ?? '' ?>">
                    </div>

                        <div class="form-text text-danger">
                            <?php echo $error['name']  ?? ''; ?>
                        </div>

                        <button type="submit" name="add" class="btn btn-primary mb-5">Add</button>


    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Roles</h6>

                </div>
                <!-- Card Body -->


                <!-- tables -->

                <!-- Page Heading -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Roles</th>
                                        <th>Read</th>
                                        <th>Add</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Role Name</th>
                                        <th>Read</th>
                                        <th>Add</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </tfoot>


                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Product</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="product_read" id="product_read">
                                                <label class="form-check-label" for="product_read">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="product_add" id="product_add">
                                                <label class="form-check-label" for="product_add">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="product_delete" id="product_delete">
                                                <label class="form-check-label" for="product_delete">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="product_update" id="product_update">
                                                <label class="form-check-label" for="product_update">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>2</td>
                                        <td>Category</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="category_read" id="category_read">
                                                <label class="form-check-label" for="category_read">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="category_add" id="category_add">
                                                <label class="form-check-label" for="category_add">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="category_delete" id="category_delete">
                                                <label class="form-check-label" for="category_delete">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="category_update" id="category_update">
                                                <label class="form-check-label" for="category_update">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>3</td>
                                        <td>Users</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="user_read" id="user_read">
                                                <label class="form-check-label" for="user_read">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="user_add" id="user_add">
                                                <label class="form-check-label" for="user_add">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="user_delete" id="user_delete">
                                                <label class="form-check-label" for="user_delete">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="user_update" id="user_update">
                                                <label class="form-check-label" for="user_update">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td>3</td>
                                        <td>Roles</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="" name="role_read" id="role_read">
                                                <label class="form-check-label" for="role_read">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="role_add" id="role_add">
                                                <label class="form-check-label" for="role_add">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="role_delete" id="role_delete">
                                                <label class="form-check-label" for="role_delete">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="role_update" id="role_update">
                                                <label class="form-check-label" for="role_update">
                                                    YES OR NO
                                                </label>
                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include './includes/footer.php' ?>
