<?php

$hostname = "127.0.0.1";
$username = "root";
$userpassword = "root";
$database ="diplom";

$link = mysqli_connect($hostname,$username,$userpassword,$database);

if(!$link){

    echo "подключение отсутствует!";
}	