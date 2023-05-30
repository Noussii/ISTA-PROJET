<?php
require_once 'Dbc.php';

class Article {


    public static function get_latest_articles_with_range(int $max_num_of_rows){
            $dbc = new Dbc();
            try{
                $pre_stmt = "select * from article order by date_time desc limit $max_num_of_rows";
                $stmt = $dbc->connect()->prepare($pre_stmt);
                $stmt->execute();
                $result = $stmt->fetchAll();
                if(count($result) > 0){
                    return $result;
                }else{
                    return false;
                }
            }catch(RuntimeException $e){
                return $e->getMessage();
            }
    }

    public static function get_single_article_with_id(int $article_id){
        $dbc = new Dbc();
        try{
            $pre_stmt = "select * from article where article_id = ?";
            $stmt = $dbc->connect()->prepare($pre_stmt);
            $stmt->execute([$article_id]);
            $result = $stmt->fetch();
            if($result){
                return $result;
            }else{
                return false;
            }
        }catch(RuntimeException $e){
            return $e->getMessage();
        }
}
}