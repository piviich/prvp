<html>
    <head>
        <title>Отзывы</title>
    </head>
    <body>
    <h2>Оставьте свой отзыв</h2>
        <form action="save_remarks.php" method="post">
            <p>
                <label>Тема сообщения:<br></label>
                <textarea name="tema" cols="35" rows="3"></textarea>
            </p>
            <p>
                <label>Введите текст сообщения:<br></label>
                <textarea name="text" cols="35" rows="6"></textarea>
            </p>
            <p>
                <input class="submit" type="submit" name="submit" value="Сохранить">
            </p>
        </form>
    </body>
</html>