<?php
require_once 'Dbc.php';

class User extends Dbc {

    // check_user() method check if the current user constucted with this class exists. it returns eather true or false;
    function check_user($user_id, $user_type){
        return User::check_user_if_exists($user_id, $user_type);
    }
    // retreive_user_all_data() do what its name suggest;
    function retreive_user_all_data($user_id, $user_type){
        $user_id_name = $user_type.'_id';
        $pre_stmt = "select * from $user_type where $user_id_name = ?;";
        $stmt = $this->connect()->prepare($pre_stmt);
        $stmt->execute([$user_id]);
        $result = $stmt->fetchAll();
        if(count($result) === 1){
            return $result[0];
        }else return false;
    }
    // check_user_if_exists(param1, param2) its a public static method check if user exists without the need to instanciate one.
    public static function check_user_if_exists($user_id, $user_type){
        $user_id_name = $user_type.'_id';
        $pre_stmt = "select * from $user_type where $user_id_name = ?;";
        $stmt = new Dbc();
        $stmt = $stmt->connect()->prepare($pre_stmt);
        $stmt->execute([$user_id]);
        $result = $stmt->fetchAll();
        if(count($result) === 1){
            return true;
        }else return false;
    }
}