<?php 
include "../logic_php_layer/feed-page-logic.php"; 
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
    <?php include '../page_components/header_student.php';?>
    <aside class='left-side' data-visibility='1'>

        <a class='left-side-profile-card' href="./profile.php">
            <span class='profile-img'></span>
            <span class='profile-right-text'>
                <span><?= $_SESSION['first_name'] ?></span>
                <span style="font-size: 10px;">profile</span>
            </span>
        </a>

        <a href='../index.php' class="left-side-button">
            <img src="../media/icons/home_icon_feed.png"> <span>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <img src="../media/icons/home_icon_feed.png"> <span>Homework&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <img src="../media/icons/home_icon_feed.png"> <span>Notes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <img src="../media/icons/home_icon_feed.png"> <span>Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <img src="../media/icons/home_icon_feed.png"> <span>Newsletter</span>
        </a>
    </aside>
    <main class='main-section'>
        <section>
            <h1>welcome <?= $_SESSION['first_name']; ?> you are a <?= $_SESSION['user_type']; ?> </h1>
            <h2 id="label">label</h2>
            <a href="../api/logout.php">logout</a>
        </section>
    </main>
</body>
<script src='../scripts/feed_page.js'></script>
</html>