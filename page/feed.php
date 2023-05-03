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
    <aside class='left-side'>
        <div class="left-side-button"></div>
        <div class="left-side-button"></div>
        <div class="left-side-button"></div>
        <div class="left-side-button"></div>
    </aside>
    <main class='main'>
        <h1>welcome <?= $_SESSION['first_name']; ?> you are a <?= $_SESSION['user_type']; ?> </h1>
        <h2  id="label">label</h2>
        <a href="../api/logout.php">logout</a>
    </main>
</body>
<script src='../scripts/feed_test.js'></script>
</html>