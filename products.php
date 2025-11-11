<?php
include 'db.php'; // Database connection

$result = $conn->query("SELECT * FROM products");
?>

<h2>Products</h2>
<img src="laptop9 (1).jpg" alt="pic" style="width: 300px;">
<?php while($row = $result->fetch_assoc()): ?>
    <div>
        <h4><?= $row['name'] ?></h4>
        <p>Price: tk <?= $row['price'] ?></p>
        <!-- Add to Cart button -->
       <a href="buy.php?id=<?= $row['id'] ?>" class="btn btn-success">Buy Now</a>

    </div>
<?php endwhile; ?>
