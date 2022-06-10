<?php include './includes/header.php';
include './database/db_conn.php';




//  Checking requirements

if (isset($_POST['add_user'])) {
    // echo 'hello world';
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    // echo $userName . $password;

    if (empty($userName)) {
        $error['userName'] = 'User Name Is Required';
    } elseif (empty($password)) {
        $error['password'] = 'Password Is Required';
    } elseif (strlen($password) <= 7) {
        $error['password'] = 'Password Must Be Equal To Or Greater Then  8';
    } else {
        // session_start();
        // $_SESSION['name'] = $user_name;
        // Password Hash
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        // echo $pass_hash;
        $conn->query("INSERT INTO `users` (`username`, `password`) VALUES ('$userName', '$pass_hash')") or die($conn->error);

        $userName = '';
        $password = '';

        // header("LOCATION: users.php");
        echo "<script>location.replace('users.php')</script>";
    }
}








?>



<div class="container my-4">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="username">Enter User Name</label>
            <input type="text" name="userName" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter User Name" value="<?php echo $userName ?? ''  ?>">
            <p class="text-danger"><?php echo $error['userName']  ?? '' ?></p>
        </div>

        <div class="form-group">
            <label for="user_password">Enter User Password</label>
            <input type="password" name="password" class="form-control" id="user_password" aria-describedby="emailHelp" placeholder="Enter User Password" value="<?php echo $password ?? ''  ?>">
            <p class="text-danger"><?php echo $error['password']  ?? '' ?></p>

        </div>

        <div class="form-group">
            <label for="Product_category">Add Roles</label>
            <select id="Product_category" name="product_category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option>Hello</option>
                <option>WOW</option>
                <option>HASH</option>
            </select>
        </div>


        <button type="submit" name="add_user" class="btn btn-primary">Add User</button>

    </form>
</div>














<?php include './includes/footer.php' ?>
