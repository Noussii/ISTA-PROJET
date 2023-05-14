<?php

if(isset($_COOKIE['PHPSESSID'])){
    session_start();
    if(isset($_SESSION['user_type']) && isset($_SESSION['user_id'])){
        header('location:./page/feed.php');
    }else{
        session_destroy();
        setcookie('PHPSESSID','', time() - 3600, '/');
    }
}

?>