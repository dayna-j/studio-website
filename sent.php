<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 

    session_start();
    $host='localhost';
    $db = 'katzir_studio_contact';
    $username = 'katzir_daynaj';
    $password = 'Flapjack12!@';
    $pdoOptions = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    );
    
    $time = date('Y-m-d H:i:s');/////////////////////////////////////////
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $message = $_SESSION['message'];
    $dsn = "mysql:host=$host;dbname=$db";

    function login($dsn,$username,$password, $pdoOptions){
        try {
            $conn = new PDO($dsn, $username, $password, $pdoOptions);
            if($conn){
                // echo "connection to db has been made<br>";
                // var_dump($_SESSION);
                return $conn;
            } } catch (PDOException $e) {
                echo $e->getMessage();
           }
    }

    function addToDatabase($conn,$name,$email,$message){
        // global $conn;
        $sqlQuery = '
                INSERT INTO contact_form
                     (name,email,message)
                VALUES
                    (:name,:email,:message)
                ';

        $stmt = $conn->prepare($sqlQuery);

        // var_dump($_SESSION);
        
        // $stmt->bindValue(':name',$name,':email',$email,':message',$message,':date',$date);
        
        // var_dump($_SESSION);

        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':message' => $message,
        ]);

        // var_dump($_SESSION);
        // echo 'never prints';

    }
    // var_dump($_SESSION);

    $conn = login($dsn,$username,$password,$pdoOptions);
    // echo 'after login funct';
    addToDatabase($conn,$name,$email,$message);
    // echo 'after db funct';
    // var_dump($_SESSION);

    ?>