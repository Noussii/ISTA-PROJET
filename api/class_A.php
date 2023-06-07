<?php
include_once '../usefulFunctions.php';
include_once '../classes/Student.php';
include_once '../classes/Teacher.php';
include_once '../classes/Class.php';

if(check_general_authentication()){

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
                    $success = Class_cls::add_emploi($class_id, $emploi_pdf);
                    if($success){
                        echo json_encode(['success_state'=> true, 'title' => 'Great!', 'message' => 'emploi was uploaded successfully.']);
                        exit();
                    }else{
                        echo json_encode(['success_state'=> false, 'title' => 'Failed!', 'message' => 'something went wrong please check every thing is correct and try again.']);
                        exit();
                    }
                }else{
                    header('location:../page/create_article_ad.php?success=something went wrong');
                }
            
            }catch(RuntimeException $e){
                $saving_pdf_success = false;
                header('location:../page/create_article_ad.php?success=something went wrong');
                exit();
            }
        }
    }
    if($_SESSION['user_type'] === 'teacher' && isset($_GET['q'])){
        if($_GET['q'] === 'clss'){
            $teacher = new Teacher((int) $_SESSION['user_id']);
            $classes_data = $teacher->get_my_classes();
            header('Content-Type: application/json');
            if($classes_data){
                echo json_encode($classes_data);
            }else{
                echo json_encode(['err' => true]);
            }
        }
    }
}
