<?php

require_once "connect.php";

$username = $_POST["username"];
$userpass = $_POST["userpass"];
$sql = "SELECT * FROM users WHERE username=? AND userpass=?";
$statement = $conn->prepare($sql);
$statement->execute([$username, $userpass]);

$row = $statement->fetch();
if ($row) {
    session_start();
    $_SESSION['userfirstname'] = $row['userfirstname'];
    $_SESSION['userlevel'] = $row['userlevel'];
    header("location: ../index.php");
} else {
    header("location: ../index.php");
}
