<?php
require_once '../usefulFunctions.php';
require_once '../classes/Article.php';

if(check_general_authentication()){
    if(return_user_type() === 'administration'){
        if(isset($_FILES['key_img'])){
            $saving_img_success = false;
            $img_name = false;
            try{
                $key_img = $_FILES['key_img'];
                echo var_dump($key_img);
                $img = file_get_contents($key_img['tmp_name']);
                $in_server_img_name = time().'.jpg';
                file_put_contents($_SERVER['DOCUMENT_ROOT'].'/resources/img/articles/'.$in_server_img_name, $img);
                $saving_img_success = true;
                $img_name = $in_server_img_name;
            
            }catch(RuntimeException $e){
                $saving_img_success = false;
            }
            $title = $_POST['title'];
            $body = $_POST['body'];
            
            if(!empty($title) && !empty($body)){
                if($saving_img_success && $img_name){
                    //create_new_article(int $publisher_id, int $publisher_type, $title, $body, $resources_arr);
                    // img_name comes from the lines above after checking for errors. 
                    $sucess = Article::create_new_article((int) $_SESSION['user_id'], $_SESSION['user_type'], $title, $body, $img_name, null);
                    echo $sucess;
                }
            }
        }
    }
}