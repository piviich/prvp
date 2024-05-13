<?php
    session_start();

    if (isset($_POST['tema'])) {
        $tema = $_POST['tema'];
        if ($tema == '') {
            unset($tema);
        }
    }

    if (isset($_POST['text'])) {
        $text = $_POST['text'];
        if ($text == '') {
            unset($text);
        }
    }

    if (empty($tema) or empty($text)) {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    } else {
        include("dbconnect.php");

        if (!empty($_SESSION['id'])) {
            $code = $_SESSION['id'];
            $result = $mysqli->query("INSERT INTO remarks (ID_user, tema, text) VALUES('$code', '$tema', '$text')");

            if ($result == 'TRUE') {
                echo "Ваше сообщение сохранено! Перейти к просмотру сообщений. <a href = 'contacts.php'>О нас</a>";
            } else {
                echo "Ошибка! Сообщение не сохранено";
            }
        }
    }
?>