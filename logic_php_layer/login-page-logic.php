<?php
if(isset($_COOKIE['SIDSPARTA'])){
    session_start();
    if(isset($_SESSION['user_id'])){
        header('location:../page/feed.php');
    }else {
        header('location:../api/logout.php');
    }
}
?>