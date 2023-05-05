<?php session_start(); ?>
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
    <section class="outer-container-reactive">
        <main class='main-container-reactive'>
            <section>
                <h1>welcome <?= $_SESSION['first_name'];?>. </h1>
                <h1>this is profile page</h1>
                <a href="../api/logout.php">logout</a>
            </section>
        </main>
    </section>
</body>
</html>