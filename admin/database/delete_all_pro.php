<?php

include 'db_conn.php'; 

$delete_id = $_GET['delete_id'];
// echo $delete_id;

$conn->query("DELETE FROM `products` WHERE id = '$delete_id'") or die($conn->error);

header("LOCATION: ../all_products.php");
// echo "<script>location.replace('all_products.php')</script>";







// $sql = $conn->query("SELECT `product_thumbnail`, `product_images` FROM `products`");
// // print_r(mysqli_fetch_assoc($sql));
// $row = mysqli_fetch_assoc($sql);

// unlink('./upload_img/' . $row['product_thumbnail']);

// // $img = count($row['product_images']);
// $img = explode(',',  $row['product_images']);

// for($i = 0; $i < count($img); $i++){
//     unlink('./upload_img/' . $img[$i]);
// };

?>
