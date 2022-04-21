<?php
session_start();
require "db.php";

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];




if (isset($_POST['submit'])) {
    $loginusers = mysqli_query($link, "SELECT * FROM `users` 
    WHERE (`login` = '$login' OR `email` = '$email') AND `password` = '$password'");

    if (mysqli_num_rows($loginusers) > 0) {
        $user = mysqli_fetch_assoc($loginusers);

        $_SESSION['users'] = [
            'id' => $user['id'],
            'login' => $user['login'],
            'password' => $user['password'],
            'admin' => $user['admin']
        ];
        header("location: ../iindex.php");
    } 
    
    else {
        $_SESSION["message"] = "Неверный логин или пароль";
        header("location: ../index.php");
    }
}