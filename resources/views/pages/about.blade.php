@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Про нас')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Montserrat:wght@300&display=swap"
        rel="stylesheet">
<link href="css/pages.css" rel="stylesheet">

    <div class="row d-flex m-0 p-0 title-about">
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        <div class="col-12 col-md-10 col-lg-8 text-center py-3 py-md-5 px-5 px-md-0">
            <div class="col-12 py-1 py-md-4 px-md-4  about-title-inside-cont text-center">
                <span>Про циклову</span>
            </div>
        </div>
    </div>
</div>

<div class="row d-flex m-0 p-0" id="background-white-wall">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 p-0 pl-5 pl-sm-0">
        <div class="col-12 p-0 m-0 d-block pb-5">
            <div class="d-flex col-12 justify-content-between p-0 m-0 py-5" id="container-heading">
                <img src="image/gray-left-heading-separate.svg">
                <span id="grey-span-heading">Історія</span>
                <img src="image/gray-right-heading-separate.svg">
            </div>
            <div class="col-12 p-0 m-0 d-flex">
                <div class="col-4 p-0">
                    <img class="w-100" src="{{ $content[0]->text }}" style="border-radius: 15px;">
                </div>
                <div class="col-8 text-center align-items-center">
                    <span class="basic-text"><?php echo $content[1]->text; ?></span>
                </div>
            </div>
            <div class="col-12 p-0 m-0 d-block d-sm-flex pt-5">
                <div class="col-2 d-none d-md-flex"></div>
                <div class="col-12 col-md-8 text-center">
                    <span class="basic-text"><?php echo $content[2]->text; ?></span>
                </div>
                <div class="col-2 d-none d-md-flex"></div>
            </div>
        </div>
    </div>
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
</div>

<div class="row d-flex m-0 py-0 content-background-about px-5 px-md-0">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 p-0">
        <div class="col-12 p-0 m-0 d-block">
            <div class="d-flex col-12 justify-content-between p-0 m-0 py-5 text-center" id="container-heading">
                <img src="/image/gray-left-heading-separate.svg">
                <span id="grey-span-heading">Склад циклової комісії</span>
                <img src="/image/gray-right-heading-separate.svg">
            </div>

            <img class="w-100 mb-5" src="{{ $content[3]->text }}" style="border-radius: 15px;">

            @foreach ($teachers as $item)

                @if (($item->id % 2) != 0)
                    <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                        <div class="col-12 col-md-4 p-0 text-center text-md-start">
                            <img src="{{ $item->srcimg }}" class="pr-md-5 w-100">
                        </div>
                        <div class="col-12 col-md-8 text-center text-md-left  align-items-center p-0">
                            <p class="basic-text">
                                @if ($item->id == 1)
                                    Голова циклової комісії радіотехнічних дисциплін:<br>
                                @endif
                                <span class="basic-text-bold">{{ $item->pip }}</span>.<br>
                                <?php echo $item->about; ?>
                            </p>
                        </div>
                    </div>
                @else
                    <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                        <div class="col-12 col-md-4 order-md-last p-0 text-center text-md-start ">
                            <img src="{{ $item->srcimg }}" class="w-100 pl-md-5">
                        </div>
                        <div class="col-12 col-md-8 align-middle text-center text-md-right order-md-first p-0 ">
                            <p class="basic-text">
                                <span class="basic-text-bold">{{ $item->pip }}</span><br>
                                <?php echo $item->about; ?>
                            </p>
                        </div>
                    </div>
                @endif

            @endforeach


        </div>
        <div class="col-12 p-0 py-5 m-0">
            <p class="text-center grey-bold-text-heading p-0 py-5">Завданням комісії є підготовка сучасного радіотехніка, фахівця, якому притаманні такі якості:</p>
            <p id="black-span-heading">Основні напрямки роботи комісії:</p>
            <p class="black-list-header">І. Вивчення і підвищення рівня знань, умінь та навичок студентів:</p>
            <p class="lite-text py-2">➣ Використання активних форм усної перевірки знань, усне опитування за темами
            </p>
            <p class="lite-text py-2">
                ➣ Аналіз рівня знань, умінь і навичок студентів, труднощів в опануванні програмним матеріалом і на
                цій
                основі розроблення шляхів підвищення ефективності навчального процесу</p>
            <p class="lite-text py-2">➣ Вивчення результативності позакласної роботи, залучення студентів до роботи
                в
                гуртках</p>
            <p class="lite-text py-2">
                ➣ Проведення конкурсів серед студентів старших курсів на кращого по професії</p>
            <p class="black-list-header">ІІ. Розробка та впровадження заходів з вдосконалення методики викладання:
            </p>
            <p class="lite-text py-2">➣ Розробка та впровадження методичних рекомендацій по вдосконаленню і
                підвищенню
                рівня знань</p>
            <p class="lite-text py-2">➣ Обговорення результатів курсового та дипломного проектування</p>
            <p class="lite-text py-2">➣ Розробка та впровадження методичних розробок та рекомендацій по предметах
                циклу та по темах і
                розділах цих предметів</p>
            <p class="lite-text py-2">➣ Вивчення і рецензування навчально-методичної літератури, наукових
                публікацій та їх використання в
                навчально-виховному процесі</p>

            <p class="black-list-header">ІІІ. Підвищення професійного рівня викладачів циклової комісії</p>
        </div>
    </div>
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
</div>

@endsection