<?php
require_once __DIR__.'/boot.php';
// Отримання даних з POST-запиту
if(isset($_POST['shopData'])) {
    // Отримання рядка JSON з POST-запиту
    $dataFromJS = $_POST['shopData'];
    // echo "Data received by PHP: " . $dataFromJS;

    // Розпакування рядка JSON у асоціативний масив PHP
    $shopDataArray = json_decode($dataFromJS, true);

    // Присвоєння значень відповідним змінним
    $client_id = $shopDataArray['client_id'];
    $first_name = $shopDataArray['first_name'];
    $last_name = $shopDataArray['last_name'];
    $email = $shopDataArray['email'];
    $cartProduct = $shopDataArray['cartProduct'];
    $cartPrice = $shopDataArray['cartPrice'];
    // Отримання поточної дати та часу
    $currentDateTime = date('Y-m-d H:i:s');

    // Додавання даних в базу
    $stmt = pdo()->prepare("INSERT INTO `purchases` (`client_id`, `product_name`, `price`, `purchase_date`) 
    VALUES (:clt_id, :prodname, :prodprice, :prodparch_date)");
    if($stmt->execute([
    'clt_id' => $client_id,
    'prodname' => $cartProduct,
    'prodprice' => $cartPrice,
    'prodparch_date' => $currentDateTime,
    ])) {
        echo "Ваше замовлення передано на виконання.";
    } else {
        echo "сталася помилка: ";
    }

}
