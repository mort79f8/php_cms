<?php

// connect to the DB
require_once "connect.php";

// select all the data from the table
$statement = $conn->prepare("SELECT `products`.*, `users`.* FROM `products` JOIN `users` ON `products`.`productaddedby` = `users`.`userid` ORDER BY productId DESC");
// execute the actions
$statement->execute();

while ($row = $statement->fetch()) { ?>

    <article>
        <h2><?php echo $row['productname'] ?></h2>
        <a href="productpage.php?id=<?php echo $row['productId'] ?>">
            <img src="./img/<?php echo $row['productimgpath'] ?>" alt="<?php echo $row['productimgalt'] ?>">
        </a>
        <p><?php echo $row['productdesc'] ?></p>
        <p><span>Price:</span> <?php echo $row['productprice'] ?>$</p>
        <p class="tags">Tags: Sport</p>
        <div class="article-footer">
            <?php if (isset($_SESSION['userlevel']) and $_SESSION['userlevel'] == 1) { ?>
                <div>
                    <p>Added by: <?php echo $row['userfirstname'] ?></p>
                    <p>Date: <?php echo $row['productaddeddate'] ?></p>
                </div>
                <div>
                    <a href="removeproduct.php?id=<?php echo $row['productId'] ?>" class="delete-product-link">delete product</a>
                </div>
            <?php } elseif (isset($_SESSION['userlevel']) and $_SESSION['userlevel'] == 2 and $row['username'] == $_SESSION['username']) { ?>
                <div>
                    <p>Added by: <?php echo $row['userfirstname'] ?></p>
                    <p>Date: <?php echo $row['productaddeddate'] ?></p>
                </div>
                <div>
                    <a href="removeproduct.php?id=<?php echo $row['productId'] ?>" class="delete-product-link">delete product</a>
                </div>
            <?php } ?>
            <button>Buy</button>
        </div>
    </article>
<?php } ?>