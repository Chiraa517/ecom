<?php

include 'db_conn.php';

    if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $product_category = $_POST['product_category'];
    $short_des = $_POST['short_des'];
    $long_des = $_POST['long_des'];
    $thumbnail = $_FILES['thumbnail'];
    $product_img = $_FILES['product_img'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];

    // print_r($product_img);

    if(empty($title)){
        $error['alert'] = 'Title is required!';
    }
    elseif(empty($short_des)){
        $error['alert'] = 'Short Description is required!';
    }
    elseif(empty($long_des)){
        $error['alert'] = 'Long Description is required!';
    }
    elseif($thumbnail['name'] == ''){
        $error['alert'] = 'Thumbnail is required!';
    }
    elseif($product_img['name'] == ''){
        $error['alert'] = 'Product Image is required!';
    }
    elseif(empty($quantity)){
        $error['alert'] = 'Product Quantity is required!';
    }
    elseif(empty($price)){
        $error['alert'] = 'Product Price is required!';
    }
    elseif(empty($discount)){
        $error['alert'] = 'Product Discount  is required!';
    }
    else{
        $error['success'] = 'All Good Now!';
        // print_r($product_img);

        if(
            $thumbnail['type'] == 'image/png' ||
            $thumbnail['type'] == 'image/jpeg'
        ){
    
            // echo "correct format";
            $thumb_extension = explode('/', $thumbnail['type'])[1];
            // print_r($thumbnail['name']);

            // radom Image name 
            $rad_name = time();
                        
            if($thumbnail['size'] > 10000000){
                $error['alert'] = 'Thumbnail Must be less than 10MB!';
            }
            else{
                // All good 
                $new_thmb_name = $rad_name . '.' . $thumb_extension;
                // echo $new_thmb_name;
                // uploading files
                move_uploaded_file($thumbnail['tmp_name'], './upload_img/' . $new_thmb_name); 

                // checkin gImages 
                $count_image = count($product_img['name']);
                // echo $count_image;
                if($count_image != 3){
                    $error[ 'alert'] = 'Please Select 3 Images';
                    // print_r($product_img['name']);
                }
                else{
                    $img_arr = [];
                    for($i = 0; $i < $count_image; $i++){
                        // print_r($product_img['type'][$i]);
                        if($product_img['type'][$i] == 'image/png'||
                        $product_img['type'][$i] == 'image/jpeg'
                        ){
                            //  $error['success'] = 'All Good! Thank you!';
                            if ($product_img['size'][$i] > 10000000) {
                                $error['alert'] = "Image can only be less then 10 MB";
                            }
                            else{
                                // print_r($product_img['type'][$i]);
                                $img_extension = explode('/', $product_img['type'][$i])[1];
                                // print_r($img_extension);
                                $img_rand_name = rand();
                                $img_name = $img_rand_name . '.' . $img_extension;
                                // print_r($img_name);

                                array_push($img_arr, $img_name);

                                move_uploaded_file($product_img['tmp_name'][$i], './upload_img/' . $img_name); 
                                
                            }
                         }
                         else{
                            $error[ 'alert'] = 'Image Must be Png or Jpg';
                         }
                    }
                }
                $img_implode = implode(',' , $img_arr);
                $sql = $conn->query("INSERT INTO `products`(`product_category`, `product_title`, `product_short_desc`, `product_long_desc`, `product_images`, `product_price`, `product_quantity`, `discount`, `product_thumbnail`) VALUES ('$product_category','$title','$short_des','$long_des','$img_implode','$price','$quantity','$discount','$new_thmb_name')") or die($conn->error);

                echo "<script>location.replace('all_products.php')</script>";
                // header("LOCATION: all_products.php");
            }

        }
        else {
            $error['alert'] = 'Thumbnail Must be Png or Jpg';
        }
    }

}

?>

