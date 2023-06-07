<?php
include_once '../usefulFunctions.php';
check_general_authentication();
if(return_user_type() !== 'teacher') {
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
    <link rel="stylesheet" href="../styles/class-page-t.css" >
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
                    
                    <button type='button' class="card annonce-btn">
                        <h4>Annonce</h4>
                    </button>
                
                    <button type='button' class="card cours-btn">
                        <h4>Cours</h4>
                    </button>
                    
                </div>
            </section>
            <section>
                <label for="class-select">Select a class:</label>
                <select name="class_list" id="class-select"></select>
            </section>
            <section id='updated-container'>
                <!-- this will change dynamically -->
            </section>
        </main> 
    </section>
    <script src="../scripts/class_page_t.js"></script>
</body>
</html>