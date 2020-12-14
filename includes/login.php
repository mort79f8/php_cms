<?php

require_once "connect.php";

$username = $_POST["username"];
$userpass = $_POST["userpass"];
$sql = "SELECT * FROM users WHERE username=? AND userpass=?";
$statement = $conn->prepare($sql);
$statement->execute([$username, $userpass]);


if ($row = $statement->fetch()) {
    session_start();
    $_SESSION['userfirstname'] = $row['userfirstname'];
    $_SESSION['userlevel'] = $row['userlevel'];
    header("location: ../index.php");
} else {
    $sql = "SELECT * FROM users WHERE username=?";
    $statement = $conn->prepare($sql);
    $statement->execute([$username]);
    if ($row = $statement->fetch()) {
        session_start();
        $_SESSION['pass_error'] = "1";
        header("location: ../index.php");
    } else {
        header("location: ../index.php");
    }
}
