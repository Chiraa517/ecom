<?php include './includes/header.php';
include './database/db_conn.php';
include './database/update_user.php';

$id = $_GET['user_id'];

$sql = $conn->query("SELECT id, username FROM users WHERE id = '$id'") or die($conn->error);

?>



<div class="container my-4">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" enctype="multipart/form-data">

        
        <?php while($row = mysqli_fetch_assoc($sql)){ ?>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <div class="form-group">
            <label for="username">Enter User Name</label>
            <input type="text" name="userName" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter User Name" value="<?php echo $row['username']  ?>">
            <p class="text-danger"><?php echo $error['userName']  ?? '' ?></p>
        </div>
        
        <div class="form-group">
            <label for="user_password">Enter User Password</label>
            <input type="password" name="password" class="form-control" id="user_password" aria-describedby="emailHelp" placeholder="Enter User Password" value="<?php echo $password ?? ''  ?>">
            <p class="text-danger"><?php echo $error['password']  ?? '' ?></p>
        </div>
        <?php } ?>


        <button type="submit" name="update_user" class="btn btn-success">Update User</button>

    </form>
</div>














<?php include './includes/footer.php' ?>
