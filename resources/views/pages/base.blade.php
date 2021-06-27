@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Матеріальна база')

@section('content')
<link href="css/pages.css" rel="stylesheet">

<div class="row d-flex m-0 p-0 title-material">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 text-center py-3 py-md-5 px-5 px-md-0">
        <div class="col-12 py-1 py-md-4 px-md-4  material-base-title-inside-cont text-center" data-aos="zoom-out" data-aos-duration="1000">
            <span>Матеріальна база</span>
        </div>
    </div>
</div>

<div class="row d-flex m-0 p-0 content-background-material px-5 px-md-0">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 p-0">
        <div class="col-12 p-0 m-0" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="700">
            <p class="py-3 text-center blue-header">Навчальний процеc</p>
            <div class="col-12 p-0 d-flex">
                <div class="col-1 d-none d-sm-flex p-0"></div>
                <div class="col-12 col-sm-10 d-flex p-0">
                    <p class="text-center basic-text p-0">у повній мірі забезпечений необхідними 
                        <span class="basic-text-bold">навчальними приміщеннями,</span>  обладнаними необхідними 
                        <span class="basic-text-bold">приладами</span>  та 
                        <span class="basic-text-bold">пристроями</span>  для опанування тем навчальної програми. 
                    </p> 
                </div>
                <div class="col-1 d-none d-sm-flex p-0"></div>
            </div>
        </div>
        <div class="col-12 p-0 text-center d-flex" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="1300">
            <div class="col-1"></div>
            <div class="col-10 p-0">
                <p class="py-3 py-md-5 text-center blue-header">Для викладання спеціальних предметів є кабінети і лабораторії: </p>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="col-12 p-0 m-0">
            <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                <div class="col-12 col-md-6 p-0 text-center text-md-start" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ $content[0]->text }}" class="pr-md-5 w-100">
                </div> 
                <div class="col-12 col-md-6 text-center text-md-left  align-items-center pl-md-3" data-aos="zoom-in" data-aos-duration="1500">
                    <p class="basic-text-bold">Кабінет-лабораторія телекомунікаційних пристроїв приймання та передавання інформації, телевізійної та офісної техніки (ауд.321).</p>
                </div>
            </div>

            <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                <div class="col-12 col-md-6 order-md-last p-0 text-center text-md-start " data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ $content[1]->text }}" class="w-100 pl-md-5">
                </div>
                <div class="col-12 col-md-6 align-middle text-center text-md-right order-md-first p-0 pr-md-3" data-aos="zoom-in" data-aos-duration="1500">
                    <p class="basic-text-bold">Кабінет-лабораторія конструювання та технології виробництва РЕА, систем автоматизованого проектування (ауд. 306).</p>

                </div>
            </div>

            <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                <div class="col-12 col-md-6 p-0 text-center text-md-start" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ $content[2]->text }}" class="pr-md-5 w-100">
                </div>
                <div class="col-12 col-md-6 text-center text-md-left  align-items-center pl-md-3" data-aos="zoom-in" data-aos-duration="1500">
                    <p class="basic-text-bold">Кабінет-лабораторія цифрових пристроїв, сигналів та процесів в радіотехніці, електронних пристроїв та мікроелектроніки (ауд.313).</p>
                </div>
            </div>

            <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                <div class="col-12 col-md-6 order-md-last p-0 text-center text-md-start " data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ $content[3]->text }}" class="w-100 pl-md-5">
                </div>

                <div class="col-12 col-md-6 align-middle text-center text-md-right order-md-first p-0 pr-md-3" data-aos="zoom-in" data-aos-duration="1500">
                    <p class="basic-text-bold">Лабораторія пристроїв НВЧ та антен (ауд. 314).</p>
                </div>
            </div>

            <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                <div class="col-12 col-md-6 p-0 text-center text-md-start" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ $content[4]->text }}" class="pr-md-5 w-100">
                </div>
                <div class="col-12 col-md-6 text-center text-md-left  align-items-center pl-md-3" data-aos="zoom-in" data-aos-duration="1500">
                    <p class="basic-text-bold">Кабінет-лабораторія радіопередавальних пристроїв, метрології та вимірювальної техніки (ауд.310).</p>

                </div>
            </div>

            <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                <div class="col-12 col-md-6 order-md-last p-0 text-center text-md-start " data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ $content[5]->text }}" class="w-100 pl-md-5">
                </div>
                <div class="col-12 col-md-6 align-middle text-center text-md-right order-md-first p-0 pr-md-3" data-aos="zoom-in" data-aos-duration="1500">
                    <p class="basic-text-bold">Кабінет-лабораторія схемотехнічного проектування радіотехнічних пристроїв та радіотехнічних систем (ауд. 213).</p>
                </div>
            </div>

            <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                <div class="col-12 col-md-6 p-0 text-center text-md-start" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ $content[6]->text }}" class="pr-md-5 w-100">
                </div>
                <div class="col-12 col-md-6 text-center text-md-left  align-items-center pl-md-3" data-aos="zoom-in" data-aos-duration="1500">
                    <p class="basic-text-bold">Кабінет-лабораторія теорії кіл, електроматеріалознавства та елементної бази РЕА (ауд.217).</p>
                </div>
            </div>

            <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                <div class="col-12 col-md-6 order-md-last p-0 text-center text-md-start " data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ $content[7]->text }}" class="w-100 pl-md-5">
                </div>

                <div class="col-12 col-md-6 align-middle text-center text-md-right order-md-first p-0 pr-md-3" data-aos="zoom-in" data-aos-duration="1500">
                    <p class="basic-text-bold">Кабінет-лабораторія автоматики та схемотехніки мікропроцесорних систем (ауд.219).</p>
                </div>
            </div>

            <div class="col-12 d-block d-md-flex p-0  m-0 py-3 py-md-5">
                <div class="col-12 col-md-6 p-0 text-center text-md-start" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ $content[8]->text }}" class="pr-md-5 w-100">
                </div>
                <div class="col-12 col-md-6 text-center text-md-left  align-items-center pl-md-3" data-aos="zoom-in" data-aos-duration="1500">
                    <p class="basic-text-bold">Лабораторія джерел електроживлення та стандартизації РЕА (ауд. 223).</p>

                </div>
            </div>

        </div>
        <div class="col-12 p-0 text-center d-flex">
            <div class="col-1"></div>
            <div class="col-10 p-0">
                <p class="py-2 py-md-5 text-center blue-header">Кабінети та лабораторії циклової комісії</p>
           </div>
            <div class="col-1"></div>
        </div>
        <div class="col-12 p-0 px-4 d-block text-center">
            <p class="basic-text-bold text-center" >забезпечені відповідними приладами та лабораторними стендами
                по вивченню дисциплін і проведенню лабораторних і практичних робіт
                та для проведення електрорадіовимірювальної практики.</p>
            <p class="basic-text-bold">Compas 3D, Arduino, Multisim,  Electronic Workbench, "Proteus", Altium Designer, SprintLayout, Micro-Cap, AVR Studio</p>
            <p class="text-center basic-text-bold">та ін</p>
            <p class="basic-text-bold text-center py-2 py-md-5">Практичне застосування сучасних методів проектування студенти мають можливість вдосконалювати працюючи на 3D принтері. </p>
            <div class="col-12 d-flex">
            <div class="col-2 d-none d-md-flex"></div>
                <div class="col-12 col-md-8  d-flex">
                    <img class="w-100" src="{{ $content[9]->text }}">
                </div>
                <div class="col-2 d-none d-md-flex"></div>
            </div>
            <p class="basic-text-bold text-center py-2 py-md-5" >Студенти також самостійно створюють програми для мікроконтролерів, завдяки яким 3D моделі рухаються. </p>
            <div class="col-12 d-flex py-3 py-md-5">
                <div class="col-2 d-none d-md-flex"></div>
                <div class="col-12 col-md-8  d-flex">
                    <img class="w-100" src="{{ $content[10]->text }}">
                </div>
                <div class="col-2 d-none d-md-flex"></div>
            </div>
            <p class="basic-text py-3 py-md-5">"Всеукраїнське методичне об’єднання викладачів радіотехнічних дисциплін" </p>
        </div>
    </div>
    
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
</div>

@endsection