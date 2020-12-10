<?php

// connect to the DB
require_once "connect.php";

// select all the data from the table
$statement = $conn->prepare("SELECT * FROM `products` ORDER BY productId DESC LIMIT 3");
// execute the actions
$statement->execute();

while ($row = $statement->fetch()) { ?>
    <a href="productpage.php?id=<?php echo $row['productId'] ?>">
        <img src="./img/<?php echo $row['productimgpath'] ?>" alt="<?php echo $row['productimgalt'] ?>">
    </a>

<?php } ?>