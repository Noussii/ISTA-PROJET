<?php
require_once 'Dbc.php';

class Notification extends Dbc{
    private $recepient_id;
    private $recepient_type;
    private $context;
    private $message;
    private $link = false;

    function __construct($recepient_id, $recepient_type, $context, $message, $link){
        $this->recepient_id = $recepient_id;
        $this->recepient_type = $recepient_type;
        $this->context = $context;
        $this->message = $message;
        if($link) $this->link = $link;
    }

    public static function class_notification_class_id($class_id, $noti_message){

        
        try{

            $sql = "INSERT INTO ista_website_db.notification (recepient, message, checked, context, user_type, link, date)
                SELECT s.student_id, ?, 0, 'administration', 'student', '/page/class.php', CURRENT_DATE()
                FROM ista_website_db.student s
                JOIN ista_website_db.class c ON s.class = c.class_id
                WHERE c.class_id = ?;";

            $stmt = new Dbc();
            $stmt = $stmt->connect()->prepare($sql);
            $stmt->execute([$noti_message, $class_id]);
        }catch (PDOException $e){
            return false;
            echo $e->getMessage();
        }

    }

    public function send(){
        $success = true;
        try{
            if($this->link){
                $sql = 'insert into notification (recepient, message, checked, context, user_type, link) 
                values (?, ?, ?, ?, ?, ?);';
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([(int) $this->recepient_id, $this->message, 0, $this->context, $this->recepient_type, $this->link]);
            }else{
                $sql = 'insert into notification (recepient, message, checked, context, user_type) 
                values (?, ?, ?, ?, ?);';
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([(int) $this->recepient_id, $this->message, 0, $this->context, $this->recepient_type]);
            }
        }catch (PDOException $e){
            $success = false;
            echo $e->getMessage();
        }
        return $success;
    }

    public static function get_all_notifications($recepient_id ,$recepient_type){
        try{
            $pre_stmt = "select notification_id as noti_id, message, checked, context, date, link from notification where recepient = ? and user_type = ? order by checked desc;";
            $stmt = new Dbc();
            $stmt = $stmt->connect()->prepare($pre_stmt);
            $stmt->execute([$recepient_id, $recepient_type]);
            $result = $stmt->fetchAll();
            if(count($result) > 0){
                return $result;
            }
        }catch (PDOException $e){
            $success = false;
            echo $e->getMessage();
        }
    }

    public static function set_to_checked_with_noti_id($noti_id, $user_id, $user_type){
        $success = false;
        try{
            $pre_stmt = "update notification set checked = 1 where notification_id = ? and recepient = ? and user_type = ?;";
            $stmt = new Dbc();
            $stmt = $stmt->connect()->prepare($pre_stmt);
            $success = $stmt->execute([$noti_id, $user_id, $user_type]);
            return $success;
        }catch (PDOException $e){
            return $success;
            echo $e->getMessage();
        }
    }
}