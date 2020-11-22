<?php

    $host='localhost';
    $db = 'katzir_studio_contact';
    $username = 'katzir_daynaj';
    $password = 'Flapjack12!@';
    $pdoOptions = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    );

    $dsn = "mysql:host=$host;dbname=$db";

    function login($dsn,$username,$password, $pdoOptions){
        session_start();
        try {
            $conn = new PDO($dsn, $username, $password, $pdoOptions);
            if($conn){
                echo "connection to db has been made<br>";
                return $conn;
            } } catch (PDOException $e) {
                echo $e->getMessage();
           }
    
    }
    
    $conn = login($dsn,$username,$password,$pdoOptions);
    var_dump($conn);

    ?>