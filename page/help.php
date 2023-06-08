<?php 
include_once '../usefulFunctions.php';
include_once '../classes/Administration.php';

if(check_general_authentication()){
    $user_type = $_SESSION['user_type'];
    $st_help_message = 'Si vous avez rencontré des problèmes, veuillez contacter votre administration locale. <br><br> <b>Contact: 0637567890.</b>';
    $te_help_message = 'Si vous avez rencontré des problèmes, veuillez contacter votre administration locale. <br><br> <b>Contact: 0637567891.</b>';
    $ad_help_message = 'Si vous avez rencontré des problèmes, veuillez contacter  l`\équipe DEV 101 ". <br><br> <b>Contact: 0637567892.</b>';
}else header('location:../api/logout.php');

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
    <link rel="icon" type="image/x-icon" href="../media/fav.ico">
</head>
<body>
    <?php add_header_and_left_side_after_auth() ;?>
    <section class="outer-container">
        <main class='main-container-reactive'>
            <section>
               <h1>Obtenir de l'aide :</h1>
               <p>
                <?php
                    if($user_type === 'student'){
                        echo $st_help_message;
                    }else if ($user_type === 'teacher'){
                        echo $te_help_message;
                    }else if($user_type === 'administration'){
                        echo $ad_help_message;
                    }
                ?>
               </p>
            </section>
        </main>
    </section>
</body>
</html>
