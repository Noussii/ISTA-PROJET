<?php 
include_once '../usefulFunctions.php';
check_general_authentication();
switch(return_user_type()){
    case 'teacher' :
        header('location:./feed_t.php');
        break;
    case 'student' :
        header('location:./feed.php');
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corner</title>
    <!-- <link rel="stylesheet" href="../styles/index.css"> -->
    <link rel="stylesheet" href="../styles/feed-page.css">
    <link rel="icon" type="image/x-icon" href="../media/fav.ico">
</head>
<body>
    
    <?php
    add_header_and_left_side_after_auth();
    ?>

<!-- feed-section class is in /style/feed-page.css -->
    <section class="outer-container" style='padding-top: 40px;'>
        <main class='main-container'>
            <!-- <section class="feed-section">
                <h1>welcome <?php /*$_SESSION['first_name'];*/?>.</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea consectetur quis rem. Error, quis non! Exercitationem labore facere fugiat, saepe soluta veritatis doloremque, aspernatur numquam voluptatibus commodi adipisci necessitatibus.</p>
            </section> -->
        </main>
    </section>

    </body>
    <?php 
    if($_SESSION['user_type'] == 'student'){
        echo "<script src='../scripts/feed_page.js'></script>";
    }else if ($_SESSION['user_type'] == 'student'){
        echo "<script src='../scripts/feed_page.js'></script>";        
    }
    ?>
    <script src='../scripts/feed_page_ad.js'></script>
</html>