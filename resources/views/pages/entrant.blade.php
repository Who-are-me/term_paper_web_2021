@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Студенту')

@section('content')
<link href="css/pages.css" rel="stylesheet">

<div class="row d-flex m-0 p-0 title-abiturient">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 text-center py-3 py-md-5 px-5 px-md-0">
        <div class="col-12 py-1 py-md-4 px-md-4 abitirientu-title-inside-cont text-center">
            <span>Абітурієнту</span>
        </div>

    </div>
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
</div>

<div class="row d-flex m-0 p-0 content-background px-5 px-md-0">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 p-0 m-0">
        <div class="d-flex col-12 justify-content-between p-0 m-0 py-5" id="container-heading"><img
                src="image/left-salad-heading-separate.svg"> 

            <span class="salad-span-heading">ВСТУП</span>

            <img src="image/right-salad-heading-separate.svg">
        </div>

        <div class="col-12 p-0 py-5 d-none">
            Слайдер
        </div>
        <div class="col-12 p-0 m-0 d-flex text-center">
            <div class="col-1"></div>
            <div class="col-10 p-0">
                <p class="basic-text">
                    На відміну від «вузьких» фахівців спеціальностей <span class="basic-text-bold">«Інженерія
                        програмного забезпечення», «Комп’ютерні науки», «Комп’ютерна інженерія»,
                        «Кібербезпека»</span> та інш их, випускники спеціалізації <span
                        class="basic-text-bold">«Телекомунікаційні системи та мережі»</span> володіють комплексними
                    теоретичними знаннями та практичними навичками щодо:
                </p>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="col-12 p-0 pt-5 d-block">
            <div class="col-12 p-0 d-block">
                <div class="col-12 p-0 d-flex">
                    <div class="col-6 p-0">
                        <img class="w-100" src="image/jpg/abiturientu-1.png">
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="col-12 p-0 d-flex">
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="picture-caption-italic">
                        Програмування телекомунікаційних пристроїв;
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="col-12 p-0 d-block">
            <div class="col-12 p-0 d-block">
                <div class="col-12 p-0 d-flex">
                    <div class="col-4"></div>
                    <div class="col-6"><img class="w-100" src="image/jpg/abiturientu-2.png"></div>
                    <div class="col-2"></div>

                </div>
                <div class="col-6"></div>
            </div>
            <div class="col-12 p-0 d-flex">
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="picture-caption-italic">
                        Проектування, практичного розгортання та експлуатації не окремого обладнання, а сучасних
                        комп’ютерних конвергентних мереж у цілому;
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="col-12 p-0 d-block">
            <div class="col-12 p-0 d-block">
                <div class="col-12 p-0 d-flex">
                    <div class="col-2"></div>
                    <div class="col-6"><img class="w-100" src="image/jpg/abiturientu-3.png"></div>
                    <div class="col-4"></div>

                </div>
                <div class="col-6"></div>
            </div>
            <div class="col-12 p-0 d-flex">
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="picture-caption-italic">
                        Налаштування протоколів динамічної маршрутизації і процесів передачі з’єднання абонентів між
                        різними видами мереж;
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="col-12 p-0 d-block pb-5">
            <div class="col-12 p-0 d-block">
                <div class="col-12 p-0 d-flex">
                    <div class="col-5"></div>
                    <div class="col-6"><img class="w-100" src="image/jpg/abiturientu-4.png"></div>
                    <div class="col-1"> </div>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="col-12 p-0 d-flex">
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="picture-caption-italic">
                        Захисту інформації та обладнання від несанкціонованого доступу, а також організації і
                        управління сумісним функціонуванням різноманітного телекомунікаційного обладнання відомих
                        світових вендорів в єдиній мережі.
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="col-12 p-0 pt-5">
            <p class="basic-text-bold">
                Тому якісна підготовка випускників кафедри у відповідності до вимог провідних виробників
                телекомунікаційного обладнання та програмного забезпечення дозволяє їм по завершенні навчання
                працювати на посадах:
            </p>
        </div>
        <div class="col-12 d-flex p-0">
            <div class="col-1"></div>
            <div class="col-10">
                <p class="basic-text text-italic pt-2">
                    -інженера інформаційно-телекомунікаційних систем,
                </p>
                <p class="basic-text text-italic py-2">
                    -фахівця з проектування та підтримки інформаційних систем та технологій,
                </p>
                <p class="basic-text text-italic pb-2">
                    -системного адміністратора,
                </p>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="col-12 p-0 pb-5">
            <p class="basic-text-bold">
                та багатьох інших посадах в установах і організаціях галузі телекомунікацій та сфери інформаційних
                технологій, які і в умовах світової кризи продовжують залишатися найбільш прибутковими.
            </p>
        </div>
        <div class="col-12 p-0 pt-5 d-block">
            <div class="col-12 p-0 text-center d-flex">
                <div class="col-2"></div>
                <div class="col-8">
                    <P class="basic-text-bold">
                        Основним завданням для популяризації спеціальності «Телекомунікації та радіотехніка» були
                        розроблені сторінки у найпопулярніших соціальних мережах ,
                    </P>
                </div>
                <div class="col-2"></div>

            </div>
            <div class="col-12 p-0"><img class="w-100" src="image/jpg/abiturientu-5.png"> </div>
            <div class="col-12 d-flex">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <p class="basic-text-bold">а учні шкіл запрошуються в наш навчальний заклад для участі у
                        майстер-класах та ознайомлення із майбутнім фахом.</p>
                </div>
            </div>
            <div class="col-12 d-block p-0">
                <div class="col-12 d-flex p-0">
                    <div class="col-6 p-0">
                        <img class="w-100" src="image/jpg/abiturientu-6(1).png">
                    </div>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-3"></div>
                    <div class="col-6 p-0">
                        <img class="w-100" src="image/jpg/abiturientu-6(2).png">
                    </div>
                </div>
                <div class="col-12 d-flex p-0">
                    <div class="col-6"></div>
                    <div class="col-6 p-0">
                        <img class="w-100" src="image/jpg/abiturientu-6(3).png">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex col-12 p-0 m-0">
            <span class="salad-second-span-heading">Студент повинен вміти:</span>
        </div>
        <div class="col-12 p-0 d-block">
            <div class="col-12 text-center d-none">Тут відео з ютубу</div>
            <div class="col-12 p-0 px-5 text-left py-4">
                <p class="picture-caption-italic px-2">• Вміння конструювати, експлуатувати, досліджувати,
                    ремонтувати найрізноманітнішу радіоелектронну апаратуру широкого функціонального призначення;
                </p>
                <p class="picture-caption-italic px-2">• Знання сучасних технологій виробництва радіоелектронної
                    апаратури і приладів;</p>
                <p class="picture-caption-italic px-2">• Володіння комп’ютерними технологіями і САПР, використання
                    сучасної комп’ютерної техніки в інженерній діяльності;</p>
                <p class="picture-caption-italic px-2">• Обізнаність із сучасними технологіями в галузі сучасного
                    радіозв’язку та телекомунікації;</p>
                <p class="picture-caption-italic px-2">• Знання сучасних економічних процесів в народному
                    господарстві, вміння орієнтуватись в ринковому просторі і підвищувати ефективність інженерної
                    діяльності;</p>
                <p class="picture-caption-italic px-2">• Володіння навиками раціоналізаторства та винахідництва;</p>
                <p class="picture-caption-italic px-2">• Здатність працювати у різних галузях народного
                    господарства.</p>
            </div>
        </div>
        <div class="d-flex col-12 justify-content-between py-5 m-0" id="container-heading">
            <img src="image/left-salad-heading-separate.svg">
            <span class="salad-span-heading">МІСЦЕ РОБОТИ</span>

            <img src="image/right-salad-heading-separate.svg">
        </div>
        <div class="col-12 p-0 d-flex py-5">
            <div class="col-2 d-none d-sm-flex"></div>
            <div class="col-12 col-sm-8 text-center">
                <p class="salad-second-span-heading">Можливі місця роботи після закінчення коледжу:</p>
            </div>
        </div>
        <div class="col-12 p-0">
            <p>
                <span class="basic-text-bold letter-spacing">
                    ➢ В органах служби безпеки
                </span>
                <br>
                <span class="lite-text">(охоронна сигналізація та системи відеоспостереження); </span>
            </p>
            <p>
                <span class="basic-text-bold letter-spacing">
                    ➢ В банківських установах
                </span>
                <br>
                <span class="lite-text">(охоронна сигналізація, системи відеоспостереження, радіо та телефонного
                    зв'язку);</span>
            </p>
            <p>
                <span class="basic-text-bold letter-spacing">
                    ➢ Сервісні центри
                </span>
                <br>
                <span class="lite-text">по обслуговуванню та ремонту радіотелевізійної апаратури;</span>
            </p>
            <p>
                <span class="basic-text-bold letter-spacing">
                    ➢ На телерадіоцентрах
                </span>
                <br>
                <span class="lite-text">(технік з обслуговування радіо та відео апаратури, відеооператор і
                    т.д.);</span>
            </p>
            <p>
                <span class="basic-text-bold letter-spacing">
                    ➢ Сервісні центри
                </span>
                <br>
                <span class="lite-text">по обслуговуванню та ремонту радіотелевізійної апаратури;</span>
            </p>
            <p>
                <span class="basic-text-bold letter-spacing">
                    ➢ Сервісні центри
                </span>
                <br>
                <span class="lite-text">по ремонту мобільних телефонів, ноутбуків та і т. ін. </span>
            </p>
            <p>
                <span class="basic-text-bold letter-spacing">
                    ➢ Консультанти
                </span>
                <br>
                <span class="lite-text">з продажу радіоелектронної техніки
                    (супермаркети та магазини з продажу електронної апаратури);</span>
            </p>
            <p>
                <span class="basic-text-bold letter-spacing">
                    ➢ Рекламні агенства
                </span>
                <br>
                <span class="lite-text">по виготовленню світлової, аудіо та відеореклами;</span>
            </p>
            <p>
                <span class="basic-text-bold letter-spacing">
                    ➢ Сервісні центри
                </span>
                <br>
                <span class="lite-text">по обслуговуванню та ремонту медичної техніки;</span>
            </p>
        </div>
        <div class="col-12 p-0 text-center py-5 d-none">
            Слайдер
        </div>
        <div class="col-12 p-0 py-5 text-center">
            Анкета
        </div>
    </div>

    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
</div>

@if (session('success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-check"> </i>{{ session('success') }}</h4>
    </div>
@endif

<div class="">
	<form name="" action="{{ url('/feedbackstore') }}" method="post">
		@csrf
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- элемент для вывода ошибок -->
		<div class="text-danger" id="recaptchaError"></div>

		<?php
			if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
			  $secret = '6LdqluEaAAAAANpYxhvTRrgvadAK0kYHxfhfpuHd';
			  $ip = $_SERVER['REMOTE_ADDR'];
			  $response = $_POST['g-recaptcha-response'];
			  $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
			  $arr = json_decode($rsp, TRUE);
			  if ($arr['success']) {
			    
			  }
			}
		?>

		<div class="" >Анкета вступника</div>
		<div class="" >Заповніть анкету та отримайте персональну консультацію від завідуючого кафедрою</div>

		<div class="">
			<div class="">Контактна інформація</div>
			<div class="">Ми  зв`яжемось з Вами зручним для Вас способом:</div>
			
			<div class="">
				<input id="phone" type="text" name="phone" class=" " placeholder="Телефон" required="" maxlength="10"> 
			</div>	

			<div class="">
				<input id="email" type="text" name="email" class="" placeholder="E-mail" required=""> 
			</div>						

			<div class="">Освіта</div>
			<div class="">Вкажіть де Ви навчались\навчаєтесь</div>

			<div class="">
				<input id="school" type="text" name="school" class="" placeholder="Назва навчального закладу"> 
			</div>	

			<div class="">
				<select name="">
					<option value="0" selected="selected">(test) Рік закінчення навчання</option>
					<option value="2017">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2025">2026</option>
					<option value="2025">2027</option>
					<option value="2025">2028</option>
					<option value="2025">2029</option>
					<option value="2025">2030</option>
				</select> 
			</div>
		</div>

		<div class="">
			<div class="">Розкажіть про себе</div>
			<div class="">Давайте знайомитись</div>	

			<div class="">
				<input id="pip" type="text" name="pip" class="" placeholder="ПІП" required=""> <br>
			</div>	
			
			<div class="">
				<input id="option" type="text" name="option" class="" placeholder="Звідки Ви дізнались про університет (необов`язково)"> 
			</div>

			<div class="">	
				<input type="submit" class="" name="" style="" value="Отримати консультацію">
			</div>	
		</div>

		<div class="g-recaptcha" data-sitekey="6LdqluEaAAAAALggPkMFwEvJeGiBT57rLlSk5fue"></div>
	</form>
</div>
@endsection