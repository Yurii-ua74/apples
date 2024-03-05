<?php
 
include('private.php');   
require_once __DIR__.'/boot.php';

// Проверим, не занято ли имя пользователя
$stmt = pdo()->prepare("SELECT * FROM `clients` WHERE `email` = :usemail");
$stmt->execute(['usemail' => $_POST['usemail']]);
if ($stmt->rowCount() > 0) {
    $message = "Такі дані вже є в базі даних, увійдіть використовуючи їх";//flash('користувач з таким e-mail вже зареєстрований.');
    header('Location: private'); 
    //die; 
}
else {
// Добавим пользователя в базу
$stmt = pdo()->prepare("INSERT INTO `clients` (`first_name`, `last_name`, `phone_number`, `email`, `password_hash`) 
                        VALUES (:usname, :ussurname, :usphone, :usemail, :password)");
$stmt->execute([
    'usname' => $_POST['usname'],
    'ussurname' => $_POST['ussurname'],
    'usphone' => $_POST['usphone'],
    'usemail' => $_POST['usemail'],  
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
]);
if ($stmt->rowCount() > 0) {
    $message = "Реєстрація успішна! Можете увійти";
} else {
    $message = "Помилка при реєстрації: " . implode(', ', $stmt->errorInfo());
}


}
echo '<script type="text/javascript">
            alert("' . $message . '");
            window.location = "private";
          </script>';
    exit();
