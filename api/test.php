<?php
include_once '../usefulFunctions.php';
include_once '../classes/User.php';
include_once '../classes/Student.php';


if(check_authentication_with_redirection_unauthorized('../page/unauthorized.php')){   
    // Set the content type header
    header('Content-type: application/pdf');

    // Set the content disposition header to force a download
    // header('Content-Disposition: attachment; filename="example.pdf"');
    readfile('../resources/pdf/emploi_du_temps/dev101.pdf');
    // header('../resources/pdf/emploi_du_temps/dev101.pdf');
}