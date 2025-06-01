<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Создание поста</h1>
    <!-- Создание поста -->
    <form action="upload.php" method="post">

        <!-- Заголовок -->
        <input type="text" name="title" placeholder="Заголовок..." required><br>

        <!-- Комментарий -->
        <textarea name="content" placeholder="Ваш комментарий..." required></textarea><br>

        <!-- Отправить -->
        <button type="submit">Загрузить</button>
    </form>

    <h2>Посты</h2>
    <div id="list"></div>

    <script src="list.js"></script>
</body>

</html>