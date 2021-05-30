@extends('layouts.admin_layout')

@section('title', 'Редактор новин')

@section('home', 'Домашня')
@section('contact', 'Контакти')
@section('about', 'Про нас')
@section('base', 'Мат. база')
@section('abiturientu', 'Абітурієнту')
@section('students', 'Студенту')
@section('news', 'Новини')
@section('title-menu', 'Адмін-панель')

@section('content')
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
            <h3 class="card-title">Редактор новини: {{ $news->title }}</h3>
        </div>
        
              <!-- form start -->
        <form action="{{ route('news.update', $news['id'] ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Заголовок</label>
                    <input value="{{ $news->title }}" type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введіть заголовок новини" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Контент</label>
                    <textarea name="text" class="editor">{{ $news->text }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image">Вибрати фото на прев'ю до посту</button>
                    <input type="text" name="img" class="form-control mt-2" id="feature_image" name="feature_image" value="{{ $news->img }}" readonly>
                    <img src="{{ $news->img }}" alt="" class="img-uploaded" height="15%" width="100%" style="display: block;">
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
          tinycomments_author: 'Author name',
       });
    </script>
        
    </div>
</section>
@endsection