@extends('layouts.admin_layout')

@section('title', 'Редактор сторінки: Домашня')

@section('home', 'Домашня')
@section('contact', 'Контакти')
@section('about', 'Про нас')
@section('base', 'Мат. база')
@section('abiturientu', 'Абітурієнту')
@section('students', 'Студенту')
@section('news', 'Новини')
@section('title-menu', 'Адмін-панель')

@section('content')
<link href="css/welcome_admin.css" rel="stylesheet">

<!-- include editor tiny -->
<script src="https://cdn.tiny.cloud/1/i4jartckvb9dpzqmqukjtexck4q7guma9z6ip130qk1h1efo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
        </div>
        <!-- massege window -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4><i class="icon fa fa-check"> </i>{{ session('success') }}</h4>
            </div>
        @endif
      </div>
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактор сторінки: Домашня</h3>
        </div>      
              <!-- form start -->
        <form action="{{ route('welcome.update', $text[0]->id) }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <button id="test"  type="submit"  class="popup_selector btn btn-primary" data-inputid="feature_image0">Вибрати фото 1 на слайдер</button>
                    <input type="text" name="img_0" class="form-control mt-2" id="feature_image0" name="feature_image" value="{{ $text[4]->text }}" readonly>
                    <img id="img0" src="{{ $text[4]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" onClick='img1()' class="popup_selector btn btn-primary" data-inputid="feature_image1">Вибрати фото 2 на слайдер</button>
                    <input type="text" name="img_1" class="form-control mt-2" id="feature_image1" name="feature_image" value="{{ $text[5]->text }}" readonly>
                    <img id="img1" src="{{ $text[5]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">                
                </div>
                
                <div class="form-group">
                    <button type="submit" onClick='img2()' class="popup_selector btn btn-primary" data-inputid="feature_image2">Вибрати фото 3 на слайдер</button>
                    <input type="text" name="img_2" class="form-control mt-2" id="feature_image2" name="feature_image" value="{{ $text[6]->text }}" readonly>
                    <img id="img2" src="{{ $text[6]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <label for="">Заголовок тексту на слайдері</label>
                    <input value="{{ $text[0]->text }}" type="text" name="text_0" class="form-control" id="" required>
                </div>

                <div class="form-group">
                    <label for="">Під заголовок на слайдері</label>
                    <input value="{{ $text[1]->text }}" type="text" name="text_1" class="form-control" id="" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image3">Вибрати фото над слайдером</button>
                    <input type="text" name="img_3" class="form-control mt-2" id="feature_image3" name="feature_image" value="{{ $text[7]->text }}" readonly>
                    <img id='img3' src="{{ $text[7]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <label for="">Заголовок</label>
                    <input value="{{ $text[2]->text }}" type="text" name="text_2" class="form-control" id="" required>
                </div>

                <div class="form-group">
                    <label for="">Під заголовок</label>
                    <textarea name="text_3" class="editor" style="height: 600px;">{{ $text[3]->text }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image4">Вибрати верхнє фото справа "про нас"</button>
                    <input type="text" name="img_4" class="form-control mt-2" id="feature_image4" name="feature_image" value="{{ $text[8]->text }}" readonly>
                    <img id='img4' src="{{ $text[8]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image5">Вибрати нижнє фото справа "про нас"</button>
                    <input type="text" name="img_5" class="form-control mt-2" id="feature_image5" name="feature_image" value="{{ $text[9]->text }}" readonly>
                    <img id='img5' src="{{ $text[9]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>




        <!-- <div class="col-12 d-none d-sm-flex p-0 my-3 galery-height">
            <div class="col-8 p-0 galery-height d-block">
              <div class="col-12 p-0 m-0 galery-left-upper d-flex">
                <div class="col-6 p-0 m-0">
                  <img src="image/jpg/orig/Gallery-img-1.jpg"></div>
                <div class="col-6 p-0 m-0"><img src="image/jpg/orig/Gallery-img-2.jpg"></div>
              </div>
              <div class="col-12 p-0 m-0 galery-left-bottom d-flex">
                <div class="col-7 p-0 m-0 d-block">
                  <div class="col-12 p-0 m-0 h-50"><img src="image/jpg/orig/Gallery-img-4.jpg"></div>
                  <div class="col-12 p-0 m-0 h-50"><img src="image/jpg/orig/Gallery-img-5.jpg"></div>
                </div>
                <div class="col-5 p-0 m-0"><img src="image/jpg/orig/Gallery-img-6.jpg"></div>
              </div>
              
            </div>
            <div class="col-4 p-0 d-block galery-height">
              <div class="col-12 p-0 galery-triple-block"> <img src="image/jpg/orig/Gallery-img-3.jpg"></div>
              <div class="col-12 p-0 galery-triple-block"> <img src="image/jpg/orig/Gallery-img-7.jpg"></div>
              <div class="col-12 p-0 galery-triple-block"> <img src="image/jpg/orig/Gallery-img-8.jpg"></div>
            </div> 
        </div> -->


<div class="cssSlider col-12">
    <div class="col-12 d-block d-md-flex">
        <div class="col-12 col-md-4">
            <img src="https://images.unsplash.com/photo-1483653364400-eedcfb9f1f88?auto=format&fit=crop&w=840&q=60" class="w-100">
        </div>
        <div class="col-12 col-md-4">
        <img src="https://images.unsplash.com/photo-1483653364400-eedcfb9f1f88?auto=format&fit=crop&w=840&q=60" class="w-100">
        </div>
        <div class="col-12 col-md-4">
        <img src="https://images.unsplash.com/photo-1483653364400-eedcfb9f1f88?auto=format&fit=crop&w=840&q=60" class="w-100">
        </div>
</div>
<div class="col-12 d-block d-md-flex">

        <div class="col-12 col-md-4">
        </div>
        <div class="col-12 col-md-4">
        </div>
        <div class="col-12 col-md-4">
        </div>

</div>
    <!-- <ul class="slides">
        <li id="slide1"><img src="https://images.unsplash.com/photo-1483653364400-eedcfb9f1f88?auto=format&fit=crop&w=840&q=60" alt="" /></li>
        <li id="slide2"><img src="https://images.unsplash.com/photo-1433256392503-913cee5877e3?auto=format&fit=crop&w=840&q=60" alt="" /></li>
        <li id="slide3"><img src="https://images.unsplash.com/photo-1483653085484-eb63c9f02547?auto=format&fit=crop&w=840&q=60" alt="" /></li>
        <li id="slide4"><img src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?auto=format&fit=crop&w=840&q=60" alt="" /></li>
        <li id="slide5"><img src="https://images.unsplash.com/photo-1453284441168-8780c9f52097?auto=format&fit=crop&w=840&q=60" alt="" /></li>
    </ul>
 -->   
        <!-- <li><a href="#slide1"><img src="https://images.unsplash.com/photo-1483653364400-eedcfb9f1f88?auto=format&fit=crop&w=840&q=60" /></a></li>
        <li><a href="#slide2"><img src="https://images.unsplash.com/photo-1433256392503-913cee5877e3?auto=format&fit=crop&w=840&q=60" /></a></li>
        <li><a href="#slide3"><img src="https://images.unsplash.com/photo-1483653085484-eb63c9f02547?auto=format&fit=crop&w=840&q=60" /></a></li>
        <li><a href="#slide4"><img src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?auto=format&fit=crop&w=840&q=60" /></a></li>
        <li><a href="#slide5"><img src="https://images.unsplash.com/photo-1453284441168-8780c9f52097?auto=format&fit=crop&w=840&q=60" /></a></li> -->
    
</div>






                <!-- <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image6">Вибрати фото 1 на галерею</button>
                    <input type="hidden" name="img_6" class="form-control mt-2" id="feature_image6" name="feature_image" value="{{ $text[10]->text }}" readonly>
                    <a href="" class="popup_selector" data-inputid="feature_image6"><img id='img6' src="{{ $text[10]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;"></a>
                </div> -->

















                <!-- <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image7">Вибрати фото 2 на галерею</button>
                    <input type="text" name="img_7" class="form-control mt-2" id="feature_image7" name="feature_image" value="{{ $text[11]->text }}" readonly>
                    <img id='img7' src="{{ $text[11]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image8">Вибрати фото 3 на галерею</button>
                    <input type="text" name="img_8" class="form-control mt-2" id="feature_image8" name="feature_image" value="{{ $text[12]->text }}" readonly>
                    <img id='img8' src="{{ $text[12]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image9">Вибрати фото 4 на галерею</button>
                    <input type="text" name="img_9" class="form-control mt-2" id="feature_image9" name="feature_image" value="{{ $text[13]->text }}" readonly>
                    <img id='img9' src="{{ $text[13]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image10">Вибрати фото 5 на галерею</button>
                    <input type="text" name="img_10" class="form-control mt-2" id="feature_image10" name="feature_image" value="{{ $text[14]->text }}" readonly>
                    <img id='img10' src="{{ $text[14]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image11">Вибрати фото 6 на галерею</button>
                    <input type="text" name="img_11" class="form-control mt-2" id="feature_image11" name="feature_image" value="{{ $text[15]->text }}" readonly>
                    <img id='img11' src="{{ $text[15]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image12">Вибрати фото 7 на галерею</button>
                    <input type="text" name="img_12" class="form-control mt-2" id="feature_image12" name="feature_image" value="{{ $text[16]->text }}" readonly>
                    <img id='img12' src="{{ $text[16]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image13">Вибрати фото 8 на галерею</button>
                    <input type="text" name="img_13" class="form-control mt-2" id="feature_image13" name="feature_image" value="{{ $text[17]->text }}" readonly>
                    <img id='img13' src="{{ $text[17]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div> -->







            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Зберегтии зміни</button>
            </div>
        </form>
        <!-- form end -->

    </div>

    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: '{{ Auth::user()->name }}',
        });

        // check if you use more one elfinder input
        check_multi_elfider_input = 1;
    </script>
        
    </div>
</section>
@endsection