<!doctype html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link href="css/main_layout_style.css" rel="stylesheet">
  <link href="css/news.css" rel="stylesheet">
  <title>ЦК Електронних апаратів  - @yield('title')</title>
</head>

<body>
  <header>
    <div class="row d-flex m-0 p-0" id="top-nav">
      <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0 h-100"></div>
      <div class="col-12 col-md-10 col-lg-8 my-2 text-center text-sm-left"><span class="ml-0 ml-sm-5 ml-md-0"><img
            src="../image/telephone.svg">28-18-11,28-19-36</span>
        <span class="ml-3 ml-md-5"><img src="../image/mail.svg">tktdtu@gmail.com</span>
      </div>
      <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    </div>
  </header>
  <div class="col-12 p-0 m-0 d-none d-md-flex nav sticky-top">
    <div class="row col-12 d-none d-md-flex p-0 m-0">
      <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
      <div class="col-12 col-md-10 col-lg-8 px-0 m-0 d-flex">
        <a class="navbar-brand p-0" href="#"><img src="../image/Logo.svg" class=""></a>
        <div class="col d-flex p-0" id="nav-a-md">
          <a class="nav-link px-md-0" href="#">Головна</a>

          <a class="nav-link px-md-0" href="#">Про нас</a>

          <a class="nav-link px-md-0" href="#">Матеріальна база</a>

          <a class="nav-link px-md-0" href="#">Абітурієнту</a>

          <a class="nav-link px-md-0" href="#">Студенту</a>

          <a class="nav-link px-md-0" href="#">Новини</a>

          <a class="nav-link px-md-0" href="#">Контакти</a>

          <a class="nav-link px-md-0" href="#">Зворотній зв’язок</a>
        </div>
      </div>
      <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    </div>
  </div>
  
  
    <div>
        @yield('content')
        <!-- /.content -->
    </div>


    <footer>
      <div class="row d-none d-sm-flex m-0  px-0 py-4" id="upper-footer">
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        <div class="col-12 col-md-10 col-lg-8 my-2 text-center text-sm-left d-flex p-0">
          <div class="col-4 p-0 pl-5 pl-md-0">
            <div class="col-12"><img src="/image/Logo_2.svg"></div>
            <div class="col-12 pt-2">Будь завжди з нами на зв’язку!</div>

          </div>
          <div class="col-4  px-0 pt-2">
            <div class="col-12"><span class="green-span">Зв’яжися з нами</span></div>
            <div class="col-12 pt-2">
              <p>28-18-11, 28-19-36</p>
              <p>tktdtu@gmail.com</p>
              <p>м. Тернопіль - 16, вул. Л. Курбаса, 13</p>
              <p>Україна</p>
            </div>
          </div>
          <div class="col-4 px-0 pt-2 pr-5 pr-md-0 upper-footer-social-img">
            <div class="col-12"><span class="green-span">Шукайте нас також на:</span> </div>
            <div class="col-12 pt-1">
             <p id="upper-footer-sm" class="pt-1"> <a href="#"><img src="../image/facebook.svg">  facebook</a> </p>
             <p id="upper-footer-sm" > <a href="#"><img src="../image/instagram.svg">  instagram</a></p>
             <p id="upper-footer-sm"> <a href="#"><img src="../image/youtube.svg">  youtube</a> </p>
            </div>
          </div>
        </div>

        </div>        
        
        <div class="container-fluid pt-2 m-0" id="upper-footer"><div class="col-12 d-block d-sm-none py-1 text-50" id="upper-footer-sm">
          <div class="col-12 text-center" id="upper-footer-sm-logo"><img src="../image/Logo_2.svg"></div>
          <div class="col-12 pt-1 text-center">
            <p>Телефони: 28-18-11, 28-19-36, Електронна
              пошта: tktdtu@gmail.com</p>
            <p>Адреса: м. Тернопіль - 16, вул. Л. Курбаса, 13</p>
            <p class="upper-footer-social-img">
              <a href="#"><img src="../image/facebook.svg">  facebook</a> 
             <a href="#"><img src="../image/instagram.svg">  instagram</a>
            <img src="../image/youtube.svg">  youtube</a>
            </p>
          </div>
        </div></div>
        
        <div class="row d-flex m-0 p-0" id="second-footer">
          <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0 h-100"></div>
          <div class="row col-12 col-md-10 col-lg-8 my-2 text-center text-sm-left align-middle">
            <div class="col-md-5"><a class="d-flex d-md-none d-lg-flex" href="#">Контакти</a>
          <a href="#" class="p-0 pl-2">Умови користування</a>
          <a href="#" class="p-0 pl-2">Конфіденційність</a></div>
            <div class="col-md-2 text-center"><a href="#"><span class="align-middle"> <img
                src="../image/arrow-up.svg"></span></a></div>
            <div class="col-md-5 text-right">2021<a href="#">©</a>Всі права захищені | <a href="tk.te.ua">tk.te.ua</a></div>
          </div>
          <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        </div>
        
      <div class="col-12 p-0 m-0 d-block d-sm-flex" id="second-footer">
        <div class="col-12 col-sm-5 pl-md-5 py-2 text-center text-sm-left">
          
        </div>
        <div class="col-2 text-center py-1 d-none d-sm-flex">
        </div>
        <div class="col-12 col-sm-5 py-2 text-center"> </div>
      </div>
    </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>