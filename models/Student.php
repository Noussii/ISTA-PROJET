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

    function __construct($student_id){
        $data = $this->retreive_user_all_data($student_id, 'student');
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
            $this->numberInClass = $data['numberInClass']; // this name should be changed in the database to match other names form.
        }
    }

    public function get_all_data(){
        return get_object_vars($this);
    }
}