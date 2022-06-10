<?php

include 'db_conn.php';

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $category_name = $_POST['category_name'];
        $short_des = $_POST['short_des'];
        $long_des = $_POST['long_des'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];




        if (empty($title)) {
                    $error['alert'] = 'Title is required!';
                } 
                elseif (empty($short_des)) {
                    $error['alert'] = 'Short Description is required!';
                } 
                elseif (empty($long_des)) {
                    $error['alert'] = 'Long Description is required!';
                } 
                elseif (empty($quantity)) {
                    $error['alert'] = 'Product Quantity is required!';
                } 
                elseif (empty($price)) {
                    $error['alert'] = 'Product Price is required!';
                } 
                    elseif (empty($discount)) {
                        $error['alert'] = 'Product Discount  is required!';
                }
                else{

            $conn->query("UPDATE `products` SET `product_category`='$category_name',`product_title`='$title',`product_short_desc`='$short_des',`product_long_desc`='$long_des', `product_price`='$price',`product_quantity`='$quantity',`discount`='$discount' WHERE id = $id") or die($conn->error);
                    
                    $error['success'] = 'Data updated successfully';

                    header("LOCATION: ./all_products.php");
                }

    }
