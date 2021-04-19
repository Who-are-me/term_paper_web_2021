<!DOCTYPE html>
<?php
session_start();

if(empty($_SERVER['HTTP_REFERER']) || ($_SESSION["verification"] != true)) {
  header('Location: ../404.html');
  exit;
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/adminpanel.css">
  </head>

  <body class="main">

    <div class="main_menu">
      <div class="menuItem">Меню</div>
      <div class="menuItem"><a href="#">На початок</a></div>
      <div class="menuItem"><a href="index.html">Вихід</a></div>
      <div class="menuItem"><a href="../">Вийти на головну</a></div>
    </div> 


    <div class="container"> 
      <header class="header">
        <h1><div>Ласкаво просимо до панелі адміністратора</div></h1>
      </header>
    </div>


    <div class="menu">
      <div class="menuItem" style="text-align: center;">Меню</div>
      <div class="menuItem"><a href="#">На початок</a></div>
      <div class="menuItem"><a href="index.html">Вихід</a></div>
      <div class="menuItem"><a href="../">Вийти на головну</a></div>
    </div>

    <footer class="footer">
      <div>Ternopil 2020-2021</div>
    </footer>
  </body>
</html>