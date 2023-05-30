<?php
include_once '../usefulFunctions.php';
include_once '../classes/Dbc.php';
include_once '../classes/Article.php';
if(check_general_authentication()){
    if(isset($_GET['q'], $_GET['n']) && $_GET['q'] === 'latest'){
        if((int) $_GET['n'] < 30 && (int) $_GET['n'] > 0){
            $articles = Article::get_latest_articles_with_range((int) $_GET['n']);
            if($articles){
                header('Content-Type: application/json');
                echo json_encode($articles);
            }else echo json_encode(['empty' => true]);
        }
    }

    // here ref means article id in the db;
    if(isset($_GET['q'], $_GET['ref']) && $_GET['q'] == 'sing'){

        $article = Article::get_single_article_with_id((int) $_GET['ref']);
        header('Content-Type: application/json');
            if($article){
                echo json_encode($article);
            }else{
                header('Content-Type: application/json');
                echo json_encode(['empty' => true]);
            }
    }
}


