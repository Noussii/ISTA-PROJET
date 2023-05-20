<?php
require_once 'User.php';


class Teacher extends User{

    public function return_all_data($id){
        try{

            $sql = 'select distinct teacher.first_name, teacher.phone_number, teacher.email, subject_name, class.name from teacher join subject on teacher.teacher_id = subject.teacher_id join student on subject.class_id = student.class join class on class.class_id = student.class 
            where teacher.teacher_id = ?;';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetchAll();
            if($result){
                return $result;
            }else return 'no data';
        }catch(PDOException $e){
            return $e;
        }
    }
}