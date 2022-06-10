<?php

include 'db_conn.php';

if (isset($_POST['update_img'])) {
    // echo "Working.....";
    $id = $_POST['update_id'];
    $thumb = $_FILES['thumbnail'];
    $images = $_FILES['product_img'];


    $sql = $conn->query("SELECT id, product_thumbnail, product_images FROM products WHERE id = $id");
    $product_images = $sql->fetch_assoc();
    $prd_imgs = explode(',', $product_images['product_images']);


    if ($thumb['name'] != '') {

        if ($thumb['type'] == 'image/png' || $thumb['type'] == 'image/jpeg') {
            $thumb_exten = explode('/', $thumb['type'])[1];
            // print_r($thumb_exten);
            $thumb_rand_name = time();

            if ($thumb['size'] < 10000000) {
                $thumb_name = $thumb_rand_name . '.' . $thumb_exten;
                // echo $thumb_name;

                unlink('./upload_img/' . $product_images['product_thumbnail']);

                move_uploaded_file($thumb['tmp_name'], './upload_img/' . $thumb_name);

                $conn->query("UPDATE products SET product_thumbnail = '$thumb_name' WHERE id = '$id'") or die($conn->error);

                echo "<script>location.replace('./all_products.php')</script>";

               } else {
                echo "Product Thumb is must be less than 10MB";
            }
        } else {
            echo "Please enter valid Format";
        }
    }

    // for Images 
    elseif ($images['name'][0] != '') {
        $img_count = count($images['name']);
        if ($img_count == 3) {

            for ($i = 0; $i < count($prd_imgs); $i++) {
                unlink("./upload_img/$prd_imgs[$i]");
            }

            $img_arr = [];
            for ($i = 0; $i < count($images['name']); $i++) {
                if (
                    $images['type'][$i] == 'image/jpg' ||
                    $images['type'][$i] == 'image/jpeg' ||
                    $images['type'][$i] == 'image/png'
                ) {
                    if ($images['size'][$i] > 10000000) {
                        $error['empty'] = "Image can only be less then 10 MB";
                    } else {
                        $img_extention = explode('/', $images['type'][$i])[1];
                        $new_image_name = rand() . '.' . $img_extention;

                        array_push($img_arr, $new_image_name);

                        move_uploaded_file($images['tmp_name'][$i], './upload_img/' . $new_image_name);
                    }
                } else {
                    $error['empty'] = "Please select valid images";
                }
            }

            $new_images = implode(',', $img_arr);
            $sql = $conn->query("UPDATE `products` SET `product_images`='$new_images' WHERE id = $id");
    
            echo "<script>location.replace('./all_products.php')</script>";
            
        } 
        else {
            echo "Images must be 3";
        }
    } else {
        echo "Product Thumb is required!";
    }

























    // if ($thumb['name'] != '') {


    //     if (
    //         $thumb['type'] == 'image/png' ||
    //         $thumb['type'] == 'image/jpeg'
    //     ) {
    //         $error['success'] = 'Great!';
    //         // getting Extension 
    //         $thumb_exten = explode('/', $thumb['type'])[1];
    //         // print_r($thumb_exten);
    //         $rad_thumb_name = time();
    //         if ($thumb['size'] > 1000000) {
    //             $error['alert'] = 'Product thumb must be less than 10MB';
    //         } else {
    //             $thumb_name = $rad_thumb_name . '.' . $thumb_exten;
    //             // print_r($thumb_name);

    //             // UNLINKING previous files
    //             unlink('./upload_img/' . $row['product_thumbnail']);

    //             move_uploaded_file($thumb['tmp_name'], './upload_img/' . $thumb_name);

    //             // Updating Thumb
    //             $conn->query("UPDATE products SET `product_thumbnail` = '$thumb_name' WHERE id = $id") or die($conn->error);

    //             // echo "<script>location.replace('all_products.php')</>";    
    //         }
    //     }
    //     else {
    //         $error['alert'] = 'Product thumb is required';
    //     }

    // }

    // // for thumbnail
    // else {
    //     $error['alert'] = 'Product thumb is required';

    // }

}
