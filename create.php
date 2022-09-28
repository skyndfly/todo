<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить заметку</title>
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
        <form class="create" action="store.php" method="post">
            <label for="">Название:</label>
            <input name="title" type="text">

            <label for="">Описание:</label>
            <textarea name="text" ></textarea>

            <button class="new" name="send" type="submit">Добавить</button>
        </form>
    </div>
</section>
</body>
</html>