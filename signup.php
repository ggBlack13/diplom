<?php
session_start();
require_once 'db.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if(isset($_POST['submit'])){
    if($password!==$password_confirm){
        $_SESSION["message"] = "пароли не совпадают";
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    }
    else {    
        $addusers = mysqli_query($link, 
        "INSERT INTO `users`(
            `id`, 
            `full_name`, 
            `login`, 
            `email`, 
            `password`,
            `admin`
        )
        VALUES (
            NULL, 
            '$full_name', 
            '$login', 
            '$email', 
            '$password',
            0
        )");
        if($addusers){
            $_SESSION["message"] = "Пользователь успешно зарегистрирован!";
            header("Location: ../index.php");
        }
    }
}
?>
