<?php
session_start();

$name = "user";
$password = "1234";

if (isset($_POST["submit"]))  {
    $userName = $_POST["username"];
    $pass = $_POST["password"];

    if($userName === $name && $pass === $password) {
        $_SESSION['name'] = $userName;
    }
}
header('Location: index.php');
