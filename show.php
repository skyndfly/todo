<?php
require_once "functions.php";
$db = require_once "databases/start.php";
$post = $db->getOneById('tasks', $_GET['id']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Просмотр</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>моиЗАМЕТКИ</h1>
    <a href="/">Главная страница</a>
</header>
<section>
    <div class="section__content">
        <a href="/" class="info"> &#8592; Назад</a>
        <div class="text">
            <h1><?=$post['title'];?></h1>
            <p><?=$post['text'];?></p>
        </div>
    </div>
</section>


</body>
</html>
