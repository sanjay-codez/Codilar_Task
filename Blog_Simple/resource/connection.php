

<!-- Database Connection Using PDO Class    -->


<?php 

$host         = '127.0.0.1:3308';
$username     = 'root';
$password     = '';
$dbname       = 'practice  ';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


?>