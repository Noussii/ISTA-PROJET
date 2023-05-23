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
}