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
                    <div target='_blank' class="card chat_card">
                        <h4>Chat</h4>
                    </div>
                    <div class="card">
                        <h4>Cours</h4>
                    </div>
                    <div class="card emploi_card">
                        <h4>Emploi</h4>
                    </div>
                    <div class="card ">
                        <h4>Annonce</h4>
                    </div>
                </div>
            </section>
            <section class='messages-outer-container' id='updated-container'>
                <h1>Derniers messages :</h1>
                <div class="messages-container">
                    <div class="one-message-container">
                        <div class="user-identifier">
                            <span class="message-user-name">Ilias</span>
                            <span class="message-datetime">2023-06-07 6:23pm</span>
                        </div>
                        <p>Salut</p>
                    </div>

                    <div class="one-message-container my-message">
                        <div class="user-identifier">
                            <span class="message-user-name">SNOUSSI</span>
                            <span class="message-datetime">2023-06-07 7:45pm</span>
                        </div>
                        <p>Bonjour !</p>
                    </div>

                    <div class="one-message-container">
                        <div class="user-identifier">
                            <span class="message-user-name">Ilias</span>
                            <span class="message-datetime">2023-06-07 8:12pm</span>
                        </div>
                        <p>Demain la compétition</p>
                    </div>

                    <div class="one-message-container">
                        <div class="user-identifier">
                            <span class="message-user-name">SNOUSSI</span>
                            <span class="message-datetime">2023-06-07 8:35pm</span>
                        </div>
                        <p>Oui, on va gagner sans doute.</p>
                    </div>
                </div>
                <section class='message-writing-container'>
                    <input type="text" placeholder='Saisissez votre message ici...'>
                    <input type="button" value='send'>
                </section>
            </section>
        </main> 
    </section>
    <script src="../scripts/class_page.js"></script>
</body>
</html>