<?php
require_once '../models/dbc.php';

class Login extends Dbc {

    private $email;
    private $password;

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;

    }

    public function authenticate($email, $password){

        if(Login::validateEmail($email) && strlen($password) >= 4){
            $user_type = Login::validateEmail($email);
            $sql = "select * from $user_type where email = ? and password = ?;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email, $password]);

            $result = $stmt->fetchAll();
            if(count($result) == 1){

                if($user_type === 'super_user'){
                    return ['session_id' => session_id(), 'user_type' => 'super_user', 'super_user_privilage' => $result[0]['super_user_privilage'], 'super_user_legacy' => $result[0]['super_user_legacy']];

                } else {
                    return ['session_id' => session_id(), 'user_type' => $user_type, 'user_id' => $result[0][$user_type.'_id'], 'first_name' => $result[0]['first_name']];
                }

            }else {
                return false;
            }

        }
    }

    private static function createSession($user_type, $user_id, $session_id){
        

    }

    private static function validateEmail($email){

        $user_type = false;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if(substr($email, -10) === '@ofppt.com'){
                
                switch (substr($email, 0, 3)) {
                    case 'st-':
                        $user_type = 'student';
                        break;
                    case 'te-':
                        $user_type = 'teacher';
                        break;
                    case 'ad-':
                        $user_type = 'administration';
                        break; 
                    case 'sp-':
                        $user_type = 'super_user';
                        break;
                }
            }
        }       
        return $user_type;
    }
}