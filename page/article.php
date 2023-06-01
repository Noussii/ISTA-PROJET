<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article</title>
    <link rel="stylesheet" href="../styles/root_styles.css">
    <link rel="stylesheet" href="../styles/article-page.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="../media/fav.ico">

</head>
<body>
    <?php include_once "../page_components/header_public.php" ?>
    <div class='article-page-top-img-container'>
        <img src="../media/default_article_img.jpg" alt="">
    </div>
    <div class='article-page-outer-container'>
        <div class='article-page-nested-outer-container'> 
            <aside id='left-side-articles-container'>
                <div id='left-side-articles-inner-container'>
                    <h4 style='margin-top: 10px; text-align: center;'>Latest:</h4>
                </div>
            </aside>
                <main class='article-page-inner-conainer'>
                    <div class="publisher">
                        <span class='img-span'>
                            img
                        </span>
                        <span class='txt-span'>
                            <h5>hello</h5>
                            <h5>hel</h5>
                        </span>
                    </div>
                    <article id='article'>
                        <h1 id='article-title'>Title</h1>
                        <div class='img-container'>
                            <img id='key-img' src="../media/default_article_img.jpg" alt="default-img">
                        </div>
                        <p id='article-body'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam repellendus adipisci dolorem consequuntur, cumque ut numquam facere vel facilis ea ducimus esse, odio omnis tempore velit accusantium assumenda beatae sapiente.</p>
                    </article>
                </main>
        </div>
    </div>

    <script src='../scripts/article_page.js'></script>
    <?php include_once '../page_components/footer_public.php'; ?>
</body>
</html>
