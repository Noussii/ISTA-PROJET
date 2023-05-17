<?php 
include_once '../usefulFunctions.php';
check_authentication_with_redirection_unauthorized('../api/logout.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corner</title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/feed-page.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <!-- the following line include the header -->
    <?php include '../page_components/header_student.php';?>
    <!-- the following line include the aside section  -->
    <?php include '../page_components/feed_left_side_student.php'; ?>

    <section class="outer-container">
        <main class='main-container'>
            <section class="feed-section">
                <h1>welcome <?= $_SESSION['first_name'];?>.</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates ea consectetur quis rem. Error, quis non! Exercitationem labore facere fugiat, saepe soluta veritatis doloremque, aspernatur numquam voluptatibus commodi adipisci necessitatibus.</p>
            </section>
            <!-- feed-section class is in /style/feed-page.css -->
        </main>
    </section>
    </body>
<script src='../scripts/feed_page.js'></script>
</html>
