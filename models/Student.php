<?php
require_once 'Dbc.php';
require_once 'User.php';

class Student extends User{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $is_responsable;
    private $is_publisher;
    private $phone_number;
    private $contact_email;
    private $national_student_id;
    private $class; // this property have the type of an ASSOC ;

    function __construct($student_id){
        $data = $this->retreive_user_all_data($student_id, 'student'); // retreives all data of student table (by parent method);
        if($data){
            $this->id = $data['student_id'];
            $this->first_name = $data['first_name'];
            $this->last_name = $data['last_name'];
            $this->email = $data['email'];
            $this->national_student_id = $data['national_student_id'];
            $this->is_responsable = $data['is_responsable'];
            $this->is_publisher = $data['is_publisher'];
            $this->contact_email = $data['contact_email'];
            $this->phone_number = $data['phone_number'];
            $this->number_in_class = $data['numberInClass']; // this name should be changed in the database to match other names form.
        }
        $this->class = $this->get_class_db();
    }


    private function get_class_db(){

        try{
            if($this->id){
                $pre_stmt = "select class.class_id, class.name from student
                join class on student.class = class.class_id
                where student.student_id = ?;";
                $stmt = $this->connect()->prepare($pre_stmt);
                $stmt->execute([$this->id]);
                $result = $stmt->fetchAll();
                if(count($result) === 1) {
                    return $result[0];
                }else {
                    return false;
                }
            }
        }catch(PDOExecption $e){
            die($e);
        }

    }

    function get_emploi(){
        try{
            if($this->id){
                $pre_stmt = "select class.class_id, class.emploi from student
                join class on student.class = class.class_id
                where student.student_id = ?;";
                $stmt = $this->connect()->prepare($pre_stmt);
                $stmt->execute([$this->id]);
                $result = $stmt->fetchAll();
                if(count($result) === 1) {
                    return $result[0];
                }else {
                    return false;
                }
            }
        }catch(PDOExecption $e){
            die($e);
        }
    }

    public function get_all_data(){
        return get_object_vars($this);
    }

    public function get_all_notes(){
        try{
            $pre_stmt = "select subject.subject_name, note.note_value from note join student on student.student_id = note.student_id
            join subject on subject.class_id = student.class where student.student_id = ?;";
            $stmt = $this->connect()->prepare($pre_stmt);
            $stmt->execute([$this->id]);
            $result = $stmt->fetchAll();
            if(count($result)){
                return $result;
            }
        }catch (PDOException $e){
            die($e);
        }
    }

    public function get_property_value($prop_name){
        $arr = get_object_vars($this);
        if($arr[$prop_name]){
            return $arr[$prop_name];
        }else return false;
    }
}