<?php 

include './database/db_conn.php';



if(isset($_POST['login'])){
    // echo 'hello world';
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    

    // echo $user_name . $password;

    if(empty($user_name)){
        $error['username'] = 'User Name Is Required';
    }
    elseif(empty($password)){
        $error['password'] = 'Password Is Required';
    }
    elseif(strlen($password) <= 7){
        $error['password'] = 'Password Must Be Equal To Or Greater Then  8';
    }
    else{
        // session_start();
        // $_SESSION['name'] = $user_name;

        // Password verifying
        // $sql = $conn->query("SELECT `password` FROM `users` WHERE `user_name` = '$user_name' ") or die($conn->error);
        $sql = $conn->query("SELECT  password FROM `users` WHERE `username` = '$user_name'") or die($conn->error);
        $row_count = mysqli_num_rows($sql);
        // print_r($sql->fetch_assoc());

        if($row_count > 0){
            $row = $sql->fetch_assoc();
            echo $row['password'];
            if(!password_verify($password, $row['password'])){
                $error['pass'] = 'Username Or Password is Wrong!';
            }
            else{
                session_start();
                $_SESSION['userName'] = $user_name;

                $user_name = '';
                $password = '';
                header("LOCATION: index.php");
            }
        }
        else {
            $error['pass'] = 'Username Or Password is Wrong!';
        }

        
    }
}


?>
