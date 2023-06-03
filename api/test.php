<?php
include_once '../usefulFunctions.php';
include_once '../classes/User.php';
include_once '../classes/Student.php';
include_once '../classes/Teacher.php';
include_once '../classes/Article.php';

if(check_general_authentication()){   
    // $teacher = new Teacher($_SESSION['user_id']);
    // $data = $teacher->get_students_notes_from_subject_id(1);
    // // echo json_encode($data);
    // if(isset($_GET['v'])){
    //     echo $_GET['v'];
    // }
    // $tst = Article::get_latest_articles_with_range(2);
    // echo var_dump($tst[1]);
    echo var_dump(Article::get_publisher_data((int)$_GET['id']));
}
