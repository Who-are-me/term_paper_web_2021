<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <link href="css/main_loyout.css" rel="stylesheet">
    <link rel="shortcut icon" href="/image/site.png" type="image/x-icon">
    <link href="css/news.css" rel="stylesheet">
    <title>@yield('title')</title>

</head>

<body>
    <header>
        <div class="row d-flex m-0 p-0" id="top-nav">
            <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0 h-100"></div>
            <div class="col-12 col-md-10 col-lg-8 my-2 text-center text-sm-left"><span class="ml-0 ml-sm-5 ml-md-0"><img
                        src="/image/telephone.svg">28-18-11,28-19-36</span>
                <span class="ml-3 ml-md-5"><img src="../image/mail.svg">tktdtu@gmail.com</span>
            </div>
            <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        </div>
    </header>
    <div class="col-12 p-0 m-0 d-none d-md-flex nav sticky-top">
        <div class="row col-12 d-none d-md-flex p-0 m-0">
            <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
            <div class="col-12 col-md-10 col-lg-8 px-0 m-0 d-flex">
                <a class="navbar-brand p-0" href="#"><img src="/image/Logo.svg" class=""></a>
                <div class="col d-flex p-0" id="nav-a-md">
                    <a class="nav-link px-md-0" href="#">Головна</a>

                    <a class="nav-link px-md-0" href="#">Про нас</a>

                    <a class="nav-link px-md-0" href="#">Матеріальна база</a>

                    <a class="nav-link px-md-0" href="#">Абітурієнту</a>

                    <a class="nav-link px-md-0" href="#">Студенту</a>

                    <a class="nav-link px-md-0" href="#">Новини</a>

                    <a class="nav-link px-md-0" href="#">Зворотній зв’язок</a>
                </div>
            </div>
            <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md sticky-top d-flex d-md-none p-0">

        <a class="navbar-brand p-0 pl-5" href="#"><img src="/image/Logo.svg" class=""></a>
        <button class="navbar-toggler mr-5" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="/image/Hamburger_icon.png"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Головна</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#">Про нас</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="#">Матеріальна база</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Абітурієнту</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Студенту</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Новини</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Зворотній зв’язок</a>
                </li>
            </ul>
        </div>
        </div>
        </div>

    </nav>

    <div class="row d-none m-0 p-0 content-background">
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        <div class="col-12 col-md-10 col-lg-8">
        </div>
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
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
                    <div class="col-12 p-0"><img src="/image/Logo_2.svg"></div>
                    <div class="col-12 p-0 pt-2">Будь завжди з нами на зв’язку!</div>

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
                        <p id="upper-footer-sm" class="pt-1"> <a href="#"><img src="/image/facebook.svg"> facebook</a>
                        </p>
                        <p id="upper-footer-sm"> <a href="#"><img src="/image/instagram.svg"> instagram</a></p>
                        <p id="upper-footer-sm"> <a href="#"><img src="/image/youtube.svg"> youtube</a> </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-2 m-0 d-sm-none" id="upper-footer">
            <div class="col-12 d-block d-sm-none py-1 text-50" id="upper-footer-sm">
                <div class="col-12 text-center" id="upper-footer-sm-logo"><img src="/image/Logo_2.svg"></div>
                <div class="col-12 pt-2 text-center">
                    <p>Телефони: 28-18-11, 28-19-36, Електронна
                        пошта: tktdtu@gmail.com</p>
                    <p>Адреса: м. Тернопіль - 16, вул. Л. Курбаса, 13</p>
                    <p class="upper-footer-social-img">
                        <a href="#"><img src="/image/facebook.svg"> facebook</a>
                        <a href="#"><img src="/image/instagram.svg"> instagram</a>
                        <a href="#"><img src="/image/youtube.svg"> youtube</a></a>
                        
                    </p>
                </div>
            </div>
        </div>

        <div class="row d-flex m-0 p-0" id="second-footer">
            <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0 h-100"></div>
            <div class="row col-12 col-md-10 col-lg-8 my-2 text-center text-sm-left align-middle">
                <div class="col-12 col-md-7 p-0 m-0 pl-sm-5 pl-md-0 text-center text-md-left"> <a href="#"
                        class="p-0 pl-2 pl-md-0">Умови користування</a>
                    <a href="#" class="p-0 pl-2">Конфіденційність</a>
                    <a href="#" class="p-0 pl-2">Контакти</a>
                </div>
                <div
                    class="col-12 col-md-5 p-0 m-0 text-center text-md-right  pr-md-5 pr-md-0 py-2 py-sm-0 pl-0 pl-sm-5  pl-md-0">
                    2021<a href="#">©</a>Всі права захищені | <a href="tk.te.ua">tk.te.ua</a></div>
            </div>
            <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        </div>

    </footer>

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