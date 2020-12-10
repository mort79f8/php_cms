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


    <?php include_once './footer.php' ?>
</body>

</html>