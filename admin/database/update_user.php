<?php
include './database/db_conn.php';

//  Checking requirements

if (isset($_POST['update_user'])) {
    // echo 'hello world';
    $id = $_POST['id'];
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

        $conn->query("UPDATE users SET username = '$userName', password = '$pass_hash' WHERE id = $id") or die($conn->error);

        $userName = '';
        $password = '';

        // header("LOCATION: users.php");
        echo "<script>location.replace('users.php')</script>";
    }
}

?>
