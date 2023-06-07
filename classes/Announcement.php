<?php
require_once './Dbc.php';

class Announcement extends Dbc {

    private $teacher_id;
    private $class_id;
    private $subject_id;
    private $announcement_body;

    public function __construct(int $teacher_id, int $class_id, int $subject_id){
        $this->teacher_id = $teacher_id;
        $this->class_id = $class_id;
        $this->subject_id = $subject_id;
    }
    public function set_body(string $body_txt = 'empty'){
        $this->announmenemt_body = $body_txt;
    }
    public function send(){
        try {
            $sql = "INSERT INTO announcement (teacher_id, class_id, subject_id, body, date_time VALUES(?, ?, ?, ?, ?);";
            $stmt = $this->connect()->prepare($sql);
            $sucess = $stmt->execute([$this->teacher_id, $this->class_id, $this->subject_id, $this->announcement_body, date('Y-m-d h:i:s')]);
            return $sucess;
        }catch (PDOException $e){
            return false;
            echo $e;
        }
    }
}