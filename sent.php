<?php

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
    
    $date = date('Y-m-d H:i:s');/////////////////////////////////////////
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $message = $_SESSION['message'];

    $dsn = "mysql:host=$host;dbname=$db";

    function login($dsn,$username,$password, $pdoOptions){
        try {
            $conn = new PDO($dsn, $username, $password, $pdoOptions);
            if($conn){
                echo "connection to db has been made<br>";
                var_dump($_SESSION);

                return $conn;
            } } catch (PDOException $e) {
                echo $e->getMessage();
           }
    
    }

    function addToDatabase($conn,$name,$email,$message){
        // global $conn;
        $sqlQuery = '
                INSERT INTO contact_form
                     (name,email,message,date)
                VALUES
                    (:name,:email,:message,:date)
                ';

        $stmt = $conn->prepare($sqlQuery);
        
        $stmt->bindValue(':name',$name,':email',$email,':message',$message);
        
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':message' => $message
        ]);
        
    }

    
    $conn = login($dsn,$username,$password,$pdoOptions);
    
    addToDatabase($conn,$name,$email,$message);
    // var_dump($conn);

    var_dump($_SESSION);

    ?>