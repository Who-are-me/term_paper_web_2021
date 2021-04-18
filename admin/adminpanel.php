<!DOCTYPE html>

<?php
if (empty($_SERVER['HTTP_REFERER'])) {
  header('Location: /coursework.loc/');
  exit;
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>admin panel</title>
    <link rel="stylesheet" type="text/css" href="../style/main.css">
  </head>

  <body class="container">
    <div class="menu">
        <div class="menuItem" style="text-align: center;">Меню</div>
        <div class="menuItem"><a href="#">На початок</a></div>
        <div class="menuItem"><a href="biography.html">Біографія</a></div>
        <div class="menuItem"><a href="dsp.html">Про дисципліни</a></div>
        <div class="menuItem"><a href="roz.html">Розклад занять</a></div>
        <div class="menuItem"><a href="dos.html">Досягненя</a></div>
    </div>

    <header class="header">
        <h1><div>Контакти розробника</div></h1>
    </header>

    <section class="content">
        <h3>GitHub</h3>
        <img src="../image/git.webp" width="100%">
        <pre>   https://github.com/Who-are-me</pre>

        <h3>Gmail</h3>
        <img src="../image/gmail.png" width="100%">
        <pre>   vasyastorchak74@gmail.com</pre>
    </section>

    <section class="moreContent">
        <div></div>
    </section>

    <footer class="footer">
        <div>Ternopil 2020-2021</div>
    </footer>
  </body>
</html>