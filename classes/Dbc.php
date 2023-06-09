<?php 

class Dbc {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect() {

        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'ista_website_db';
        $this->charset = 'utf8mb4';
        
        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e){
            echo 'db connection failed: '.$e->getMessage();
            header("location:../err_page.php?err=$e->getMessage()");
            die($e->getMessage());
        }
    }
}