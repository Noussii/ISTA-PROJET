<?php
include_once '../usefulFunctions.php';
include_once '../classes/Dbc.php';
if(check_general_authentication()){
    if(isset($_GET['q'], $_GET['n']) && $_GET['q'] === 'latest'){
        if((int) $_GET['n'] < 30 && (int) $_GET['n'] > 0){
            $dbc = new Dbc();
            $max_num_of_rows = (int)$_GET['n'];
            $pre_stmt = "select * from article limit $max_num_of_rows";
            $stmt = $dbc->connect()->prepare($pre_stmt);
            $stmt->execute();
            $result = $stmt->fetchAll();
            if(count($result) > 0){
                header('Content-Type: application/json');
                echo json_encode($result);
            }else{
                header('Content-Type: application/json');
                echo json_encode(['empty' => true]);
            }
        }
    }
}
