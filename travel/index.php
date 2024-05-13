<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit = no">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Hello World!</title>
</head>

<body class="body-top">
  <header class="container">
    <div class="row">
      <div class="col-3">
        <img id="logo" src="img/logo.jpg">
      </div>
      <div class="col-9">
        <h1> Путешествуйте с нами!</h1>
      </div>
    </div>
    <?php
  if (empty ($_SESSION['login']) or empty($_SESSION['id']))
  {
  ?>
  <div id = "auth_block">
    <div id="link_register"> 
      <a href="registr.php">Регистрация</a>
    </div>
    <div id="link_auth">
      <a href="avtor.php">Авторизация</a>
    </div>
  </div>
  <?php
  }
  else
  {
  ?>
  <div id = "exit_block">
    <div id="link_remark">
      <a href="remarks.php">Вы можете оставить отзыв</a>
    </div>
    <div id="link_exit">
    <a href="exit.php">Выход</a>
    </div>
  </div>
  <?php
      }
  ?>

  </header>
  <div class="container">
  <div id="menu">
    <nav class="nav nav-pills flex-column flex-sm-row">
      <a class="flex-sm-fill text-sm-center nav-link " href="index.php">Главная</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="tours.php">Туры</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="contacts.php">О нас</a>
    </nav>
  </div>
  
  <main class="flex">
    <div class="row">
      <div class="col">
        Наши акции
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="tour">
          <img src="img/crimea.jpg">
          <p>
            <a href="#" class="actia"> Подробнее об акции</a>
          </p>
        </div>
      </div>

      <div class="col">
        <div class="tour">
          <img src="img/kavkaz.jpg">
          <p>
            <a href="#" class="actia"> Подробнее об акции</a>
          </p>
        </div>
      </div>

      <div class="col">
        <div class="tour">
          <img src="img/altay.jpg">
          <p>
            <a href="#" class="actia"> Подробнее об акции</a>
          </p>
        </div>
      </div>

      <footer class="footer">
        <div class="row">
          <div class="col">
            Это сайт, предназначен для обучения
          </div>
        </div>
      </footer>
      <script src="js/bootstrap.min.js"></script>
</body>

</html>



