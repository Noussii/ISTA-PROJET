<?php 

class Dbc {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect() {

        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = 'wtf123';
        $this->dbname = 'ista_website_db';
        $this->charset = 'utf8mb4';
        
        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e){
            echo 'db connection failed: '.$e->getMessage();
            die('db connection failed');
        }
    }
}