<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Cart</title>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Your Cart</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price (৳)</th>
                <th>Quantity</th>
                <th>Total (৳)</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $grand_total = 0;
            if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $item){
                    $total = $item['price'] * $item['quantity'];
                    $grand_total += $total;

                    echo "<tr>
                        <td>{$item['name']}</td>
                        <td>{$item['price']}</td>
                        <td>{$item['quantity']}</td>
                        <td>{$total}</td>
                        <td>".($item['customer_name'] ?? '')."</td>
                        <td>".($item['customer_address'] ?? '')."</td>
                        <td>".($item['customer_email'] ?? '')."</td>
                        <td>".($item['customer_phone'] ?? '')."</td>
                    </tr>";
                }

                echo "<tr>
                        <td colspan='3'><strong>Grand Total</strong></td>
                        <td><strong>{$grand_total}</strong></td>
                        <td colspan='4'></td>
                      </tr>";
            } else {
                echo "<tr><td colspan='8'>Cart is empty</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
