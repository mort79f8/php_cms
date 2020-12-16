<?php

// connect to the DB
require_once "connect.php";

// select all the data from the table
// $statement = $conn->prepare("SELECT * FROM products WHERE productId=" . $id);
$statement = $conn->prepare("SELECT `products`.*, `users`.* FROM `products` JOIN `users` ON `products`.`productaddedby` = `users`.`userid` WHERE productId=" . $id);
// execute the actions
$statement->execute();

while ($row = $statement->fetch()) {

    $name = $row['productname'];
    $imagepath = $row['productimgpath'];
    $imagealt = $row['productimgalt'];
    $desc = $row['productdesc'];
    $price = $row['productprice'];
    $date = $row['productaddeddate'];
    $id = $row['productId'];
    $pusername = $row['username'];
    $puserlevel = $row['userlevel'];
    $puserfirstname = $row['userfirstname'];
?>
    <article class="productpage">
        <h1><?php echo $name ?></h2>
            <div class="productinfo">
                <img src="./img/<?php echo $imagepath ?>" alt="<?php echo $imagealt ?>">
                <div>

                    <p><?php echo $desc ?></p>
                    <p><span>Price:</span> <?php echo $price ?>$</p>
                    <p class="tags">Tags: Sport</p>

                </div>
            </div>
        <?php } ?>