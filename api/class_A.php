<?php
include_once '../usefulFunctions.php';
include_once '../classes/Student.php';
include_once '../classes/Class.php';

if(check_general_authentication()){

    $hash = hash('sha256', 'dev101');
    if(isset($_GET['req']) && $_GET['req'] === 'emploi'){
        if($_SESSION['user_type'] === 'student'){
            $emploi_pdf_url = Class_cls::get_emploi_url($_SESSION['user_id']);
            echo htmlspecialchars($emploi_pdf_url);
        }
        exit();
    }

    if(isset($_GET['req']) && $_GET['req'] === 'all_notes' && $_SESSION['user_type'] == 'student'){
        $student = new Student($_SESSION['user_id']);
        header('Content-Type: application/json');
        echo json_encode($student->get_all_subjects_notes());
        exit();
    }


    if(return_user_type() === 'administration'){


        if(isset($_GET['q'], $_GET['cls']) && $_GET['q'] == 'add_emp' && is_numeric($_GET['cls'])){

            $class_id = (int) $_GET['cls'];

            try{
                $emploi_pdf = $_FILES['emploiPdf'];
                if($emploi_pdf['tmp_name']){
                    // $pdf = file_get_contents($emploi_pdf['tmp_name']);
                    // $in_server_pdf_name = time().'.pdf';
                    // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/resources/pdf/emploi_du_temps/'.$in_server_pdf_name, $pdf);
                    // $saving_pdf_success = true;
                    // $pdf_name = '/resources/pdf/emploi_du_temps/'.$in_server_pdf_name;
                    echo Class_cls::add_emploi($class_id, $emploi_pdf);
                }
            
            }catch(RuntimeException $e){
                $saving_pdf_success = false;
                header('location:../page/create_article_ad.php?success=something went wrong');
                exit();
            }

        }


    }


}