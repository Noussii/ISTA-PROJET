<?php session_start() ?>
<?php
// Read the contents of the JSON file
$json_data = file_get_contents('../config.json');
// Decode the JSON data into a PHP object
$data = json_decode($json_data);

$truth = 'nothing';
// Open a connection to the MySQL server using mysqli class
$conn = new mysqli($data->servername, $data->username, $data->password, $data->dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    if (isset($_COOKIE['SIDSPARTA'])){
        $res = $conn->query("SELECT * FROM session WHERE session_id = '{$_COOKIE['SIDSPARTA']}';");
        $res = $res->fetch_all(MYSQLI_ASSOC);
        if(count($res) > 0){
            $_SESSION['user_id'] = $res[0]['user_id'];
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_type'] = $res[0]['user_type'];
        }else {
            header('location:./login.php');
            $truth = 'inner';
        }
    }else{
        $truth = 'outer';
        header('location:./login.php');
    }
?>