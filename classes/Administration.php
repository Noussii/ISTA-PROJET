<?php 
require_once '../classes/Administration.php';
require_once '../classes/Dbc.php';


class Administration extends Dbc{

    private int $id;

    public function __construct($id){
        $this->id = $id;
    }
    public function return_all_data(){
        $success = false;
        try{
            $sql = "select first_name, last_name, email from administration where administration_id = ?;";
            $stmt = $this->connect()->prepare($sql);
            $success = $stmt->execute([$this->id]);
            $result = $stmt->fetch();
            return $result;
            
        }catch(PDOException $e){
            $success = false;
            return $success;
        }
    }
}