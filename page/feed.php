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
</head>
<body>
    <?php include '../page_components/header_student.php';?>
    <aside class='left-side' data-visibility='1'>
        <a href='../index.php' class="left-side-button">
            <span>home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <span>homework&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <span>notes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <span>class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <span>newsletter</span>
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