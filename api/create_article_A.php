<?php
require_once '../usefulFunctions.php';

if(check_general_authentication()){
    if(return_user_type() === 'administration'){
        echo 'hello administration';
    }
}