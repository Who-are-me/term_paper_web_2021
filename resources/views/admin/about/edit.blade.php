@extends('layouts.admin_layout')

@section('title', 'Редактор сторінки: Про циклову')

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
            <h3 class="card-title">Редактор сторінки: Про циклову (для вибору картинки, клацнути на ту, що бажаєте вибрати)</h3>
        </div>      
              <!-- form start -->
        <form action="{{ route('about.update', $content[0]->id) }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="card-body">

                <div class="cssSlider col-12">
                    <label class="card-title">Виберіть картинку відділення електронних апаратів</label><br><br>
                    <div class="col-12 d-block d-md-flex form-group">
                        <div class="col-12 col-md-7">
                            <input type="hidden" name="img_0" id="feature_image0" name="feature_image" value="{{ $content[0]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image0"><img id="img0" class="img" src="{{ $content[0]->text }}" class="w-100"></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-12"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Текст справа від фото циклової комісії</label>
                    <textarea name="text_0" class="editor" style="height: 600px;">{{ $content[1]->text }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Текст під фото циклової комісії</label>
                    <textarea name="text_1" class="editor" style="height: 600px;">{{ $content[2]->text }}</textarea>
                </div>

                <div class="cssSlider col-12">
                    <label class="card-title">Вибрати фото складу циклової комісії</label><br><br>
                    <div class="col-12 d-block d-md-flex form-group">
                        <div class="col-12 col-md-7">
                            <input type="hidden" name="img_1" id="feature_image1" name="feature_image" value="{{ $content[0]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image1"><img id="img1" class="img" src="{{ $content[3]->text }}" class="w-100"></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-12"></div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('teachers.index') }}" target="_blank">Перейти до форми викладачів</a> 
                </div>

                <div class="form-group">
                    <label for="">Заголовок тексту під викладачами</label>
                    <input value="{{ $content[4]->text }}" type="text" name="text_2" class="form-control" id="" required>
                </div>

                <div class="form-group">
                    <label for="">Текст</label>
                    <textarea name="text_3" class="editor" style="height: 600px;">{{ $content[5]->text }}</textarea>
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