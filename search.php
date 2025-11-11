<?php

session_start();
include 'db.php'; 

if(isset($_GET['query'])){
    $query = $_GET['query'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ?");
    $searchTerm = "%".$query."%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search Results</title>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Search Results for "<?= htmlspecialchars($query) ?>"</h2>

    <div class="row mt-4">
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/images/<?= $row['image'] ?>" class="card-img-top" alt="<?= $row['name'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['name'] ?></h5>
                            <p class="card-text">Price: <?= $row['price'] ?> tk</p>
                            <a href="card.php?add=<?= $row['id'] ?>" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
