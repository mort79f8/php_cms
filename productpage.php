<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    include_once './header.php';
    ?>

    <?php
    $id = $_GET['id'];
    include "includes/getArticleById.php";
    ?>
    <div class="article-footer">
        <?php if (isset($_SESSION['userlevel']) and $_SESSION['userlevel'] == 1) { ?>
            <div>
                <p>Added by: <?php echo $puserfirstname ?></p>
                <p>Date: <?php echo $date ?></p>
            </div>
            <div>
                <a href="removeproduct.php?id=<?php echo $id ?>" class="delete-product-link">delete product</a>
            </div>
        <?php } elseif (isset($_SESSION['userlevel']) and $_SESSION['userlevel'] == 2 and $pusername == $_SESSION['username']) { ?>
            <div>
                <p>Added by: <?php echo $pusername ?></p>
                <p>Date: <?php echo $date ?></p>
            </div>
            <div>
                <a href="removeproduct.php?id=<?php echo $id ?>" class="delete-product-link">delete product</a>
            </div>
        <?php } ?>
        <button>Buy</button>
    </div>
    </article>

    <?php include_once './footer.php' ?>
</body>

</html>