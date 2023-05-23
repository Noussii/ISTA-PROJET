<?php
require_once 'User.php';


class Teacher extends User{

    private $id;

    function __construct($id){
        $this->id = $id;
    }

    public function return_all_data(){
        try{
            // $sql = 'select distinct teacher.first_name, teacher.phone_number, teacher.email, subject_name, class.name from teacher join subject on teacher.teacher_id = subject.teacher_id join student on subject.class_id = student.class join class on class.class_id = student.class 
            // where teacher.teacher_id = ?;';
            $sql = 'select first_name, last_name, email, phone_number, contact_email from teacher where teacher.teacher_id = ?;';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->id]);
            $result = $stmt->fetch();
            if($result){
                return $result;
            }else return 'no data';
        }catch(PDOException $e){
            return $e;
        }
    }

    public function get_my_subjects_from_class_id($classId){
        try{
            $sql = 'select subject_id, subject_name from subject 
            where subject.teacher_id = ? and subject.class_id = ?;';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->id, $classId]);
            $result = $stmt->fetchAll();
            if($result){
                return $result;
            }else return 'no data';
        }catch(PDOException $e){
            return $e;
        }
    }
    public function get_my_classes(){
        try{
            $sql = 'select distinct class.class_id, class.name from class 
            join subject on subject.class_id = class.class_id
            where subject.teacher_id = ?;';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->id]);
            $result = $stmt->fetchAll();
            if($result){
                return $result;
            }else return 'no data';
        }catch(PDOException $e){
            return $e;
        }
    }
    public function get_students_notes_from_subject_id($subject_id){
        try{
            $sql = 'select student.first_name, note.controle_1, note.controle_2, note.controle_3, note.EFM from note join subject on note.subject_id = subject.subject_id join student on student.student_id = note.student_id
            where subject.subject_id = ?;';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$subject_id]);
            $result = $stmt->fetchAll();
            if($result){
                return $result;
            }else return 'no data';
        }catch(PDOException $e){
            return $e;
        }
    }
}