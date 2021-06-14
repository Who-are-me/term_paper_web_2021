@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Головна')

@section('content')
<link href="css/welcome_admin.css" rel="stylesheet">

<link href="css/pages.css" rel="stylesheet">

<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" data-aos="zoom-out"   data-aos-duration="1000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ $content[0]->text }}" alt="First slide" style="object-fit: cover; height: 550px;">
      <div class="carousel-caption d-block title-slide">
        <span class="title-slide-text">ЦК Радіотехнічних Дисциплін</span>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ $content[1]->text }}" alt="Second slide" style="object-fit: cover; height: 550px;">
      <div class="carousel-caption d-block title-slide">
      <span class="title-slide-text">ЦК Радіотехнічних Дисциплін</span>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ $content[2]->text }}" alt="Third slide" style="object-fit: cover; height: 550px;">
      <div class="carousel-caption d-block title-slide">
      <span class="title-slide-text">ЦК Радіотехнічних Дисциплін</span>
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
    
    
<div class="row d-flex m-0 p-0 pt-5 content-background-main">
  <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
  <div class="col-12 col-md-10 col-lg-8 my-2 text-center text-sm-left px-5 px-md-0">


    
    <div class="row col-12 my-4 justify-content-between m-0 p-0">
      <div class="col-12 my-3 d-block d-md-flex px-0">
        <div class="row col-12 col-md-6 p-0 pr-md-3 m-0" data-aos="fade-down-right" data-aos-duration="1400">
          <div class="d-flex col-12 justify-content-between px-0 align-middle" id="container-heading">
            <img src="image/left-heading-separate.svg">
            <p><span id="green-span-heading">Про нас</span></p>
            <img src="image/right-heading-separate.svg">
          </div>
          <div class="col-12 text-center my-1 my-sm-4">
            <span id="black-span-heading"><?php echo $content[3]->text; ?></span>
          </div>
          <div class="col-12 text-center">
            <span class="basic-text"><?php echo $content[4]->text; ?></span>
          </div>
          <div class="col-12 my-1 my-sm-4 text-center">
            <a href="about_us" id="content-span-link">Читати більше</a> 
          </div>
        </div>
        <div class="col-12 col-md-6 p-0 m-0 d-block text-center" data-aos="fade-down-left" data-aos-duration="1400">
          <img class="w-100" src="{{ $content[5]->text }}" style="border-radius: 20px;">
          <img class="w-100  mt-3" src="{{ $content[6]->text }}" style="border-radius: 20px;">
        </div>
      </div>
    </div>
    <div class="col-12 my-5 pt-5 p-0" data-aos="zoom-out" data-aos-duration="1400">
      <div class="d-flex col-12 justify-content-between p-0 m-0" id="container-heading" >
        <img src="image/left-heading-separate.svg">
        <span id="green-span-heading">НАША МІСІЯ</span>
        <img src="image/right-heading-separate.svg">
      </div>
      <div class="col-12 text-center my-4" >
        <span id="black-span-heading">Основні напрямки роботи комісії</span>
      </div>
      <div class="row col-12 pt-3 m-0 justify-content-between text-center p-0">
        <div class="col-12 col-sm-6 col-xl-3 px-3 pt-3 m-0 text-center hover-triger-green" data-aos-duration="2000"  data-aos="fade-right" data-aos-delay="200">
          <img src="image/knowledge.svg" class="image-svg-hover-triger">
          <p class="pt-3 basic-text">Вивчення і підвищення рівня знань, умінь та навичок студентів</p>
        </div>
        <div class="col-12 col-sm-6 col-xl-3 px-3 pt-3 m-0 text-center hover-triger-green" data-aos-duration="2000"  data-aos="fade-right" data-aos-delay="600">
          <img src="image/teaching.svg" class="image-svg-hover-triger">
          <p class="pt-3 basic-text">Розробка та впровадження заходів з вдосконалення методики викладання</p>
        </div>
        <div class="col-12 col-sm-6 col-xl-3 px-3 pt-3 m-0 text-center hover-triger-green" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1000">
          <img src="image/learning.svg" class="image-svg-hover-triger">
          <p class="pt-3 basic-text">Підвищення професійного рівня викладачів циклової комісії</p>
        </div>
        <div class="col-12 col-sm-6 col-xl-3 px-3 pt-3 m-0 text-center hover-triger-green" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1400">
          <img src="image/direction.svg" class="image-svg-hover-triger">
          <p class="pt-3 basic-text">Профорієнтаційна робота</p>
        </div>
      </div>
    </div>
    <div class="d-flex col-12 justify-content-between p-0 m-0 pt-5" id="container-heading" data-aos="zoom-out" data-aos-duration="2000">
      <img src="image/left-heading-separate.svg">
      <span id="green-span-heading">ЧАСТИНКА НАШОГО ЖИТТЯ</span>
      <img src="image/right-heading-separate.svg">
    </div>

    <style>
      * {box-sizing: border-box;}
      body {
          margin: 0;
          font-family: Arial;
      }
      .column {
          float: left;
          width: 16.6667%;
          padding: 4px;
      }
      .column img {
          opacity: 0.7; 
          cursor: pointer; 
      }
      .column img:hover {
          opacity: 1;
      }
      .row:after {
          content: "";
          display: table;
          clear: both;
      }
      .container {
          position: relative;
          /*display: none;*/
      }
      #imgtext {
          position: absolute;
          bottom: 15px;
          left: 15px;
          color: white;
          font-size: 20px;
      }
      .closebtn {
          position: absolute;
          top: 10px;
          right: 15px;
          color: white;
          font-size: 35px;
          cursor: pointer;
      }
    </style>
    <div class="row pt-3">
      <div class="column" data-aos="flip-right" data-aos-duration="2000" data-aos-delay="300">
        <img src="{{ $content[7]->text }}" style="width:100%; border-radius: 10px;" onclick="myFunction(this);">
      </div>
      <div class="column" data-aos="flip-right" data-aos-duration="2000" data-aos-delay="600">
        <img src="{{ $content[8]->text }}" style="width:100%; border-radius: 10px;" onclick="myFunction(this);">
      </div>
      <div class="column" data-aos="flip-right" data-aos-duration="2000" data-aos-delay="900">
        <img src="{{ $content[9]->text }}" style="width:100%; border-radius: 10px;" onclick="myFunction(this);">
      </div>
      <div class="column" data-aos="flip-right" data-aos-duration="2000" data-aos-delay="1200">
        <img src="{{ $content[10]->text }}" style="width:100%; border-radius: 10px;" onclick="myFunction(this);">
      </div>
      <div class="column" data-aos="flip-right" data-aos-duration="2000" data-aos-delay="1500">
        <img src="{{ $content[11]->text }}" style="width:100%; border-radius: 10px;" onclick="myFunction(this);">
      </div>
      <div class="column" data-aos="flip-right" data-aos-duration="2000" data-aos-delay="1800">
        <img src="{{ $content[12]->text }}" style="width:100%; border-radius: 10px;" onclick="myFunction(this);">
      </div>
    </div>
    <div class="container pt-4 p-3 text-center" data-aos="zoom-in" data-aos-duration="3000">
      <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
      <img id="expandedImg" class="" src="{{ $content[7]->text }}" style="border-radius: 22px; width: 80%; ">
      <div id="imgtext"></div>
    </div>

    

    

    <script>
      function myFunction(imgs) {
          var expandImg = document.getElementById("expandedImg");
          expandImg.src = imgs.src;
          expandImg.parentElement.style.display = "block";
      }
    </script>

  </div>
  <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
</div>



@endsection