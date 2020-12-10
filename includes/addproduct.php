<?php

$productname = $_GET['productname'];
$productdesc = $_GET['productdesc'];
$productprice = $_GET['productprice'];
$productonsale = $_GET['productonsale'];
$productaddedby = $_GET['productaddedby'];
$productimgpath = $_GET['productimgpath'];
$productimgalt = $_GET['productimgalt'];

require_once 'connect.php';

$statement = $conn->prepare("INSERT INTO `products`( `productname`, `productdesc`, `productprice`, `productonsale`, `productaddedby`, `productimgpath`, `productimgalt`) VALUES (?,?,?,?,?,?,?)");
$statement->bindParam(1, $productname);
$statement->bindParam(2, $productdesc);
$statement->bindParam(3, $productprice);
$statement->bindParam(4, $productonsale);
$statement->bindParam(5, $productaddedby);
$statement->bindParam(6, $productimgpath);
$statement->bindParam(7, $productimgalt);
$statement->execute();

header("location: ../index.php");
