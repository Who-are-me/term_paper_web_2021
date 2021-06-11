@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Головна')

@section('content')
<link href="css/welcome_admin.css" rel="stylesheet">

<link href="css/pages.css" rel="stylesheet">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ $content[0]->text }}" alt="First slide" style="object-fit: cover; height: 450px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ $content[1]->text }}" alt="Second slide" style="object-fit: cover; height: 450px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ $content[2]->text }}" alt="Third slide" style="object-fit: cover; height: 450px;">
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
    
    
<div class="row d-flex m-0 p-0 content-background-main">
  <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
  <div class="col-12 col-md-10 col-lg-8 my-2 text-center text-sm-left px-5 px-md-0">


    
    <div class="row col-12 my-4 justify-content-between m-0 p-0">
      <div class="col-12 my-3 d-block d-md-flex px-0">
        <div class="row col-12 col-md-7 p-0 pr-md-3 m-0">
          <div class="d-flex col-12 justify-content-between px-0 align-middle" id="container-heading">
            <img src="image/left-heading-separate.svg">
            <p><span id="green-span-heading">ПРО НАС</span></p>
            

            <img src="image/right-heading-separate.svg">
          </div>
          <div class="col-12 text-center my-1 my-sm-4">
            <span id="black-span-heading">{{ $content[3]->text }}</span>
          </div>
          <div class="col-12 text-center">
            <span class="basic-text">{{ $content[4]->text }}</span>
          </div>
          <div class="col-12 my-1 my-sm-4 text-center">
            <a href="#" id="content-span-link">Читати більше</a> 
          </div>
        </div>
        <div class="col-12 col-md-5 p-0 m-0 d-block text-center">
          <img class="w-100" src="{{ $content[5]->text }}">
          <img class="w-100  pt-2" src="{{ $content[6]->text }}">
        </div>
      </div>
    </div>
    <div class="col-12 my-5 p-0">
      <div class="d-flex col-12 justify-content-between p-0 m-0" id="container-heading">
        <img src="image/left-heading-separate.svg">
        <span id="green-span-heading">НАША МІСІЯ</span>
        <img src="image/right-heading-separate.svg">
      </div>
      <div class="col-12 text-center my-4">
        <span id="black-span-heading">Основні напрямки роботи комісії</span>
      </div>
      <div class="row col-12 pt-3 m-0 justify-content-between text-center p-0">
        <div class="col-12 col-sm-6 col-xl-3 px-3 pt-3 m-0 text-center hover-triger-green">
          <img src="image/knowledge.svg" class="image-svg-hover-triger">
          <p class="pt-3 basic-text">Вивчення і підвищення рівня знань, умінь та навичок студентів</p>
        </div>
        <div class="col-12 col-sm-6 col-xl-3 px-3 pt-3 m-0 text-center hover-triger-green">
          <img src="image/teaching.svg" class="image-svg-hover-triger">
          <p class="pt-3 basic-text">Розробка та впровадження заходів з вдосконалення методики викладання</p>
        </div>
        <div class="col-12 col-sm-6 col-xl-3 px-3 pt-3 m-0 text-center hover-triger-green">
          <img src="image/learning.svg" class="image-svg-hover-triger">
          <p class="pt-3 basic-text">Підвищення професійного рівня викладачів циклової комісії</p>
        </div>
        <div class="col-12 col-sm-6 col-xl-3 px-3 pt-3 m-0 text-center hover-triger-green">
          <img src="image/direction.svg" class="image-svg-hover-triger">
          <p class="pt-3 basic-text">Профорієнтаційна робота</p>
        </div>
      </div>
    </div>
    <div class="d-flex col-12 justify-content-between p-0 m-0" id="container-heading">
      <img src="image/left-heading-separate.svg">
      <span id="green-span-heading">ЧАСТИНКА НАШОГО ЖИТТЯ</span>
      <img src="image/right-heading-separate.svg">
    </div>
    <div class="cssSlider">
      <ul class="slides">
          <li id="slide1"><img src="{{ $content[7]->text }}" alt=""></li>
          <li id="slide2"><img src="{{ $content[8]->text }}" alt=""></li>
          <li id="slide3"><img src="{{ $content[9]->text }}" alt=""></li>
          <li id="slide4"><img src="{{ $content[10]->text }}" alt=""></li>
          <li id="slide5"><img src="{{ $content[11]->text }}" alt=""></li>
      </ul>
      <ul class="thumbnails">
          <li><a href="#slide1"><img src="{{ $content[7]->text }}"></a></li>
          <li><a href="#slide2"><img src="{{ $content[8]->text }}"></a></li>
          <li><a href="#slide3"><img src="{{ $content[9]->text }}"></a></li>
          <li><a href="#slide4"><img src="{{ $content[10]->text }}"></a></li>
          <li><a href="#slide5"><img src="{{ $content[11]->text }}"></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>

@endsection