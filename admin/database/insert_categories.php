<?php
include './database/db_conn.php'; 


    if(isset($_POST['submit'])){
        $name = $conn->real_escape_string(htmlspecialchars($_POST['categorie_name']));
        $slug = $conn->real_escape_string(htmlspecialchars($_POST['categorie_slug']));

        if(empty($name)){
            $error['name'] = 'Category name is required';
        }
        elseif(empty($slug)){
            $error['slug'] = 'Category slug is required';
        }
        else{
            $conn->query("INSERT INTO `product_categories`(`category_name`, `category_slug`) VALUES ('$name','$slug')");
            if($conn->error){
                $error_msg =  'SorryYour Data is not Successfully Saved.';
            }
            else {
            $success_msg = 'Your Data is Successfully Saved.';

            $name = '';
            $slug = '';
            }
        }
    }
