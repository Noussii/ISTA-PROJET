<?php
include_once '../usefulFunctions.php';
include_once '../classes/Student.php';
include_once '../classes/Notification.php';
if(check_authentication_with_redirection_unauthorized_student('../page/unauthorized.php')){
    if (isset($_GET['req']) && $_GET['req'] =='notifications') {
        // $std = new Student($_SESSION['user_id']);
        // $notifications = $std->get_all_notifications();
        $notifications = Notification::get_all_notifications($_SESSION['user_id'], $_SESSION['user_type']);
        header('Content-Type: application/json');
        if($notifications == null){
            echo json_encode(['dont_have_notifications' => true]);
        }else{
            echo json_encode($notifications);
        }
    }
}