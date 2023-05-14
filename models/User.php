<?php
include_once './dbc.php';
include_once '../controllers/login.contr.php';

class User extends dbc {
    protected $user_id;
    protected $user_type;

    function __construct($user_id, $user_type){
        $this->user_id = $user_id;
        $this->user_type = $user_type;

    }
    function check_user(){
        
    }
}