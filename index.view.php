<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>моиЗАМЕТКИ</h1>
    <a href="/">Главная страница</a>
</header>

<section>
    <div class="section__content">
        <form action="index.php" class="index__form" method="post">
            <input type="text" name="search">
            <button name="send" type="submit">Поиск</button>
        </form>
        <a href="create.php" class="new">Добавить</a>
        <table>
            <tr class="table__head">
                <td>#</td>
                <td>Название</td>
                <td>Опции</td>
            </tr>
            <?php foreach ($posts as $post):?>
                <tr>
                    <td><?=$post['id'];?></td>
                    <td><?=$post['title'];?></td>
                    <td>
                        <a href="show.php?id=<?=$post['id'];?>" class="info">Открыть</a>
                        <a href="edit.php?id=<?=$post['id'];?>" class="edit">Изменить</a>
                        <a href="delete.php?id=<?=$post['id'];?>" class="delete">Удалить</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</section>
</body>
</html>