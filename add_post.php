<?php 
session_start();
require "db.php";
// $iduser = $_SESSION['user']['id'];
$description = $_POST['description'];
$name1 = $_POST['name'];
$date = date("Y-m-d");
function upload($file){
    $edx = pathinfo($file['name'],PATHINFO_EXTENSION);
    $name = uniqid().'.'.$edx;
    move_uploaded_file($file['tmp_name'],'../content/'.$name);
    return $name;
};
function upload1($file1){
    $edx1 = pathinfo($file1['name'],PATHINFO_EXTENSION);
    $name = uniqid().'.'.$edx1;
    move_uploaded_file($file1['tmp_name'],'../content/'.$name);
    return $name;
};
if(isset($_POST['submit'])){
$url = upload($_FILES['file']);
$url2 = upload1($_FILES['file1']);
if(mysqli_query($link,"INSERT INTO `post` (`name`, `img`, `img2`, `description`) VALUES ('$name1', '$url', '$url2', '$description')"));
    header('Location: ../iindex.php');
}