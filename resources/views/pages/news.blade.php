@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Новини')

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

<?php
    // $doc = new DOMDocument();
    // $doc->loadHTML('<?xml encoding="utf-8" >' . "<html><body>Тест Української мови - йцукенгшщзхїфівапролджєячсмитьбю . , ʼ єЄЇҐґ<br></body></html>");

    // echo $doc->saveHTML();
?>


                @foreach ($news as $item)

                
                    <div class="news-block">
                        <form action="" class="">
                            <span class="news-title ">{{ $item->title }}</span>
                            <div class="news-background row">
                                <img class="img_previe" src="{{ $item->img }}" alt="">
                                <div class="col">
                                    <span>
                                        <div>                                   
                                            <?php
                                                $short_text = substr($item->text, 0, 600);
                                                $short_text = str_replace("[", "<", $short_text);
                                                $short_text = str_replace("]", ">", $short_text);
                                                $short_text = strip_tags($short_text);
                                                $short_text = rtrim($short_text, "!,.-");
                                                $short_text = substr($short_text, 0, strrpos($short_text, ' '))."...";
                                                $short_text = nl2br($short_text);

                                                //echo $short_text;

                                                $doc = new DOMDocument();
                                                $doc->loadHTML('<?xml encoding="utf-8" ?>' . $short_text . "<a href='#' class=''>  Читати далі >></a>" );

                                                echo $doc->saveHTML();

                                            ?>
                                        </div>       
                                    </span>                                  
                                </div>
                            </div>
                        </form>
                    </div>

                @endforeach  




                    <!-- <div class="news-block">
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
                    </div> -->

                    

                    <div>
                        <p>{{ $news->render() }}</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>


@endsection