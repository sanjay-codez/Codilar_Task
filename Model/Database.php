<?php 
namespace Model;

// Connection Class Making Connection 
class Database{

    public function getConnection(){
        $host = '127.0.0.1';
        $user = 'root';
        $pass='12345678';
        $dbname='blog';
       
        $dsn = "mysql:host=$host;dbname=$dbname";
      
        $conn= new  \PDO($dsn, $user, $pass);
        // return $conn;


        if($conn){
               echo "connected";
        }
        else{
              echo "Not Connected";
        }
    }   
}




?>