<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            flex-direction: column;
            align-items: center;
            font-family: monospace, sans-serif;
        }
        img[alt="error 401"]{
            width: 60%;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <?php include_once '../page_components/header_public.php'; ?>
    <img src="../media/unauthorized_design.jpg" alt="error 401">
    <h1>unauthorized access</h1>
    <a href="../index.php">Go back to home page.</a>
    
</body>
</html>