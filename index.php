<?php
// require_once 'include/connection_db.php';

// $variables = mysqli_query($connection, "select * from `content`");

// $vars = [];

// while($var = mysqli_fetch_assoc($variables)) {
//   $vars["title"] = $var["title"];
//   $vars["text"] = $var["text"];
// }

// // 52.58
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Course work</title>
    <link rel="stylesheet" type="text/css" href="style/main.css">
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
        <h1><div>
          <?php  
            //echo $vars["title"];
          ?>
        </div></h1>
    </header>

    <section class="content">
        <h1>
        Тут нічого немає, нічого довитися !!!
        </h1>
      <?php  
        //echo $vars["text"];
      ?>

        <h3>GitHub</h3>
        <img src="image/git.webp" width="100%">
        <pre>   https://github.com/Who-are-me</pre>

        <h3>Gmail</h3>
        <img src="image/gmail.png" width="100%">
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