<?php
include_once '../usefulFunctions.php';
check_general_authentication();
if(return_user_type() !== 'student') {
    header('location:./unauthorized.php');
    exit();
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
    <link rel="icon" type="image/x-icon" href="../media/fav.ico">

</head>
<body>
    <?php 
    add_header_and_left_side_after_auth();
    ?>
    <section class='outer-container'>
        <main class='main-container-reactive'>
            <section>
                <div class="top-cards-container">
                    <div class="card emploi_card">
                        <h4>Emploi</h4>
                    </div>
                    <div class="card ">
                        <h4>Annonce</h4>
                    </div>
                    <div class="card">
                        <h4>Cours</h4>
                    </div>
                    <div target='_blank' class="card chat_card disabled-card">
                        <h4>Chat</h4>
                    </div>
                </div>
            </section>
            <section class='messages-outer-container disabled-section' id='updated-container'>
               
            </section>
        </main> 
    </section>
    <script src="../scripts/class_page.js"></script>
</body>
</html>