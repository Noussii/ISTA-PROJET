<?php
include_once '../usefulFunctions.php';
include_once '../classes/Teacher.php';
check_general_authentication(); 
?>
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
    
    <?php
        add_header_and_left_side_after_auth();
    ?>



<section class="outer-container">
    <main class="main-container-reactive">
    <section class='teacher_top_section'>
        <label for="classes_select">class: </label>
        <select name="classes" id="classes_select">
        <?php
        $teacher = new Teacher($_SESSION['user_id']);
        $classes = $teacher->get_my_classes();
        // echo var_dump($classes);
        foreach($classes as $idx => $class_arr){
        ?>
            <option value="<?=$class_arr['class_id']?>"><?=$class_arr['name']?></option>
  <?php }?>
        </select>
        <label for="module">module</label>
        <select name="module" id="module">
        </select>
        <input type="button" value="filter" id='top_filter_btn'>
    </section>
        
    <section>
        <h1>manipulate students marks:</h1>
        <table id='notes-table' border='1'>
    <thead>
        <tr>
            <th>student</th>
            <th>controle 1</th>
            <th>controle 2</th>
            <th>controle 3</th>
            <th>EFM</th>
        </tr>
    </thead>
    <tbody id='notes-table-body'>
        
    </tbody>
</table>

            </section>
        </main>
    </section>
    <script src="../scripts/notes_t.js"></script>
</body>
</html>