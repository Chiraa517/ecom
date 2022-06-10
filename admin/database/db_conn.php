<?php 

$conn = new mysqli('localhost', 'root', '', 'ecommerce');

if(mysqli_error($conn)){
    $error =  'error found in MySql';
}
else{
    $success =  'database is working.....';
}

?>
