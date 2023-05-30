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
    <link rel="stylesheet" href="../styles/class-ad-page.css" >
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
                    <div id='emploi_btn' class="card">
                        <h4>Add Emploi</h4>
                    </div>
                    <div class="card emploi_card">
                        <h4>Emploi</h4>
                    </div>
                    <div id='connections_btn' class="card ">
                        <h4>Connections</h4>
                    </div>
                    <div id='creat_class_btn' target='_blank' class="card chat_card">
                        <h4>Creat Class</h4>
                    </div>
                </div>
            </section>
            <section>
                <h1>Add emploi:</h1>
                <form id='add_emploi_form' action="../api/upload.php" method='post' enctype='multipart/form-data'>
                    <div class="form-row">
                        <label for="emploi">Emploi pdf:</label>
                        <input type="file" name='emploiPdf' accept='.pdf'>
                    </div>
                    <div class="form-row">
                        <input type="submit" value='upload'>
                    </div>
                </form>
            </section>
        </main> 
    </section>
    <script src="../scripts/class_ad_page.js"></script>
</body>
</html>