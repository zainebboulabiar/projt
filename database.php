<?php

$host = 'localhost' ;
$dbname = 'projetweb';
$username = 'root';
$password = '';

try {
     

    $connect = new PDO(
        "mysql:host=$host;
   
        dbname=$dbname",
        $username, 
        $password
    );
    
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}