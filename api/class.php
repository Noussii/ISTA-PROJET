<?php
include_once '../usefulFunctions.php';
include_once '../classes/Student.php';

if(check_authentication_with_redirection_unauthorized('../page/unauthorized.php')){
    // $std = new Student($_SESSION['user_id']);
    // echo $std->get_property_value('class')['name'];
    $hash = hash('sha256', 'dev101');
    // echo $std->get_property_value('first_name');
    if(isset($_GET['emploi']) && $_GET['emploi'] === 'true'){
        // $std = new Student($_SESSION['user_id']);
        header('Content-type: application/pdf');
        // header('Content-Disposition: attachment; filename="dev101.pdf"');
        readfile("../resources/pdf/emploi_du_temps/$hash.pdf");
        exit();
    }
}