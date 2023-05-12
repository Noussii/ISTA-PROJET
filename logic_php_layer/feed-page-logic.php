<?php 
if(isset($_COOKIE['PHPSESSID'])){
    session_start();
}else {
    header('location:../page/login.php');
}
?>