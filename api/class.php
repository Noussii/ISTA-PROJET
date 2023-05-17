<?php
include_once '../usefulFunctions.php';
include_once '../classes/Student.php';

if(check_authentication_with_redirection_unauthorized_student('../page/unauthorized.php')){

    $hash = hash('sha256', 'dev101');
    if(isset($_GET['req']) && $_GET['req'] === 'emploi'){
        header('Content-type: application/pdf');
        echo json_encode(['link' => "../resources/pdf/emploi_du_temps/$hash.pdf"]);
        exit();
    }

    if(isset($_GET['req']) && $_GET['req'] === 'all_notes' && $_SESSION['user_type'] = 'student'){
        $student = new Student($_SESSION['user_id']);
        header('Content-Type: application/json');
        echo json_encode($student->get_all_subjects_notes());
        exit();
    }
}