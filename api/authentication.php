<?php

include_once '../controllers/login.contr.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = new Login($email, $password);

    $loginData = $login->authenticate($email, $password);
    if(is_array($loginData)){
        // $json = json_encode($loginData);
        // header("location:../err_page.php?err=db connected succesfully $json");
        session_set_cookie_params(7890000, '/', null, false, true);
        session_start();
        $_SESSION['user_type'] = $loginData['user_type'];
        $_SESSION['user_id'] = $loginData['user_id'];
        $_SESSION['first_name'] = $loginData['first_name'];
        
        header('location:../page/feed.php');
    }
    else {
        header('location:../page/login.php?err=invalid_password_or_email');
    }
}