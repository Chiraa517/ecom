<?php include './includes/header.php';

include './database/insert_categories.php';


// include '../includes/db_conn.php';

?>

<?php if (isset($success_msg)) { ?>
    <!-- database error or success alert -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Congrates!</strong> <?php echo $success_msg ?>
    </div>
<?php
} ?>
<?php if (isset($error_msg)) { ?>
    <!-- database error or success alert -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oopss!</strong> <?php echo $error_msg ?>
    </div>
<?php } ?>









<div class="container-fluid">

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Categories</h6>

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
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                                <!-- database connection -->
                                <?php $result = $conn->query("SELECT * FROM `product_categories`") ?>

                                <tbody>
                                    <?php $num = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {   ?>
                                        <tr>
                                            <?php $edit_id = "update-" . $row['id']; ?>
                                            <th><?php echo $num++ ?></th>
                                            <td id="name-<?php echo $row['id']; ?>" class=" <?php echo "edit-" . $row['id']; ?>">
                                                <?php echo $row['category_name'] ?>
                                            </td>
                                            <td id="slug-<?php echo $row['id']; ?>" class="
                                            <?php echo "edit-" . $row['id']; ?>">
                                                <?php echo $row['category_slug'] ?> </td>
                                            <td> <?php echo $row['created_at'] ?> </td>
                                            <td>
                                                <button id="<?php echo $row['id'] ?>" class="edit btn btn-primary ">Edit</button>

                                                <a id="<?php echo $edit_id; ?>" class="update btn btn-primary d-none">Update</a>

                                                <button id="<?php echo $row['id'] ?>" class="remove btn btn-danger my-2" data-bs-toggle="modal" data-bs-target="#removeData">Remove</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->




        <!-- remove modal -->

        <!-- Modal -->
        <div class="modal fade" id="removeData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <a href="#" id="remove_cate" class="btn btn-danger">Yes</a>
                    </div>
                </div>
            </div>
        </div>

















        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Enter Categorie</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

                        <div class="mb-3">
                            <label for="categorie_name" class="form-label">Enter Categorie Name</label>
                            <input type="text" class="form-control" id="categorie_name" name="categorie_name" value="<?php echo $name ?? '' ?>">

                            <div class="form-text text-danger">
                                <?php echo $error['name']  ?? ''; ?>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for="categorie_slug" class="form-label">Enter Categorie Slug</label>
                            <input type="text" class="form-control" id="categorie_slug" name="categorie_slug" value="<?php echo $slug ?? '' ?>">
                        </div>

                        <div class="form-text text-danger mb-3">
                            <?php echo $error['slug']  ?? ''; ?>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>




<!-- JS -->
<script>
    // for remove



    let modal_footer = document.querySelector('.modal-footer');
    let remove = document.querySelectorAll('.remove');
    for (let i = 0; i < remove.length; i++) {
        remove[i].addEventListener('click', () => {
            let dele = document.getElementById('remove_cate');
            dele.setAttribute('href', './database/delete_category.php?id=' + remove[i].getAttribute('id'));
        })
    }


    editData();

    function editData() {

        // Edit function 
        let edit = document.querySelectorAll('.edit');



        for (let i = 0; i < edit.length; i++) {
            edit[i].addEventListener('click', function() {
                // console.log(edit[i].getAttribute('id'));
                id = edit[i].getAttribute('id');
                // console.log(id);
                let td_class_selector = ".edit-" + id;
                // console.log(td_class_selector);
                let editable_content = document.querySelectorAll(td_class_selector);
                for (let i = 0; i < editable_content.length; i++) {
                    editable_content[i].setAttribute('contenteditable', 'true');
                    console.log(editable_content[i]);
                }
                editable_content[0].focus();

                let update_id = 'update-' + id;
                document.getElementById(update_id).classList.remove('d-none');
                // console.log(update_id);
                this.classList.add('d-none');


                edit[i].parentElement.innerHTML += '<button class="cancel btn btn-dark"> Cancel </button>';


                let cancel = document.querySelectorAll('.cancel');

                for (let i = 0; i < cancel.length; i++) {
                    cancel[i].addEventListener('click', () => {
                        let sibling = cancel[i].parentElement.previousSibling.previousSibling
                            .previousSibling.previousSibling;
                        // console.log(sibling);
                        let sibling_id = sibling.classList[0];
                        console.log(sibling_id);
                        let sbls = document.querySelectorAll("." + sibling_id);
                        for (let i = 0; i < sbls.length; i++) {
                            sbls[i].setAttribute('contenteditable', 'false');
                        }
                        cancel[i].remove();

                        editId = sibling_id.split('-')[1];
                        document.getElementById(editId).classList.remove('d-none');
                        document.getElementById(update_id).classList.add('d-none');



                        editData();
                    })
                    updateData();
                }

            })
        }
    }

    // Update
    function updateData() {

        let update = document.querySelectorAll('.update');
        for (let i = 0; i < update.length; i++) {
            update[i].addEventListener('click', function() {
                // console.log("working......");
                // console.log(update[i].getAttribute('id'))
                let update_id = update[i].getAttribute('id');
                let get_id = update_id.split('-')[1];
                // console.log(get_id);

                let name = document.getElementById('name-' + get_id).innerHTML;

                let slug = document.getElementById('slug-' + get_id).innerHTML;
                console.log(name);


                this.setAttribute('href', `./database/update_category.php?name=${name}&slug=${slug}&id=${id}`);
            })

        }
    }
</script>








<?php include './includes/footer.php' ?>
