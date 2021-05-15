<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@600&family=Montserrat&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../../css/header.css" rel="stylesheet">
    <link href="../../css/footer.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="/css/news.css" rel="stylesheet">

    <title>ЦК Електронних апаратів - @yield('title')</title>
</head>

<body>
    <header>
        <div class="row d-flex align-middle p-0 m-0 py-1 sticky-top" id="top-nav">
            <div class="d-none d-sm-flex ml-0 ml-sm-5 col-sm-5 col-md-2"><img src="/image/telephone.svg">
                <span>28-18-11, 28-19-36</span>
            </div>
            <div class="col-6 d-flex d-sm-none"><img src="/image/telephone.svg"><span>28-18-11, 28-19-36</span></div>
            <div class="col-6 col-sm-5 col-md-4"><img src="/image/mail.svg">tktdtu@gmail.com</div>
            <div class="d-none d-lg-flex col-md-2"></div>
            </div>
    </header>
    <nav class="navbar navbar-expand-md p-0 align-middle">
        <a class="navbar-brand ml-sm-5 p-0" href="#"><img src="/image/Logo.svg" class="ml-0 ml-xl-5"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="/image/Hamburger_icon.png"></span>
        </button>
        <div class="collapse navbar-collapse p-0" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mr-3 m-md-0 mr-lg-4">
                    <a class="nav-link" href="#">Головна</a>
                </li>
                <li class="nav-item mr-lg-4">
                    <a class="nav-link  " href="#">Про нас</a>
                </li>
                <li class="nav-item  mr-lg-4">
                    <a class="nav-link " href="#">Матеріальна база</a>
                </li>
                <li class="nav-item  mr-lg-4">
                    <a class="nav-link " href="#">Абітурієнту</a>
                </li>
                <li class="nav-item  mr-lg-4">
                    <a class="nav-link " href="#">Студенту</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Новини</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        @yield('content')
        <!-- /.content -->
    </div>

    <footer>
        <div class="row m-0 p-0" id="upper-footer">

            <div class="col-12 pb-2 m-0 d-none d-sm-flex">
                <div class="col-4 pl-xl-5 pt-2">
                    <div class="col-12"><img src="/image/Logo.svg"></div>
                    <div class="col-12 pt-2">Будь завжди з нами на зв’язку!</div>

                </div>
                <div class="col-4 pt-2">
                    <div class="col-12"><span class="green-span">Зв’яжися з нами</span></div>
                    <div class="col-12 pt-2">
                        <p><img src="/image/telephone.svg">28-18-11, 28-19-36</p>
                        <p><img src="/image/mail.svg">tktdtu@gmail.com</p>
                        <p>м. Тернопіль - 16, вул. Л. Курбаса, 13</p>
                        <p>Україна</p>
                    </div>
                </div>
                <div class="col-4 pt-2 pr-xl-5">
                    <div class="col-12"><span class="green-span">Останні події</span> </div>
                    <div class="col-12 pt-1">
                        <p>Отримуй найновішу інформацію у будь-який час!</p>
                        <input type="email" class="form-control" placeholder="Email" aria-label="Recipient's username"
                            aria-describedby="basic-addon2" id="upper-header-input-group">
                        <div class="input-group-append align-content-center">
                            <button class="btn btn-outline-secondary" type="button"
                                id="upper-header-input-button">Готово</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block d-sm-none py-1 text-50" id="upper-footer-sm">
                <div class="col-12 text-center" id="upper-footer-sm-logo"><img src="/image/Logo.svg"></div>
                <div class="col-12 pt-1 text-center">
                    <p><img src="/image/telephone.svg">Телефони: 28-18-11, 28-19-36, <img
                            src="/image/mail.svg">Електронна пошта: tktdtu@gmail.com</p>
                    <p>Адреса: м. Тернопіль - 16, вул. Л. Курбаса, 13</p>
                </div>
            </div>
        </div>
        <div class="col-12 p-0 m-0 d-block d-sm-flex" id="second-footer">
            <div class="col-12 col-sm-5 pl-md-5 py-2 text-center text-sm-left">
                <a href="#">Контакти</a>
                <a href="#" class="p-0 pl-2">Умови користування</a>
                <a href="#" class="p-0 pl-2">Конфіденційність</a>
            </div>
            <div class="col-2 text-center py-1 d-none d-sm-flex"><a href="#"><span class="align-middle"> <img src="/image/arrow-up.svg"></span></a>
            </div>
            <div class="col-12 col-sm-5 py-2 text-center">2021© Всі права захищені | <a href="tk.te.ua">tk.te.ua</a> </div>
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