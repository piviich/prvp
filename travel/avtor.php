<html>
    <head>
        <title>Авторизация</title>
    </head>
    <body>
        <h2>Авторизация</h2>
        <form action="test_user.php" method="post">
            <p>
                <label>Ваш логин:</label>
                <input type="text" name="login" size="15" maxlength="15">
            </p>
            <p>
                <label>Ваш пароль:</label>
                <input type="password" name="pass" size="15" maxlength="15">
            </p>
            <p class="submit-btn">
                <input class="btn" type="submit" name="submit" value="Войти">
            </p>
        </form>
    </body>
</html>
