<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the Otaku Shop the one stop shop for anime series and movies.">
    <title>Otaku Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php
    include_once './header.php';
    ?>

    <section>
        <?php
        include_once './includes/getArticles.php';
        ?>
    </section>

    <?php
    if (isset($_SESSION['userlevel']) and $_SESSION['userlevel'] == 1) {
        include_once 'productform.php';
    }
    ?>

    <?php
    include_once './footer.php';
    ?>
    <script src="./js/script.js"></script>
</body>

</html>