<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../styles/notes.css'>
    <title>corner - notes</title>
    <link rel="icon" type="image/x-icon" href="../media/fav.ico">
</head>
<body>
    <?php include_once '../page_components/header_student.php'; ?>
    <?php include_once '../page_components/feed_left_side_student.php'; ?>
    <section class="outer-container">
        <main class="main-container-reactive">
            <section>
                <h1>Vos notes :</h1>
                <table id='notes-table' border='1'>
    <thead>
        <tr>
            <th>Nom de la matière</th>
            <th>Contrôle 1</th>
            <th>Contrôle 2</th>
            <th>Contrôle 3</th>
            <th>EFM</th>
        </tr>
    </thead>
    <tbody id='notes-body'>

    </tbody>
</table>

            </section>
        </main>
    </section>
    <script src="../scripts/notes-page.js"></script>
</body>
</html>