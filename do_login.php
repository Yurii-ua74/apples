<?php
//session_start();
//include('index.php');
require_once __DIR__.'/boot.php';
// дані введені користувачем
$email = trim($_POST["authemail"]);
$password = $_POST["authpassword"];   

//echo " ".$email." ".$password."";

// пошук даних за е-мейлом
$stmt = pdo()->prepare("SELECT * FROM `clients` WHERE `email` = :authemail");
$stmt->execute(['authemail' => trim($_POST["authemail"])]);

// перевірка, чи знайдено email
if ($stmt->rowCount() > 0) {
    // отримання даних з запиту
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // занесення даних в змінні
    $client_id = $row['client_id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $password_db = $row['password_hash'];
    $email_db = $row['email'];

    if(($email === $email_db) && (password_verify($password, $password_db)))
    {   
        // Встановлення даних у localStorage
        echo '<script>';
        echo 'localStorage.setItem("client_id", ' . json_encode($client_id) . ');';
        echo 'localStorage.setItem("first_name", ' . json_encode($first_name) . ');';
        echo 'localStorage.setItem("last_name", ' . json_encode($last_name) . ');';
        echo 'localStorage.setItem("email", ' . json_encode($email_db) . ');';
        echo '</script>';
    }
    else{
    
    }
    
    //header('Location: /');
    //exit;
}
else {
    //header('Location: /sales.php');
    //exit;
}