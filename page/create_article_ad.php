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
    <link rel="stylesheet" href="../styles/create_article_ad_page.css" >
    <!-- <link rel='stylesheet' href='../styles/bootstrap/css/bootstrap.min.css'> -->
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
                <form action="../api/create_article_A.php" method='post' enctype="multipart/form-data">

                    <div class="form-row" style='justify-content: left; gap: 20px'>
                        <label for="title"><h3>Title:</h3></label>
                        <input id='title' name='title' type="text" placeholder='Enter title' required>
                    </div>
                    <div class="upload-img">
                        <h3>upload img:</h3>
                        <input onchange="updatePreview(this, 'image-preview')" class='form-control-file is-invalid'  type="file" name="key_img" id="key_img" accept='.png, .jpeg, .jpg'>
                        <div id='image-preview-container'>
                            <img id='image-preview'/>
                        </div>
                    </div>
                    
                    <div class="article-body">
                        <h3>Article body:</h3>
                        <textarea required name="body" id="body" rows="10" placeholder='your text here...' style='width: 100%; max-width: 100%; min-width: 100%; height: auto;'></textarea>
                    </div>
                    
                    <div class="resources">
                        <h3>resources:</h3>
                        <input type="file" name="resources" id="resources" multiple>
                    </div>
                    <input type="submit" value="publish">
                </form>
            </section>
        </main> 
    </section>
    <dialog id='success-dialog'>
        <h1>Result:</h1>
    </dialog>
    <script src="../scripts/create_article_ad_page.js"></script>
</body>
</html>