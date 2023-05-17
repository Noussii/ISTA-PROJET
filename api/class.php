<?php
include_once '../usefulFunctions.php';
include_once '../classes/Student.php';

if(check_authentication_with_redirection_unauthorized('../page/unauthorized.php')){
    // $std = new Student($_SESSION['user_id']);
    // echo $std->get_property_value('class')['name'];
    $hash = hash('sha256', 'dev101');
    // echo $std->get_property_value('first_name');
    if(isset($_GET['req']) && $_GET['req'] === 'emploi'){
        // $std = new Student($_SESSION['user_id']);
        header('Content-type: application/pdf');
        // header('Content-Disposition: attachment; filename="dev101.pdf"');
        echo json_encode(['link' => "../resources/pdf/emploi_du_temps/$hash.pdf"]);
        exit();
    }

    if(isset($_GET['req']) && $_GET['req'] === 'all_notes' && $_SESSION['user_type'] = 'student'){
        $student = new Student($_SESSION['user_id']);
        header('Content-Type: application/json');
        // echo 'hello js from php';
        echo json_encode($student->get_all_subjects_notes());
        exit();
    }
}