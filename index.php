<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Corner</title>
        <link rel="stylesheet" href="/styles/index.css">
        
    </head>
    <body>
    <?php include "./page_components/header_public.php"; ?>
    
    <section class="slidshow">
        <h1 class="slidshow-title">Hello php</h1>
        <img width="100%" src="/media/ista.jpg" alt="">
        <div class="clickable"></div>
    </section>
    <main id="main-content">
        <section class="section-1">
            <div class="section-1-inner-container">
                <div class="first">
                    <h1 class="section-1-box-title">les derniere annoncements:</h1>
                    <h3 class="section-1-box-buttom-right-title">Savoire plus.</h3>
                </div>
                <div class="second">
                    <h1 class="section-1-box-title">L'espace stagiaire:</h1>
                    <h3 class="section-1-box-buttom-right-title">Savoire plus.</h3>
                </div>
                <div class="third">
                    <h1 class="section-1-box-title">L'espace stagiaire:</h1>
                    <h3 class="section-1-box-buttom-right-title">Entrer.</h3>
                </div>
            </div>
        </section>
        <a class="go-to-main-btn" href="#main-content">▼</a>
        <section class="section-2">
            <div class="section-2-inner-container">
                <img width="50%" src="/media/ista.jpg">
                <div class="text">
                    <h1>ISTA Lazaret</h1>
                    <p>    
                        institution since 1945 this Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed distinctio harum velit iure quod, ratione rerum porro maxime fuga explicabo voluptate soluta eligendi numquam dolorem corrupti voluptas dolore. Deleniti, delectus?
                    </p>
                </div>

            </div>
        </section>
    </main>

    <script src="/scripts/index.js"></script>
</body>
</html>