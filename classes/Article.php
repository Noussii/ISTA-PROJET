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
                for($i = 0; $i < count($result); $i++){
                        $global_json_file = json_decode(file_get_contents('../config.json'), true);
                        $result[$i]['key_img_path'] = $global_json_file['domain'].$result[$i]['key_img_path'];
                    }
                    return $result;
                }else{
                    return false;
                }
            }catch(RuntimeException $e){
                return $e->getMessage();
            }
    }

    public static function get_latest_articles_briefly_with_range(int $max_num_of_rows){
        $dbc = new Dbc();
        try{
            $pre_stmt = "select article_id, title, date_time, user_type from article order by date_time desc limit $max_num_of_rows";
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
                $global_json_file = json_decode(file_get_contents('../config.json'), true);
                $result['key_img_path'] = $global_json_file['domain'].$result['key_img_path'];
                return $result;
            }else{
                return false;
            }
        }catch(RuntimeException $e){
            return $e->getMessage();
        }
}

    public static function get_publisher_data(int $article_id){
        $dbc = new Dbc();
        try{
            // Retrieve publisher_id and user_type
            $pre_stmt = "SELECT publisher_id, user_type FROM article WHERE article_id = ?";
            $stmt = $dbc->connect()->prepare($pre_stmt);
            $stmt->execute([$article_id]);
            $result = $stmt->fetch();
            
            if($result){
                $publisher_id = $result['publisher_id'];
                $user_type = $result['user_type'];

                // Retrieve publisher data based on user_type
                $pre_stmt = '';
                switch($user_type){
                    case 'administration':
                        $pre_stmt = "SELECT administration_id AS id, first_name, last_name FROM administration WHERE administration_id = ?";
                        break;
                    case 'teacher':
                        $pre_stmt = "SELECT teacher_id AS id, first_name, last_name FROM teacher WHERE teacher_id = ?";
                        break;
                    case 'student':
                        $pre_stmt = "SELECT student_id AS id, first_name, last_name FROM student WHERE student_id = ?";
                        break;
                    default:
                        // Invalid user_type
                        return false;
                }

                $stmt = $dbc->connect()->prepare($pre_stmt);
                $stmt->execute([$publisher_id]);
                $result = $stmt->fetch();
                
                if($result){
                    return $result;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }catch(RuntimeException $e){
            return $e->getMessage();
        }
    }

}