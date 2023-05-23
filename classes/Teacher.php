<?php
require_once 'User.php';
require_once 'Notification.php';


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
            $sql = 'select student.student_id, student.first_name, student.last_name, note.controle_1, note.controle_2, note.controle_3, note.EFM from note join subject on note.subject_id = subject.subject_id join student on student.student_id = note.student_id
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
    public function set_students_notes_from_json($json_arr){
        $success = false;
        try{
            foreach ($json_arr as $idx => $obj_arr) {
                $sql = 'update note set controle_1 = ?, controle_2 = ?, controle_3 = ?, EFM = ?  where student_id = ? and subject_id = ?;';
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$obj_arr['controle_1'], $obj_arr['controle_2'], $obj_arr['controle_3'], $obj_arr['EFM'], $obj_arr['student_id'], $obj_arr['subject_id']]);
                $success = true;
                // construct($recepient_id, $recepient_type, $context, $message);
                $teacher_name = $this->return_all_data()['first_name'];
                $noti = new Notification($obj_arr['student_id'], 'student', 'teacher', "teacher $teacher_name has updated your marks", null);
                $noti->send();
            }
            }catch(RuntimeException $e){
            header('location:../api/test.php?err='.$e->getMessage());
            echo $e->getMessage();
        }
        return $success;
    }
}