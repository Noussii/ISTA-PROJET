<?php
include_once '../usefulFunctions.php';
include_once '../classes/Student.php';
include_once '../classes/Teacher.php';

if(check_general_authentication()){
$user_type = return_user_type();

if($user_type == 'teacher'){
    $teacher = new Teacher($_SESSION['user_id']);
    if(isset($_GET['q'], $_GET['cls']) && $_GET['q'] == 'modules'){
        $modules = $teacher->get_my_subjects_from_class_id((int)$_GET['cls']);
        echo json_encode($modules);
    }

    if(isset($_GET['q'], $_GET['subj']) && $_GET['q'] == 'notes'){
        $notes = $teacher->get_students_notes_from_subject_id((int)$_GET['subj']);
        echo json_encode($notes);
    }
    if(isset($_GET['q'], $_GET['mod'], $_GET['v']) && $_GET['q'] == 'notes' && $_GET['mod'] == 'update'){
        $data = json_decode($_GET['v'], true);
        if($teacher->set_students_notes_from_json($data)){
            header('Content-Type: application/json');
            echo json_encode(["success" => true]);
        }else{
            header('Content-Type: application/json');
            echo json_encode(["success" => false]);
        }
    }
}




















}