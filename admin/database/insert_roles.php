<?php
// include 'db_conn.php';

if(isset($_POST['add'])){
    $roleName = $_POST['role_name'];
    
    // PRODUCT 
    $productRead = (isset($_POST['product_read'])) ? 1 : 0;
    $productAdd = (isset($_POST['product_add'])) ? 1 : 0;
    $productDelete = (isset($_POST['product_delete'])) ? 1 : 0;
    $productUpdate = (isset($_POST['product_update'])) ? 1 : 0;
    // CATEGORY
    $categoryRead = (isset($_POST['category_read'])) ? 1 : 0;
    $categoryAdd = (isset($_POST['category_add'])) ? 1 : 0;
    $categoryDelete = (isset($_POST['category_delete'])) ? 1 : 0;
    $categoryUpdate = (isset($_POST['category_update'])) ? 1 : 0;
    // USERS
    $userRead = (isset($_POST['user_read'])) ? 1 : 0;
    $userAdd = (isset($_POST['user_add'])) ? 1 : 0;
    $userDelete = (isset($_POST['user_delete'])) ? 1 : 0;
    $userUpdate = (isset($_POST['user_update'])) ? 1 : 0;
    // ROLES
    $roleRead = (isset($_POST['role_read'])) ? 1 : 0;
    $roleAdd = (isset($_POST['role_add'])) ? 1 : 0;
    $roleDelete = (isset($_POST['role_delete'])) ? 1 : 0;
    $roleUpdate = (isset($_POST['role_update'])) ? 1 : 0;

    $conn->query("INSERT INTO `roles`(`role_name`, `productRead`, `productAdd`, `productUpdate`, `productDelete`, `categoryRead`, `categoryAdd`, `categoryUpdate`, `categoryDelete`, `userRead`, `userAdd`, `userUpdate`, `userDelete`, `roleRead`, `roleAdd`, `roleUpdate`, `roleDelete`) VALUES ('$roleName','$productRead','$productAdd','$productUpdate','$productDelete','$categoryRead','$categoryAdd','$categoryUpdate','$categoryDelete','$userRead','$userAdd','$userUpdate','$userDelete','$roleRead','$roleAdd','$roleUpdate','$roleDelete')") or die($conn->error);

}

?>
