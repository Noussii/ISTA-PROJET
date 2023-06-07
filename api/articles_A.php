<?php
include_once '../usefulFunctions.php';
include_once '../classes/Dbc.php';
include_once '../classes/Article.php';
// if(check_general_authentication()){
    if(true){

        if(isset($_GET['n'])){
            if((int) $_GET['n'] < 30 && (int) $_GET['n'] > 0){
                if(isset($_GET['bfr_date'], $_GET['n']) && $_GET['q'] == 'bfr_date'){
                    $pattern = '/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/';
                    $bfr_date = $_GET['bfr_date'];
                    if (preg_match($pattern, $bfr_date)) {
                        $data = Article::get_latest_articles_with_range_and_date($bfr_date, (int) $_GET['n']);
                        if($data){
                            // echo 'fuck you '.'<br>';
                            header('Content-Type: application/json');
                            echo json_encode($data);
                            exit();
                        }
                    }
                }
            }
            
        }
    if(isset($_GET['q'], $_GET['n']) && $_GET['q'] === 'latest'){
        if((int) $_GET['n'] < 30 && (int) $_GET['n'] > 0){
            //no_b refers to no body retreival.
            if(isset($_GET['bfr_date'], $_GET['n']) && $_GET['q'] == 'bfr_date'){
                $pattern = '/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/';
                $bfr_date = $_GET['bfr_date'];
                if (preg_match($pattern, $bfr_date)) {
                    $data = Article::get_latest_articles_with_range_and_date($bfr_date, (int) $_GET['n']);
                    if($data){
                        // echo 'fuck you '.'<br>';
                        header('Content-Type: application/json');
                        echo json_encode($data);
                        exit();
                    }
                }
            }
            if(isset($_GET['no_b']) && (int)$_GET['no_b'] === 1){
                $briefs = Article::get_latest_articles_briefly_with_range((int) $_GET['n']);
                header('Content-Type: application/json');
                echo json_encode($briefs);
                exit();
            }
            $articles = Article::get_latest_articles_with_range((int) $_GET['n']);
            if($articles){
                header('Content-Type: application/json');
                echo json_encode($articles);
                exit();
            }else echo json_encode(['empty' => true]);

            
        }
    }

    // here ref means the article id in the db;
    if(isset($_GET['q'], $_GET['ref']) && $_GET['q'] == 'sing'){

        $article = Article::get_single_article_with_id((int) $_GET['ref']);
        header('Content-Type: application/json');
            if($article){
                echo json_encode($article);
                exit();
            }else{
                header('Content-Type: application/json');
                echo json_encode(['empty' => true]);
                exit();
            }
    }
    if(isset($_GET['ref'], $_GET['q']) && $_GET['q'] == 'publisher'){
        echo json_encode(Article::get_publisher_data((int) $_GET['ref']));
    }
}
