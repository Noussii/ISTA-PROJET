<?php

$client_username = $_POST['email'];
$client_password = $_POST['password'];

// Read the contents of the JSON file
$json_data = file_get_contents('../config.json');
// Decode the JSON data into a PHP object
$data = json_decode($json_data);


// Open a connection to the MySQL server using mysqli class
$conn = new mysqli($data->servername, $data->username, $data->password, $data->dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql = "SELECT * FROM student WHERE email = '$client_username' AND student.password = '$client_password';";

// Execute the query
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    die("Query failed: " . $conn->error);
}
// Fetch the results into an associative array
$data = $result->fetch_all(MYSQLI_ASSOC);
if(count($data) == 0){
    header('location:../page/login.php');
}else if (count($data) == 1){
    
        session_set_cookie_params(time()+3600, '/', 'localhost', true, true);
        session_start(); 
        $conn->query("INSERT INTO `ista_website_db`.`session` (`session_id`, `user_id`, `user_type`, `created_at`, `data`) VALUES ('".session_id()."', {$data[0]['student_id']}, 'student', '".date('Y-m-d H:i:s', time()+ 3600)."', '{\"name\": \"".$data[0]['firstname']."\", \"age\": 20}');");
        $_SESSION['is_authenticated'] = true;
        $_SESSION['username'] = $data[0]['firstname'];
        header('location:../page/feed.php');

}

// Close the connection
$conn->close();

// header('location:../page/feed.php');