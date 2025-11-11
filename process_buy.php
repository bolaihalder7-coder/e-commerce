<?php
session_start();
include 'db.php';

$product_id = $_GET['id'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $quantity = $_POST['product_quantity'];

    $customer_name = $_POST['customer_name'];
    $customer_address = $_POST['customer_address'];
    $customer_email = $_POST['customer_email'];
    $customer_phone = $_POST['customer_phone'];

    // session cart
    $_SESSION['cart'][] = [
        'id' => $product_id,
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity,
        'customer_name' => $customer_name,
        'customer_address' => $customer_address,
        'customer_email' => $customer_email,
        'customer_phone' => $customer_phone
    ];

    // database orders table-insert 
    $stmt = $conn->prepare("INSERT INTO orders (product_name, price, quantity, customer_name, customer_address, customer_email, customer_phone) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sdissss", $name, $price, $quantity, $customer_name, $customer_address, $customer_email, $customer_phone);
    $stmt->execute();

    header("Location: card.php");
    exit;
}
?>
