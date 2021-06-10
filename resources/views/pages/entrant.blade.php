@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Абітурієнту')

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

        <div class="col-12 p-3">
            <div class="slider">
                <div><img src="{{ $content[0]->text }}" ></div>
                <div><img src="{{ $content[1]->text }}" ></div>
                <div><img src="{{ $content[2]->text }}" ></div>
                <div><img src="{{ $content[3]->text }}" ></div>
                <div><img src="{{ $content[4]->text }}" ></div>
                <div><img src="{{ $content[5]->text }}" ></div>
            </div>
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
            <div class="col-12 p-0"><img class="w-100" src="{{ $content[6]->text }}"> </div>
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
            <div class="col-12 d-block p-0">
                <div class="col-12 d-flex p-0">
                    <div class="col-3">ВІДЕО</div>
                    <div class="col-6 p-0">
                        <?php echo $content[7]->text; ?>
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



        <div class="col-12 p-0 py-5"> 
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../../../image/abiturientu-anketa-header.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>1аголовок</h5>
                        <p>Опис</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../../image/abiturientu-anketa-header.png" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>2Заголовок</h5>
                        <p>Опис</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../../image/abiturientu-anketa-header.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>3Заголовок</h5>
                        <p>Опис</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../../image/abiturientu-anketa-header.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>4Заголовок</h5>
                        <p>Опис</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../../image/abiturientu-anketa-header.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Заголовок</h5>
                        <p>Опис</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../../image/abiturientu-anketa-header.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Заголовок</h5>
                        <p>Опис</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../../image/abiturientu-anketa-header.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Заголовок</h5>
                        <p>Опис</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../../image/abiturientu-anketa-header.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Заголовок</h5>
                        <p>Опис</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../../image/abiturientu-anketa-header.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Заголовок</h5>
                        <p>Опис</p>
                      </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>




        <div class="col-12 p-0 text-center py-5 d-none">
            Слайдер
        </div>

		@if (session('success'))
		    <div class="alert alert-success" role="alert">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
		        <h4><i class="icon fa fa-check"> </i>{{ session('success') }}</h4>
		    </div>
		@endif

        <div class="col-12 p-0 py-2 text-center anketa-container mb-5">

	        <div class="anketa-header p-0">
	            <img src="image/abiturientu-anketa-header.png" class="w-100">
	        </div>

            <div class="col-12 px-3 py-3">
                <div class="col-12 anketa-content p-1">

                    <div class="col-12 p-0 m-0 text-center">
                        <p class="anketa-green-header-font m-0 p-2">Анкета вступника</p>
                        <p class="anketa-basic-font">Заповніть анкету та отримайте персональну консультацію від завідуючого кафедрою</p>
                    </div>

                    <form name="" action="{{ url('/feedbackstore') }}" method="post">
                    	@csrf
		
						<script src='https://www.google.com/recaptcha/api.js'></script>

						<div class="text-danger" id="recaptchaError"></div>
                    	<div class="col-12 d-block d-lg-flex text-left p-0">

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

		                    <div class="col-12 col-lg-6 p-0 px-3">
		                        <p class="anketa-green-header-font m-0 py-2">Контактна інформація</p>
		                        <p class="anketa-basic-font pb-1 m-0">Ми зв`яжемось з Вами зручним для Вас способом:</p>
		                    </div>

		                    <div class="col-12 col-lg-6 p-0 px-3">
		                        <p class="anketa-green-header-font m-0 py-2">Розкажіть про себе</p>
		                        <p class="anketa-basic-font pb-1 m-0">Давайте знайомитись</p>
		                    </div>

                		</div>
		                <div class="col-12 d-block d-lg-flex text-left p-0 pt-2">

		                    <div class="col-12 col-lg-6 p-0 px-3">
		                        <input id="phone" type="text" name="phone" required="" class="anketa-input" placeholder="*Телефон" maxlength="10" minlength="10" >
	                            <input id="email" type="text" name="email" required="" class="anketa-input mt-3" placeholder="*E-mail" maxlength="255">
	                            <p class="anketa-green-header-font m-0 py-3">Освіта</p>
	                            <p class="anketa-basic-font pb-1">Вкажіть де Ви навчались\навчаєтесь</p>
	                            <input id="school" type="text" name="school" required="" class="anketa-input mb-2" placeholder="Назва навчального закладу" maxlength="255">    
		                    </div>

		                    <div class="col-12 col-lg-6 p-0 px-3">
		                        <input id="pip" type="text" name="pip" class="anketa-input mb-2" placeholder="*ПІП" required="" maxlength="255">    
		                        <input type="text" name="option" required="" class="anketa-input mt-xl-3" placeholder="Звідки ви дізнались про університет" maxlength="255">
		                        <div class="pt-5 g-recaptcha" data-sitekey="6LdqluEaAAAAALggPkMFwEvJeGiBT57rLlSk5fue" ></div>
		                    </div>

		                </div>
			            <div class="col-12 p-0 py-2 d-flex">
			                <div class="col-xl-3 col-md-2 d-none d-md-flex"></div>

			                <div class="col-xl-6 col-md-8 col-12 p-0 ">
			                    <input type="submit" class="" name="" value="Отримати консультацію">
			                </div>

			                <div class="col-xl-3 col-md-2 d-none d-md-flex"></div>
			            </div>
		            </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>

</div>

@endsection