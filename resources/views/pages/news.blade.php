@extends('layouts.main_layout')

@section('title', 'Новини')

@section('content')

<div>
    <title>Новини</title>
</div>

<div>
    <div class="news">
        <div class="title">
            <div class="container">
                <div class="text-background">
                    <div class="title-text"><span>Новини</span></div>
                </div>
                <div class="news-slider"></div>
            </div>
        </div>
        <div class="content">
            <div class="content-background">
                <div class="container">


                    <div class="news-block">
                        <form action="" class="">
                            <span class="news-title ">Деякий текст ...</span>
                            <div class="news-background row">
                                <img src="/image/Gallery-img-3.jpg" alt="">
                                <div class="col">
                                    <span><h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia ...</h3></span>
                                    <a href="#" class="btn">Читати далі >></a>
                                </div>
                            </div>
                        </form>
                    </div>

                    
                    <div class="page-select">
                        <p>pagination</p>
                    </div>

                </div> 
            </div>
        </div>
       
    </div>

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
</div>

@endsection