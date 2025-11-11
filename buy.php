<?php
session_start();
include 'db.php'; 

$product_id = $_GET['id'] ?? 0;

if($product_id <= 0){
    die("<h3 style='color:red; text-align:center;'>Invalid Product ID!</h3>");
}

$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if(!$product){
    die("<h3 style='color:red; text-align:center;'>Product not found!</h3>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buy Product</title>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Buy Product</h2>

    <form action="process_buy.php?id=<?= $product['id'] ?>" method="POST">
        <!-- Product Info -->
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" value="<?= htmlspecialchars($product['name']) ?>" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Price (tk)</label>
            <input type="number" class="form-control" name="product_price" value="<?= $product['price'] ?>" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" class="form-control" name="product_quantity" value="1" min="1" required>
        </div>

        <!-- Customer Details -->
        <div class="mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" class="form-control" name="customer_name" placeholder="Enter your name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Customer Address</label>
            <textarea class="form-control" name="customer_address" placeholder="Enter your address" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Customer Email</label>
            <input type="email" class="form-control" name="customer_email" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Customer Phone</label>
            <input type="text" class="form-control" name="customer_phone" placeholder="Enter your phone number" required>
        </div>

        <p><strong>Total: ৳ <span id="total"><?= $product['price'] ?></span></strong></p>

        <button type="submit" class="btn btn-primary">Confirm Order</button>
    </form>
</div>

<script>
const quantityInput = document.querySelector('[name="product_quantity"]');
const totalSpan = document.getElementById('total');
const price = <?= $product['price'] ?>;

quantityInput.addEventListener('input', () => {
    const qty = parseInt(quantityInput.value) || 1;
    totalSpan.textContent = (price * qty).toFixed(2);
});
</script>
</body>
</html>
