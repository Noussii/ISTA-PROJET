<?php 
if(isset($_COOKIE['SIDSPARTA'])){
    session_start();
}else {
    header('location:../page/login.php');
}
?>