<?php include './includes/header.php';
include './database/db_conn.php';


$result = $conn->query("SELECT id, username FROM users") or die($conn->error);

?>



<a href="./add_user.php" class="btn btn-primary mr-3 mb-5 float-right px-5">Add User</a>

<!-- Card Body -->
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>N0: Of Users</th>
                    <th>User Name</th>
                    <th>User Roles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>N0: Of Users</th>
                    <th>User Name</th>
                    <th>User Roles</th>
                    <th>Action</th>
                </tr>
            </tfoot>

            <?php $num = 1;
            while ($row = $result->fetch_assoc()) { ?>
                <tbody>
                    <tr>
                        <th><?php echo $num++ ?></th>
                        <td><?php echo $row['username'] ?></td>
                        <td>PENDING WORK</td>
                        <td>
                            <a href="./edit_user.php?user_id=<?php echo $row['id'] ?>" type="submit" name="edit_user" class="btn btn-primary">Edit</a>

                            <button type="submit" name="remove_user" class="btn btn-danger remove" data-bs-toggle="modal" id="<?php echo $row['id'];  ?>" data-bs-target="#removeUser">Remove</button>

                        </td>
                    </tr>
                </tbody>
            <?php } ?>

        </table>
    </div>
</div>




<!-- remove modal -->

<!-- Modal -->
<div class="modal fade" id="removeUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a href=""  id="remove_mdl" class="btn btn-danger">Yes</a>
            </div>
        </div>
    </div>
</div>


<script>
    // REMOVE FUNCTION
    let remove = document.querySelectorAll('.remove');
    for (let i = 0; i < remove.length; i++) {
        remove[i].addEventListener('click', function() {
            let remove_modal = document.getElementById('remove_mdl');
            remove_modal.setAttribute('href', './database/remove_user.php?remove_id=' + this.id);
        })
    }
</script>



<?php include './includes/footer.php' ?>
