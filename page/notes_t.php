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
        <div class='class-module-div'>
        <div>
            <label for="classes_select">Classe: </label>
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
        </div>
        <div>
            <label for="module">Module: </label>
            <select name="module" id="module">
            </select>
        </div>
        </div>
                <input type="button" value="Filtrer" id='top_filter_btn'>
            </section>
            
            <section>
        <h1>Remplir/Modifier les notes des stagiaires:</h1>
        
        <table id='notes-table' border='1'>
    <thead>
        <tr>
            <th>stagiaire</th>
            <th>Contrôle 1</th>
            <th>Contrôle 2</th>
            <th>Contrôle 3</th>
            <th>EFM</th>
        </tr>
    </thead>
    <tbody id='notes-table-body'>
        
    </tbody>

    </table>
    </section>
    <section>
        <input class='submit-notes' type="submit" value="Soumettre les notes">
    </section>
</main>
</section>
<dialog data-modal id='notes_confirmation_dialog'>
    <h1>Êtes-vous sûr de vouloir mettre à jour les notes des stagiaires ?</h1>
    <p>Ces modifications seront affichées aux staigiares en tant que leurs nouvelles notes.</p>
    <div class='buttons-div'>
        <button id='close_notes_modal_btn'>cancel</button>
        <button id='confirme_notes_modal_btn'>confirme</button>
    </div>
</dialog>
    <script src="../scripts/notes_t.js"></script>
</body>
</html>