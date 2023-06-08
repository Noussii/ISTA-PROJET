<?php
require_once 'Dbc.php';
require_once 'Notification.php';

class Announcement extends Dbc {

    private $sender_id;
    private $sender_type;
    private $class_id;
    private $announcement_body;

    public function __construct(int $sender_id, string $sender_type, int $class_id){
        $this->sender_id = $sender_id;
        $this->sender_type = $sender_type;
        $this->class_id = $class_id;
    }
    public function set_body(string $body_txt = 'empty'){
        $this->announcement_body = $body_txt;
    }
    public function send(){
        try {
            $sql = "INSERT INTO announcement (sender_id, sender_type, class_id, body, date_time) VALUES(?, ?, ?, ?, ?);";
            $stmt = $this->connect()->prepare($sql);
            $sucess = $stmt->execute([$this->sender_id, $this->sender_type, $this->class_id, $this->announcement_body, date('Y-m-d h:i:s')]);
            if($sucess){
                Notification::class_notification_class_id($this->class_id, "your $this->sender_type has announced something new.", $context = 'teacher', $user_type = 'student', $link = 'class.php?l=anouncement');
            }
            return $sucess;
        }catch (PDOException $e){
            return false;
        }
    }


    public static function retreive_announcement_from_class_id(int $std_id){
        try {
            $dbc = new Dbc();
            $sql = "SELECT a.announcement_id, a.sender_type, a.body, a.date_time, 
            CASE 
              WHEN a.sender_type = 'teacher' THEN t.first_name
              WHEN a.sender_type = 'administration' THEN adm.first_name
            END AS first_name,
            CASE 
              WHEN a.sender_type = 'teacher' THEN t.last_name
              WHEN a.sender_type = 'administration' THEN adm.last_name
            END AS last_name
            FROM announcement a
            LEFT JOIN teacher t ON a.sender_id = t.teacher_id AND a.sender_type = 'teacher'
            LEFT JOIN administration adm ON a.sender_id = adm.administration_id AND a.sender_type = 'administration' join student on student.class = a.class_id where student_id = ? order by date_time desc;";


            $stmt = $dbc->connect()->prepare($sql);
            $stmt->execute([$std_id]);
            $results = $stmt->fetchAll();
            if(count($results) > 0){
                return  $results;
            }else{
                return false;
            }
        }catch (PDOException $e){
            return false;
        }
    }
}