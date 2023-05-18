<?php
include_once '../usefulFunctions.php';
if(check_authentication_with_redirection_unauthorized('./unauthorized.php')){
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/class-page.css" >
    <title>corner - class</title>
</head>
<body>
    <?php include_once '../page_components/header_student.php' ?>
    <?php include_once '../page_components/feed_left_side_student.php'?>
    <section class='outer-container'>
        <main class='main-container-reactive'>
            <section>
                <div class="top-cards-container">
                    <a href='../api/class.php?emploi=true' class="card emploi_card">
                        <h4>Emploi</h4>
                    </a>
                    <div class="card ">
                        <h4>Emploi</h4>
                    </div>
                    <div class="card ">
                        <h4>Emploi</h4>
                    </div>
                    <div class="card ">
                        <h4>Emploi</h4>
                    </div>
                </div>
            </section>
        </main>
    </section>
    <script src="../scripts/class_page.js"></script>
</body>
</html>