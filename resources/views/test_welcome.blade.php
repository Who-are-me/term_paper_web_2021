<!doctype html>
<html>

<?php
    // header('Location: /register'); 
    // exit;
?>

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
  <link rel="stylesheet" href="css/additional_styles.css">
  <title>заглушка</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row align-items-center" id="top-nav">
      <div class="col-2 ml-5" id="telephone-num">
       <img src="/image/telephone.svg"> <span>8-800-555-35-35</span>
      </div>
      <div class="col-1"></div>
      <div class="col-2">
        <img src="/image/mail.svg"><span>tktdtu@gmail.com</span>
      </div>
      <div class="col-5"></div>
      <div class="col-1">
        <img src="/image/Ukraine_icon.svg">
        <span>UA</span>
        <img src="/image/Language-arrow.svg" alt="arrow" height="15" width="15">
      </div>
    </div>
  </div>
  <div class="nav"> </div>
  <nav class="navbar navbar-expand-lg " id="nav" role="navigation">
    <a class="navbar-brand" href="backend"><img src="/image/Logo.svg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MainNavCollapseTarget"
      aria-controls="MainNavCollapseTarget" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="MainNavCollapseTarget">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/test">test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tidings">Новини</a>
        </li>

        <form method="POST" action="{{ route('register') }}">
         @csrf

          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                {{ __('Registers') }}
              </button>
            </div>
          </div>
        </form>               

      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="col-12 m-0 p-0">
      <img src="/files/480538.png" class="img-fluid" alt="Responsive image">
    </div>
  </div>


</body>

</html>