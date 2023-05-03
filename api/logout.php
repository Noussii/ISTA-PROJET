<?php
if(isset($_COOKIE['SIDSPARTA'])){
    session_start();
    setcookie("SIDSPARTA", "", time() - 3600, "/");
    session_destroy();
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');
    header('Pragma: no-cache');
    header('location:../index.php');
} else {
    header('location:../page/login.php');
}
