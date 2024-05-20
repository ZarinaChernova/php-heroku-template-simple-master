<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>

<body>
    <h2>Информация об авторе:</h2>
    <p>Здесь может быть информация о вас как об авторе.</p>

    <!--  <h2>Введите ваше имя:</h2>
 <form action="post.php" method="post">
        <input type="text" name="username" required>
        <input type="submit" value="Отправить">
    </form>-->

    <form action="post.php" method="post">
        <label for="username">Введите ваше имя:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <input type="submit" value="Отправить">
    </form>

</body>

</html>