<?php
session_start();
include_once "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM `products` WHERE `productId` = ?";
$statement = $conn->prepare($sql);
if (isset($_SESSION["userlevel"]) and $_SESSION['userlevel'] <= 2) {
    $statement->execute([$id]);
}
echo "Product removed";
header("Refresh:2; url=../../index.php", true, 303);
