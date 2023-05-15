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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- <link rel="stylesheet" href="../styles/index.css"> -->
    <link rel="stylesheet" href="../styles/login-page.css">

</head>    
<body>
    <?php include '../page_components/header_public.php'; ?>
    <main>
    <div class="container">
        <div class="uf-form-signin">

            <div class="text-center">
                <a href="../index.php"><img src="../media/logo.png" alt="" width="100" height="100"></a>
                <h1 class="text-dark h3">Account Login</h1>
            </div>
            <form class="mt-4" action="../api/authentication.php" method="post">
                <div class="input-group uf-input-group input-group-lg mb-3">
                    <span class="input-group-text fa fa-user"></span>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email address" required >
                </div>
                <div class="input-group uf-input-group input-group-lg mb-3">
                    <span class="input-group-text fa fa-lock"></span>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="d-flex mb-3 justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input uf-form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-dark" for="exampleCheck1">Remember Me</label>
                    </div>
                    <a href="#">Forgot password?</a>
                </div>
                <div class="d-grid mb-4">
                    <button type="submit"  name="submit" class="btn btn-cc btn-lg text-white">Login</button>
                </div>
            <!-- Alert-message section -->
                <div class="alert alert-danger alert-dismissible fade" id="alert-message" style="display:none;">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="Close()"></button>
                    <span class="err-title">Something went wrong: Please enter a valid email and password.</span>
                </div>

                <div class="d-flex mb-3">
                    <div class="dropdown-divider m-auto w-25"></div>
                    <small class="text-nowrap text-dark"><a href="../page/login-help.html">Get help</a> </small>
                    <div class="dropdown-divider m-auto w-25"></div>
                </div>

            </form>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FjDxuMwS0W2fHJjz0Q2O/QOvBfW1RlC1dUGO+qz3JZVRVu/3+J1pU6z5U3q5o6L" crossorigin="anonymous"></script>
<script src="../scripts/login_page.js"></script>

</body>
</html>