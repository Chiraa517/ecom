<?php

include 'db_conn.php'; 



$id = $_GET['id'];

$conn->query("DELETE FROM `product_categories` WHERE `id` = '$id'");

if($conn->error){
    echo $conn;
}
else{
    echo 'Data deleted';
    header("LOCATION: ../catagories.php");
}