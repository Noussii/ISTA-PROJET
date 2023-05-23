<?php
include_once '../usefulFunctions.php';
include_once '../classes/User.php';
include_once '../classes/Student.php';
include_once '../classes/Teacher.php';


if(check_general_authentication()){   
    $teacher = new Teacher($_SESSION['user_id']);
    $data = $teacher->get_students_notes_from_subject_id(1);
    echo json_encode($data);
}

echo $_SESSION['user_id'];