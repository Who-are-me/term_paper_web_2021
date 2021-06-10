@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Новини')

@section('content')
<link href="css/pages.css" rel="stylesheet">

<div class="row d-flex m-0 p-0 title-news">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 text-center py-3 py-md-5 px-5 px-md-0">
        <div class="col-12 py-1 py-md-3 px-md-4  news-title-inside-cont text-left d-block d-lg-flex">
            <div class="col-12 col-lg-3 p-0" style="margin: auto;"><span>Новини</span></div>
            <div class="col-12 col-lg-9 p-0">
                <div class="col-12 p-0">
                <div class="slider-news">
                    <div><a><img src="../../image/arrow-up.png"></a><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, amet!</p></div>
                    <div><a><img src="../../image/Background-img-3.jpg"></a><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, amet!</p></div>
                    <div><a><img src="../../image/arrow-up.png"></a><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, amet!</p></div>
                    <div><a><img src="../../image/Background-img-3.jpg"></a><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, amet!</p></div>
                </div>
            </div>
            
            </div>
</div>
            

        </div>
    </div>
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
</div>

<div class="row d-flex m-0 py-3 content-background-news">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 py-3 py-md-2 px-5 px-md-0">


        @foreach ($news as $item)

            <div class="col-12 py-3 m-0 d-block news-container">
                <div class="col-12 text-center p-0 m-0 pb-2"><span>{{ $item->title }}</span></div>
                <div class="col-12 d-block d-md-flex news-content-container">
                    <div class="col-12 col-md-5 p-2 m-0"><img class="w-100" src="{{ $item->img }}"></div>
                    <div class="col-12 col-md-7 p-2 m-0 d-block">
                        <div class="col-12 m-0 p-3"><span>

                            <?php
                                $short_text = substr($item->text, 0, 600);
                                $short_text = str_replace("[", "<", $short_text);
                                $short_text = str_replace("]", ">", $short_text);
                                $short_text = strip_tags($short_text);
                                $short_text = rtrim($short_text, "!,.-");
                                $short_text = substr($short_text, 0, strrpos($short_text, ' '))."...";
                                $short_text = nl2br($short_text);

                                // echo $short_text . "<a href='#' data-toggle="modal" data-target="#exampleModal">  Читати далі >></a>";

                                $doc = new DOMDocument();
                                $doc->loadHTML('<?xml encoding="utf-8" >' . $short_text . "<a href='' data-toggle='modal' data-target='#exampleModal" . $item->id . "'>  Читати далі >></a>" );

                                echo $doc->saveHTML();
                            ?>

                            </span></div>

                            <div class="modal fade" id="exampleModal<?php echo $item->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo $item->id; ?>" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel<?php echo $item->id; ?>"><?php echo $item->title; ?></h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $item->text ?>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                                    </div>
                                  </div>
                                </div>
                            </div>


                    </div>
                </div>
            </div>

        @endforeach

        <div>
            <p>{{ $news->render() }}</p>
        </div>

    </div>

    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
</div>

@endsection