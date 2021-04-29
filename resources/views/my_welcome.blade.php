<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../test_on_my_welcome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <title>ЦК Електронних апаратів</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light" id="nav">
        <a class="navbar-brand" href="#">ЦК Електронних апаратів</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MainNavCollapseTarget" aria-controls="MainNavCollapseTarget" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="MainNavCollapseTarget">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Про циклову</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Матеріальна база</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Абітурієнту</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Студенту</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Новини</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Зворотній звязок   </a>
            </li>

            <!-- add vasya -->
            <li class="nav-item">
            @if (Route::has('login'))
                <div class="nav-link">
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                    @else                      
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </li>

          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="col-12">
          <div class="content">
           
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>