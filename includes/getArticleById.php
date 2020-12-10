<?php

// connect to the DB
require_once "connect.php";

// select all the data from the table
$statement = $conn->prepare("SELECT * FROM products WHERE productId=" . $id);
// execute the actions
$statement->execute();

while ($row = $statement->fetch()) { ?>

    <article class="productpage">
        <h1><?php echo $row['productname'] ?></h2>
            <div class="productinfo">
                <img src="./img/<?php echo $row['productimgpath'] ?>" alt="<?php echo $row['productimgalt'] ?>">
                <div>

                    <p><?php echo $row['productdesc'] ?></p>
                    <p><span>Price:</span> <?php echo $row['productprice'] ?>$</p>
                    <p class="tags">Tags: Sport</p>
                    <div class="article-footer">
                        <button>Buy</button>
                    </div>
                </div>
            </div>
    </article>
<?php } ?>