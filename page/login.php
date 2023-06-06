<?php 
include_once '../usefulFunctions.php'; 
check_authentication_with_redirection_logged_in('./feed.php')
;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../media/fav.ico">
    <!-- <link rel="stylesheet" href="../styles/index.css"> -->
    <link rel="stylesheet" href="../styles/login-page.css">

</head>    
<body>
    <?php include '../page_components/header_public.php'; ?>
    <main>
    <div class="container">
        <div class="uf-form-signin form-container">

            <div class="text-center">
                <a href="../index.php"><img src="../media/logo.png" alt="" width="88" height="100"></a>
                <h1 class="text-dark h3 mt-3">Connexion</h1>
            </div>
            <form class="mt-4" action="../api/authentication.php" method="post">
                <div class="input-group uf-input-group input-group-lg mb-3">
                    <span class="input-group-text fa fa-user"></span>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Adresse e-mail" required >
                </div>
                <div class="input-group uf-input-group input-group-lg mb-3">
                    <span class="input-group-text fa fa-lock"></span>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
                </div>
                <div class="d-flex mb-3 justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input uf-form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-dark" for="exampleCheck1">Remember Me</label>
                    </div>
                    <a href="#">Mot de passe oublié ?</a>
                </div>
                <div class="d-grid mb-4">
                    <button type="submit"  name="submit" class="btn btn-cc btn-lg text-white">Connexion</button>
                </div>
            <!-- Alert-message section -->
                <div class="alert alert-danger alert-dismissible fade" id="alert-message" style="display:none;">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="Close()"></button>
                    <span class="err-title">Quelque chose s'est mal passé : Veuillez entrer une adresse e-mail et un mot de passe valides.</span>
                </div>

                <div class="d-flex mb-3">
                    <div class="dropdown-divider m-auto w-25"></div>
                    <small class="text-nowrap text-dark"><a href="../page/login-help.html">Obtenir de l'aide</a> </small>
                    <div class="dropdown-divider m-auto w-25"></div>
                </div>

            </form>
        </div>
    </div>
</main>
<script src="../styles/bootstrap/js/bootstrap.min.js"></script>
<script src="../scripts/login_page.js"></script>

</body>
</html>