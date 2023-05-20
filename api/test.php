<?php
include_once '../usefulFunctions.php';
include_once '../classes/User.php';
include_once '../classes/Student.php';
include_once '../classes/Teacher.php';


if(check_general_authentication()){   
    $teacher = new Teacher();
    $data = $teacher->return_all_data((int)$_SESSION['user_id']);
    echo json_encode($data);
    echo $_SESSION['user_id'];
}
