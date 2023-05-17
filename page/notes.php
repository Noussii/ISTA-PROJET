<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../styles/notes.css'>
    <title>corner - notes</title>
</head>
<body>
    <?php include_once '../page_components/header_student.php'; ?>
    <?php include_once '../page_components/feed_left_side_student.php'; ?>
    <section class="outer-container">
        <main class="main-container-reactive">
            <section>
                <h1>the following are your marks:</h1>
                <table id='notes-table' border='1'>
    <thead>
        <tr>
            <th>subject_name</th>
            <th>controle 1</th>
            <th>controle 2</th>
            <th>controle 3</th>
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