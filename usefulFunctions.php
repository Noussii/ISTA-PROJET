<?php

function check_authentication($user_type){
    if(!isset($_COOKIE['PHPSESSID'])) return false;
    session_start();
    if(!(isset($_SESSION['user_id'], $_SESSION['user_type'])) && $_SESSION['user_type'] ===$user_type) {
        header('location:../api/logout.php');
        return false;
    };
    return true;
}

function check_general_authentication(){
    if(!isset($_COOKIE['PHPSESSID'])) {
        header('location:../api/logout.php');
        return false;
        exit();        
    };
    session_start();
    if(!(isset($_SESSION['user_id'], $_SESSION['user_type']))) {
        // session_destroy();
        header('location:../api/logout.php');
        return false;
    };
    return true;
}

function return_user_type(){
    if(!isset($_COOKIE['PHPSESSID'])) return false;
    if(!(isset($_SESSION['user_id'], $_SESSION['user_type']))) {
        session_destroy();
        return false;
    };
    return $_SESSION['user-type'];
}

function check_authentication_with_redirection_logged_in($redirection_link){
    if(!isset($_COOKIE['PHPSESSID'])) {
        return false;
        exit();        
    };
    session_start();
    if(!(isset($_SESSION['user_id'], $_SESSION['user_type']))) {
        header('location:../api/logout.php');
        return false;
    };
    return true;
}

function check_authentication_with_redirection_unauthorized_student($redirection_link){
    if(!check_authentication('student')){
        header("location:$redirection_link");
        exit();
    }else return true;
}

function check_authentication_with_redirection_unauthorized_teacher($redirection_link){
    if(!check_authentication('teacher')){
        header("location:$redirection_link");
        exit();
    }else return true;
}

function add_header_and_left_side_after_auth(){
    if($_SESSION['user_type'] === 'student') {
        include '../page_components/header_student.php';
        include '../page_components/feed_left_side_student.php';
    }else if($_SESSION['user_type'] === 'teacher') {
        include '../page_components/header_teacher.php';
        include '../page_components/feed_left_side_teacher.php';
    }  

    
    // echo '<br><br><br><h1 style="text-align:center;">'.$_SESSION['user_type'].'<h1><br><br><br>';
}

?>