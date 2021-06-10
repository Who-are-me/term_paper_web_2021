@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Студенту')

@section('content')
<link href="css/pages.css" rel="stylesheet">

<div class="row d-flex m-0 p-0 title-student">
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        <div class="col-12 col-md-10 col-lg-8 text-center py-3 py-md-5 px-5 px-md-0">
            <div class="col-12 py-1 py-md-3 px-md-4  for-student-title-inside-cont text-center">
                <span>Студенту</span>
            </div>
        </div>
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    </div>


    <div class="row d-flex m-0 p-0 content-background">
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        <div class="col-12 col-md-10 col-lg-8">
            <div class="d-flex col-12 justify-content-between py-5 m-0" id="container-heading">
                <img src="../../image/left-student-heading-separate.svg">
                <span class="salad-span-heading student-span-heading letter-spacing">ДИСЦИПЛІНИ</span>
                <img src="../../image/right-student-heading-separate.svg">
            </div>
            <div class="col-12 d-flex p-0">
                <div class="col-sm-1 col-lg-3 d-none d-sm-flex"> </div>
                <div class="col-12 col-sm-10 col-lg-6 text-center">
                    <p class="text-center basic-text">
                        Освітня програма <br>
                        <b>"Конструювання, виробництво та технічне
                            обслуговування радіотехнічних пристроїв"</b>
                        на базі 9 класів, 11 класів, освітньо кваліфікаційного рівня
                        <b>"Кваліфікований робітник"</b>
                    </p>
                </div>
                <div class="col-sm-1 col-lg-3 d-none d-sm-flex"></div>

            </div>
            <div class="col-12 d-block py-5 px-3">
                <p class="picture-caption-italic px-2">- Пристрої приймання та передавання інформації;
                </p>
                <p class="picture-caption-italic px-2">- Конструювання та технології виробництва;;
                </p>
                <p class="picture-caption-italic px-2">- Цифрові пристрої, сигнали та процеси;
                </p>
                <p class="picture-caption-italic px-2">- Радіопередавальні пристрої;
                </p>
                <p class="picture-caption-italic px-2">- Пристрої НВЧ та антени;
                </p>
                <p class="picture-caption-italic px-2">- Проектування радіотехнічних пристроїв
                </p>
                <p class="picture-caption-italic px-2">- Автоматика та схемотехніка;
                </p>
                <p class="picture-caption-italic px-2">- Джерела електроживлення та стандартизації;
                </p>
            </div>

        </div>
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    </div>
    <div class="row d-flex m-0 p-0 content-background px-5 px-md-0" id="background-yellow-pen">
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        <div class="col-12 col-md-10 col-lg-8">
            <div class="col-12 d-block p-0 m-0">
                <div class="d-flex col-12 justify-content-between p-0 py-5 m-0" id="container-heading">
                    <img src="../../image/left-student-heading-separate.svg">
                    <span class="salad-span-heading student-span-heading letter-spacing text-center">ГРАФІК НАВЧАЛЬНОГО
                        ПРОЦЕСУ</span>
                    <img src="../../image/right-student-heading-separate.svg">
                </div>
                <div class="col-12 p-0 m-0 text-center">
                    <button class="red-button">Завантажити графік</button>
                </div>
            </div>
        </div>
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    </div>
    <div class="row d-flex m-0 p-0 content-background px-5 px-md-0 py-5">
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        <div class="col-12 col-md-10 col-lg-8 d-block">
            <div class="d-flex col-12 justify-content-between p-0 py-5 m-0" id="container-heading">
                <img src="../../image/left-student-heading-separate.svg">
                <span class="salad-span-heading student-span-heading letter-spacing text-center">ДИПЛОМНЕ
                    ПРОЕКТУВАННЯ</span>
                <img src="../../image/right-student-heading-separate.svg">
            </div>
            <div class="col-12 p-o py-5 text-center">
                <p><span class="salad-span-heading student-second-span-heading text-center">Захист студентами дипломних
                        проектів</span></p>
                <p class="p-0 py-5 basic-text"><b>Студенти випускних груп на високому рівні готують і захищають дипломні
                        проекти. Членами державних кваліфікаційних комісій є керівники та начальники підрозділів
                        провідних підприємств Тернополя та області: </b> </p>

            </div>
            <div class="col-12 d-block p-0">
                <div class="col-12 d-flex p-0">
                    <p class="basic-text-bold">Кущак Дмитро Михайлович – </p>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-2"></div>
                    <div class="col-10 p-0">
                        <p class="basic-text">
                            начальник Державної інспекції електрозв’язку по Тернопільській області
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block p-0">
                <div class="col-12 d-flex p-0">
                    <p class="basic-text-bold">Карпів Володимир Богданович – </p>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-2"></div>
                    <div class="col-10 p-0">
                        <p class="basic-text">
                            технічний директор ВАТ ”Тернопільське конструкторське бюро радіозв’язку ”Стріла”
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block p-0">
                <div class="col-12 d-flex p-0">
                    <p class="basic-text-bold">Химич Григорій Петрович –</p>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-2"></div>
                    <div class="col-10 p-0">
                        <p class="basic-text">
                            Тернопільське державне науково-виробниче підприємство “Промінь” Директор філії
                            “Промінь-антени”
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block p-0">
                <div class="col-12 d-flex p-0">
                    <p class="basic-text-bold">Владика Ігор Дмитрович – </p>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-2"></div>
                    <div class="col-10 p-0">
                        <p class="basic-text">
                            начальник відділу технічного та метрологічного забезпечення ВАТ “Тернопільський радіозавод
                            “Оріон”
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block p-0">
                <div class="col-12 d-flex p-0">
                    <p class="basic-text-bold">Грицеляк Володимир Михайлович –</p>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-2"></div>
                    <div class="col-10 p-0">
                        <p class="basic-text">
                            начальник відділу маркетингу і збуту ВАТ “Тернопільський радіозавод “Оріон”
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block p-0">
                <div class="col-12 d-flex p-0">
                    <p class="basic-text-bold">Кордяк Володимир Федорович –</p>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-2"></div>
                    <div class="col-10 p-0">
                        <p class="basic-text">
                            головний конструктор ВАТ “Тернопільський радіозавод “Оріон”
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block p-0 py-3 pb-5">
                <div class="col-12 d-flex p-0">
                    <p class="basic-text-bold">Піскун Сергій Олександрович – </p>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-2"></div>
                    <div class="col-10 p-0">
                        <p class="basic-text">
                            головний конструктор ТОВ ТКБР «Стріла»
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block p-0 py-3">
                <div class="col-12 d-flex py-2">
                    <div class="col-3"> </div>
                    <div class="col-6 p-0 text-center">
                        <img src="../../image/dark-wood-background.png" class="w-100  image-ridius-border">
                    </div>
                    <div class="col-3"> </div>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-1 d-none d-md-flex"> </div>
                    <div class="col-12 col-md-10 d-flex text-center">
                        <P class="basic-text italic"><b>Крім пояснювальної записки та графічної частини,
                                дипломники виконують діючі макети та 3D моделі і демонструють їх працездатність.</b></P>
                    </div>
                    <div class="col-1 d-none d-md-flex"> </div>
                </div>
            </div>
            <div class="col-12 d-block p-0 py-3">
                <div class="col-12 d-flex py-2">
                    <div class="col-3"> </div>
                    <div class="col-6 p-0 text-center">
                        Слайдер
                        <img src="../../image/dark-wood-background.png" class="w-100 image-ridius-border">

                    </div>
                    <div class="col-3"> </div>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-1 d-none d-md-flex"> </div>
                    <div class="col-12 col-md-10 d-flex text-center">
                        <P class="basic-text italic"><b>Директор колледжу В.П. Калушка вручає дипломи студентам групи
                                ТОР-403 (2009 р.).</b></P>
                    </div>
                    <div class="col-1 d-none d-md-flex"> </div>
                </div>
            </div>
            <div class="col-12 d-block p-0 py-3">
                <div class="col-12 d-flex py-2">
                    <div class="col-3"> </div>
                    <div class="col-6 p-0 text-center">
                        <img src="../../image/dark-wood-background.png" class="w-100 image-ridius-border">
                    </div>
                    <div class="col-3"> </div>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-1 d-none d-md-flex"> </div>
                    <div class="col-12 col-md-10 text-center">
                        <P class="basic-text italic"><b>Зав. відділенням В.А. Приймак дає настанову випускникам (2009
                                р.).</b></P>
                    </div>
                    <div class="col-1 d-none d-md-flex"> </div>
                </div>
            </div>
            <div class="col-12 d-block p-0 py-3">
                <div class="col-12 d-flex py-2">
                    <div class="col-3"> </div>
                    <div class="col-6 p-0 text-center">
                        <img src="../../image/dark-wood-background.png" class="w-100 image-ridius-border">
                    </div>
                    <div class="col-3"> </div>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-1 d-none d-md-flex"> </div>
                    <div class="col-12 col-md-10 d-flex text-center">
                        <P class="basic-text italic"><b>Захист дипломних проектів з виготовленням діючих макетів на
                                тему:
                                «Розробка конструкції зарядного пристрою для автомобільного акумулятора» та
                                «Розробка конструкції велекомп'ютера» (2019р.)</b></P>
                    </div>
                    <div class="col-1 d-none d-md-flex"> </div>
                </div>
            </div>
            <div class="col-12 d-block py-3">
                <div class="col-12 d-flex p-0">
                    <div class="col-6 p-2">
                        <img src="../../image/dark-wood-background.png" class="w-100 image-ridius-border">
                    </div>
                    <div class="col-6 p-0"></div>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-6 p-0"></div>
                    <div class="col-6 p-2"><img src="../../image/dark-wood-background.png" class="w-100 image-ridius-border"></div>
                </div>
            </div>
        </div>
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    </div>

    <div class="row d-flex m-0 p-0 px-5 px-md-0" id="background-dark-wood">
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        <div class="col-12 col-md-10 col-lg-8">
            <div class="col-12 p-o py-5 text-center">
                <p><span class="salad-span-heading text-white text-center">До уваги студентів!</span></p>

            </div>
            <div class="col-12 text-center p-0">
                <P class="basic-text text-white">У рамках проекту <b>ВСП "ТФК ТНТУ"</b> , благодійного фонду
                    ,<b>"Частинка добра"</b> та Посольства США в Україні <b>"Будуй кар'єру в Україні"</b> створено
                    сервіс, який сприятиме працевлаштуванню здобувачів освіти.</P>
                <p class="py-5 text-left basic-text-bold text-white">Переваги цього сайту:</p>
            </div>
            <div class="col-12 d-flex p-0">
                <div class="col-1"></div>
                ]<div class="col-10 p-0 basic-text text-white text-left">
                    <p class="p-0 pb-2"> - допоможе оперативно здійснити пошук вакансій по всій країні та розмістити
                        власне резюме;</p>
                    <p class="p-0 py-2">- полегшить шлях при виборі професії чи спеціальності;</p>
                    <p class="p-0 py-2">- сприятиме співпраці між роботодавцями та потенційними працівниками;
                    </p>
                    <p class="p-0 py-2">- допоможе відшукати саме той професійний шлях у своєму житті, який допоможе
                        розкрити особистий потенціал, зайняти гідне місце на ринку праці, досягнути вершин професійної
                        майстерності та кар’єрного зростання;
                    </p>

                    <p class="p-0 py-2">- рекламуватиме існуючі можливості працевлаштування;
                    </p>
                    <p class="p-0 py-2">- сприятиме збереженню кваліфікованої робочої сили в Україні;
                    </p>

                    <p class="p-0 py-2">- інформуватиме про найактуальніші та найперспективніші професії.
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="col-12 text-center pt-5">
                <p class="basic-text text-white pt-5"><b>Режим доступу:<a href="http://buildyourcareer.in.ua/uk" class="text-white"> http://buildyourcareer.in.ua/uk</a></b></p>
            </div>
            <div class="col-12 d-flex p-0 pb-5">
                <div class="col-1 d-none d-md-flex"> </div>
                <div class="col-12 col-md-10 text-center">
                    <P class="basic-text text-white"><b>Величезне прохання  зареєструватися на цьому сайті.
                        Таким чином зможете скористатися всіма можливостями сервісу.</b></P>
                </div>
                <div class="col-1 d-none d-md-flex"> </div>
            </div>
        </div>
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    </div>

@endsection