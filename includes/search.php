<?php

$searchQuery = $_GET['q'];

include_once 'connect.php';

$sql = "SELECT * FROM products WHERE productname LIKE ?";

$statement = $conn->prepare($sql);
$statement->execute(["$searchQuery%"]);

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
?>
    <li><a href="productpage.php?id=<?= $row['productId'] ?>"><?= $row['productname'] ?>
            <img src="img/<?= $row['productimgpath'] ?>" alt="<?= $row['productimgalt'] ?>" style="width: 50px;"></a></li>
<?php
}
