<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/style.css">
<?php
include_once "header.php";
?>


<?php
$id = $_GET['id'];
include "includes/getArticleById.php";
?>
<a href="includes/remove.php/?id=<?= $id ?>" class="delete-button">DELETE</a>
</article>
<?php
include_once "footer.php"
?>