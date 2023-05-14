<?php
include_once '../usefulFunctions.php';
include_once '../models/User.php';
include_once '../models/Student.php';


if(check_authentication_with_redirection_unauthorized('../page/unauthorized.php')){   
    $std = new Student($_SESSION['user_id']);
    echo json_encode($std->get_property_value('id')).'<br>';
    echo json_encode($std->get_all_notes());
}