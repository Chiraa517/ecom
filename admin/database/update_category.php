<?php
include 'db_conn.php'; 

$name = $conn->real_escape_string(htmlspecialchars($_GET['name']));
$slug = $conn->real_escape_string(htmlspecialchars($_GET['slug']));
$id = $conn->real_escape_string(htmlspecialchars($_GET['id']));

// echo $name . $slug . $id;
// die();

$conn->query("UPDATE `product_categories` SET `category_name`='$name',`category_slug`='$slug' WHERE `id`= $id") or die($conn->error);


header("LOCATION: ../catagories.php");



?>