<?php include '../logic_php_layer/login-page-logic.php'; ?>
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
    <header class="h-main">
        <div class="header-logo-container">
            <a href="../index.php">Corner</a>
        </div>
        <nav>
            <a href="./updates.html">Updates</a>
            <a href="./login.html">Login</a>
        </nav>
    </header>

    <main>
        <h1 style="text-align: center;">Login</h1>
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
</body>
</html>