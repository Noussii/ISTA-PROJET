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
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/login-page.css">

</head>
<body>
    <?php include '../page_components/header_public.php'; ?>
    <main>
        <div class="alert-message">
            <span class='err-title'>something wrong: </span>
            <span>please enter a valid email and password.</span>
        </div>
        <h1 class='login-title'>Login</h1>
        <form action="../api/authentication.php" method="post">
            <legend>Fill in your login credentials:</legend>
            <div class="form-row">
                <input autofocus required placeholder="Email" type="text" name="email" id="email">
            </div>
            <div class="form-row">
                <input required placeholder="Password" type="password" name="password" id="password">
            </div>
            <div class="form-row">
                <input type="submit" value="Login" name='submit'>
            </div>
            <div class="form-row">
                <a style="color: rgb(78, 78, 78); font-size: 15px;" href="../page/login-help.html">get help</a>
            </div>
        </form>
    </main>
    <script src="../scripts/login_page.js"></script>
</body>
</html>