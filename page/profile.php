<?php 
include_once '../usefulFunctions.php';
include_once '../classes/Student.php';

if(check_authentication_with_redirection_unauthorized_student('./unauthorized.php')){
    $student = new Student($_SESSION['user_id']);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='../styles/root_styles.css'>
    <link rel='stylesheet' href='../styles/profile-page.css'>
</head>
<body>
    <?php include '../page_components/header_student.php';?>
    <?php include '../page_components/feed_left_side_student.php';?>
    <section class="outer-container">
        <main class='main-container-reactive'>
            <section>
                <div class="top-section-container">
                    <div class="name-and-img-div">
                        <div class="profile-img-container">
                            <div class="profile-img">
                                <span><?=$_SESSION['first_name'][0]?></span>
                            </div>
                        </div>
                        <div class="text-div">
                            <span class="fname"><?=$_SESSION['first_name']?></span>
                            <span class="lname"><?=$student->get_property_value('last_name'); ?></span>
                            <span class="lname">nb: <?=$student->get_property_value('number_in_class'); ?></span>
                        </div>
                    </div>

                    <div class="profile-infos-top">
                        <div class="one-line">
                            <span class="title">Class:</span>
                            <span class="value"><?=$student->get_property_value('class')['name']; ?></span>
                        </div>
                        <div class="one-line">
                            <span class="title">Email:</span>
                            <span class="value"><?=$student->get_property_value('email'); ?></span>
                        </div>
                        <div class="one-line">
                            <span class="title">Cin:</span>
                            <span class="value"><?=$student->get_property_value('national_student_id'); ?></span>
                        </div>
                        <div class="one-line">
                            <span class="title">Phone:</span>
                            <span class="value"><?=$student->get_property_value('phone_number'); ?></span>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <p>just a test</p>
            </section>
        </main>
    </section>
</body>
</html>
