<?php
include_once '../usefulFunctions.php';
check_general_authentication();
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
                    <div target='_blank' href='../api/class_A.php?req=emploi' class="card">
                        <h4>Chat</h4>
                    </div>
                    <div class="card">
                        <h4>Cours</h4>
                    </div>
                    <div class="card emploi_card">
                        <h4>Emploi</h4>
                    </div>
                    <div class="card ">
                        <h4>Emploi</h4>
                    </div>
                </div>
            </section>
            <section class='messages-outer-container'>
                <h1>latest messages: </h1>
                <div class="messages-container">
                    <div class="one-message-container">
                        <div class="user-identifier">
                            <span class="message-user-name">Ilias</span>
                            <span class="message-datetime">2023-05-17 6:23pm</span>
                        </div>
                        <p>Hello</p>
                    </div>

                    <div class="one-message-container my-message">
                        <div class="user-identifier">
                            <span class="message-user-name">John</span>
                            <span class="message-datetime">2023-05-17 7:45pm</span>
                        </div>
                        <p>How are you doing?</p>
                    </div>

                    <div class="one-message-container">
                        <div class="user-identifier">
                            <span class="message-user-name">Sarah</span>
                            <span class="message-datetime">2023-05-17 8:12pm</span>
                        </div>
                        <p>Hey there!</p>
                    </div>

                    <div class="one-message-container">
                        <div class="user-identifier">
                            <span class="message-user-name">Ilias</span>
                            <span class="message-datetime">2023-05-17 8:35pm</span>
                        </div>
                        <p>I'm doing well, thank you!</p>
                    </div>
                </div>
            </section>
            <section class='message-writing-container'>
                <input type="text" placeholder='type message here..'>
                <input type="button" value='send'>
            </section>
        </main> 
    </section>
    <script src="../scripts/class_page.js"></script>
</body>
</html>