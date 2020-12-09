<?php

$servername = "localhost";
$dbname = "cmsphp";
$username = "root";
$password = "";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Succes connected to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
