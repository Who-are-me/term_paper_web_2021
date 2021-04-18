<!DOCTYPE html>

<?php
session_start();

if(empty($_SERVER['HTTP_REFERER']) || ($_SESSION["verification"] != true)) {
  header('Location: /coursework.loc/404.html');
  exit;
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Admin panel</title>
    <link rel="stylesheet" type="text/css" href="../style/main.css">
  </head>

  <body class="container">
    <div class="menu">
        <div class="menuItem" style="text-align: center;">Меню</div>
        <div class="menuItem"><a href="#">На початок</a></div>
        <div class="menuItem"><a href="index.html">Вихід</a></div>
        <div class="menuItem"><a href="../">Вийти на головну</a></div>
    </div>

    <header class="header">
        <h1><div>Ласкаво просимо до панелі адміністратора</div></h1>
    </header>

    <section class="content">

    </section>

    <section class="moreContent">
        <div></div>
    </section>

    <footer class="footer">
        <div>Ternopil 2020-2021</div>
    </footer>
  </body>
</html>