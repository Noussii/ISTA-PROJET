<?php

function check_authentication(){
    if(!isset($_COOKIE['PHPSESSID'])) return false;
    session_start();
    if(!(isset($_SESSION['user_id'], $_SESSION['user_type']))) {
        session_destroy();
        return false;
    };
    return true;
}

function check_authentication_with_redirection_unauthorized($redirection_link){
    if(!check_authentication()){
        header("location:$redirection_link");
        exit();
    }
}
function check_authentication_with_redirection_logged_in($redirection_link){
    if(check_authentication()){
        header("location:$redirection_link");
        exit();
    }
}
?>