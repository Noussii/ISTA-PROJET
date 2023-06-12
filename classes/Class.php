<?php
require_once 'Dbc.php';
require_once 'Notification.php';

class Class_cls {

    public static function add_emploi($class_id, $emploi_pdf){

        try {
            $dbc = new Dbc();
            $sql = "select emploi_pdf_path from class where class_id = ?;";
            $stmt = $dbc->connect()->prepare($sql);
            $stmt->execute([$class_id]);
            $result = $stmt->fetch();
            $default_pdf_path = '/resources/pdf/emploi_du_temps/emploi_placeholder.pdf';
            if($result){
                if($result['emploi_pdf_path'] === $default_pdf_path){
                    try {

                        $pdf = file_get_contents($emploi_pdf['tmp_name']);
                        $in_server_pdf_name = time().'.pdf';
                        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/resources/pdf/emploi_du_temps/'.$in_server_pdf_name, $pdf);
                        $saving_pdf_success = true;
                        $pdf_name = '/resources/pdf/emploi_du_temps/'.$in_server_pdf_name;
                        
                        $dbc = new Dbc();
                        $sql = "update class set emploi_pdf_path = ? where class_id = ?;";
                        $stmt = $dbc->connect()->prepare($sql);
                        $success = $stmt->execute([$pdf_name, $class_id]);

                        Notification::class_notification_class_id($class_id, "Avis de changement d'emploi du temps", $context = 'administration', $user_type = 'student', $link = 'class.php');
                        // Notification::class_notification_class_id($class_id, "Avis de changement d'emploi du temps");
                        return true;
                        exit();
                    }catch (PDOException $e){
                        echo $e;
                        return false;
                    }
                }else{

                    $pdf = file_get_contents($emploi_pdf['tmp_name']);
                    file_put_contents($_SERVER['DOCUMENT_ROOT'].$result['emploi_pdf_path'], $pdf);
                    Notification::class_notification_class_id($class_id, "Avis de changement d'emploi du temps", $context = 'administration', $user_type = 'student', $link = 'class.php');
                    // Notification::class_notification_class_id($class_id, "Avis de changement d'emploi du temps");
                    return true;
                }
            }
        }catch (PDOException $e){
            // echo $e;
            return false;
        }
    }
    




    public static function get_all_classes_data(){
        try {
            $dbc = new Dbc();
            $sql = "select * from class where class_id > 0;";
            $stmt = $dbc->connect()->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();
            if(count($results) > 0){
                return $results;
            }

        }catch (PDOException $e){
            return $e;
        }
    }

    public static function get_emploi_url($student_id){
        $serverConfig_json = file_get_contents('../config.json');
        $serverConfig_data = json_decode($serverConfig_json, true);
        try {
            $dbc = new Dbc();
            $sql = "select class.emploi_pdf_path from class join student on student.class = class.class_id where student.student_id = ?;";
            $stmt = $dbc->connect()->prepare($sql);
            $stmt->execute([$student_id]);
            $result = $stmt->fetch();
            if($result){
                return $serverConfig_data['domain'].$result['emploi_pdf_path'];
            }

        }catch (PDOException $e){
            return $e;
        }
    }

}