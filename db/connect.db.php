<?php

//


class Database{

    private $dbname = "Portfolio";
    private $host = "localhost";
    private $username = "root";
    private $pasword = "lamar126";

    private function getConnection(){
        try{
            $pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";",$this->username,$this->pasword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function addContact($name,$email,$phone,$comment){
        $f_name = filter_var($name,FILTER_SANITIZE_STRING);
        $f_email = filter_var($email,FILTER_SANITIZE_EMAIL);
        $f_phone = filter_var($phone,FILTER_SANITIZE_STRING);
        $f_comment = filter_var($comment,FILTER_SANITIZE_STRING);

        if(empty($f_name) || empty($f_email) || empty($f_phone) || empty($f_comment)){
            echo "Please fill out information with proper credentials";

        }else{
            try{
                $sql = "INSERT INTO contact (name,email, phone,comment) VALUES('$name','$email','$phone','$comment')";
               $result =  $this->getConnection()->prepare($sql);
              $result->execute();
                echo "database has been updated";
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }
            }
        }
        



   
}

$conn = new Database;

echo $conn->addContact("James","JamesBond@email.com","444-444-4444","here is a comment");