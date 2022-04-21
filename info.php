<?php
session_start();
require "./vendor/db.php";
$mysql_post = mysqli_query($link, "SELECT * FROM `post` WHERE `id` = {$_GET['id']}");
$info_post = mysqli_fetch_assoc($mysql_post);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>BLACKghost</title>
</head>

<body>
  <?php require "block/header.php" ?>
</body>
<div class="card-body">
  <img src="content/<?= $info_post['img']; ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="image">
</div>
</div>
<div class="container mt-5 ">
  <h3> <?= $info_post['name'] ?></h3>
</div>
<div class="container mt-5"> 
  <p><?= $info_post['description'] ?></p>
          <!-- <p>------</p> -->
</div>
<img src="content/<?= $info_post['img2']; ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="image"> 
<!--<?php require "blocks/footer.php" ?> --> 
</body>

</html>