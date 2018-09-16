<?php
//


class Database{

    private $dbname = "larticles";
    private $host = "localhost";
    private $username = "root";
    private $pasword = "lamar126";

    public function getConnection(){
        try{
            $pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";",$this->username,$this->pasword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

   
}

$conn = new Database;
$conn->getConnection();
