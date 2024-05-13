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
  </div>
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
        Наши отзывы
      </div>
    </div>
    <div id="main">
            <table id="tours">
                <tr>
                    <td>
                    <?php
                       include("dbconnect.php");

                       $result = $mysqli->query("SELECT * FROM remarks");
                       $table = "<table>";
                       $k = 1;

                       while ($myrow = $result->fetch_assoc()) {
                         $table .= "<tr>";
                         $table .= "<td>".$myrow['tema']."</td>";
                         $table .= "<td>".$myrow['text']."</td>";
                         $table .= "</tr>";
                         $k++;
                       }

                       $table .= "</table>";
                       echo $table;
                     ?>
                    </td>
                </tr>
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

