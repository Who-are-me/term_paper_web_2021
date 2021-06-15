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
<!-- <script src="https://cdn.tiny.cloud/1/i4jartckvb9dpzqmqukjtexck4q7guma9z6ip130qk1h1efo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
<script src="https://cdn.tiny.cloud/1/m47gt67428yknb2qm9ylmdr1knpk29spgevuzkil0wqe3xa5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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
            <h3 class="card-title">Редактор сторінки: Домашня (для вибору картинки, клацнути на ту, що бажаєте вибрати)</h3>
        </div>      
              <!-- form start -->
        <form action="{{ route('welcome.update', $text[0]->id) }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="card-body">

                <div class="cssSlider col-12">
                    <label class="card-title">Виберіть картинки слайдера</label><br><br>
                    <div class="col-12 d-block d-md-flex form-group">
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_0" id="feature_image0" name="feature_image" value="{{ $text[0]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image0"><img id="img0" class="img" src="{{ $text[0]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_1" id="feature_image1" name="feature_image" value="{{ $text[1]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image1"><img id="img1" class="img" src="{{ $text[1]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_2" id="feature_image2" name="feature_image" value="{{ $text[2]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image2"><img id="img2" class="img" src="{{ $text[2]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-4"></div>
                        <div class="col-12 col-md-4"></div>
                        <div class="col-12 col-md-4"></div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="">Заголовок тексту "Про нас"</label>
                    <input value="{{ $text[3]->text }}" type="text" name="text_0" class="form-control" id="" required>
                </div>

                <div class="form-group">
                    <label for="">Текст блоку "Про нас"</label>
                    <textarea name="text_1" class="editor" style="height: 600px;">{{ $text[4]->text }}</textarea>
                </div>


                <div class="cssSlider col-12">
                    <label class="card-title">Виберіть картинки справа від блоку "Про нас"</label><br><br>
                    <div class="col-12 d-block d-md-flex form-group">
                        <div class="col-12 col-md-6">
                            <input type="hidden" name="img_3" id="feature_image3" name="feature_image" value="{{ $text[5]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image3"><img id="img3" class="img" src="{{ $text[5]->text }}" class="w-100"></a>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="hidden" name="img_4" id="feature_image4" name="feature_image" value="{{ $text[6]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image4"><img id="img4" class="img" src="{{ $text[6]->text }}" class="w-100"></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-6"></div>
                        <div class="col-12 col-md-6"></div>
                    </div>
                </div>


                <div class="cssSlider col-12">
                    <label class="card-title">Виберіть картинки галереї</label><br><br>
                    <div class="col-12 d-block d-md-flex form-group">
                        <div class="col-12 col-md-2">
                            <input type="hidden" name="img_5" id="feature_image5" name="feature_image" value="{{ $text[7]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image5"><img id="img5" class="img" src="{{ $text[7]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-2">
                            <input type="hidden" name="img_6" id="feature_image6" name="feature_image" value="{{ $text[8]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image6"><img id="img6" class="img" src="{{ $text[8]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-2">
                            <input type="hidden" name="img_7" id="feature_image7" name="feature_image" value="{{ $text[9]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image7"><img id="img7" class="img" src="{{ $text[9]->text }}" class="w-100"></a>
                        </div>
                        <div class="col-12 col-md-2">
                            <input type="hidden" name="img_8" id="feature_image8" name="feature_image" value="{{ $text[10]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image8"><img id="img8" class="img" src="{{ $text[10]->text }}" class="w-100"></a>
                        </div>
                        <div class="col-12 col-md-2">
                            <input type="hidden" name="img_9" id="feature_image9" name="feature_image" value="{{ $text[11]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image9"><img id="img9" class="img" src="{{ $text[11]->text }}" class="w-100"></a>
                        </div>
                        <div class="col-12 col-md-2">
                            <input type="hidden" name="img_10" id="feature_image10" name="feature_image" value="{{ $text[12]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image10"><img id="img10" class="img" src="{{ $text[12]->text }}" class="w-100"></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-3"></div>
                        <div class="col-12 col-md-3"></div>
                        <div class="col-12 col-md-3"></div>
                        <div class="col-12 col-md-3"></div>
                        <div class="col-12 col-md-3"></div>
                        <div class="col-12 col-md-3"></div>
                    </div>
                </div>
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