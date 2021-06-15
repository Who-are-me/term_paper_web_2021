@extends('layouts.admin_layout')

@section('title', 'Редактор сторінки: Матеріальна база')

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
            <h3 class="card-title">Редактор сторінки: Матеріальна база</h3>
        </div>
        
              <!-- form start -->
        <form action="{{ route('base.update', $content[0]->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="cssSlider col-12">
                    <label class="card-title">Виберіть картинки</label><br><br>
                    <div class="col-12 d-block d-md-flex form-group">
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_0" id="feature_image0" name="feature_image" value="{{ $content[0]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image0"><img id="img0" class="img w-100" src="{{ $content[0]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_1" id="feature_image1" name="feature_image" value="{{ $content[1]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image1"><img id="img1" class="img w-100" src="{{ $content[1]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_2" id="feature_image2" name="feature_image" value="{{ $content[2]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image2"><img id="img2" class="img w-100" src="{{ $content[2]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-4"></div>
                        <div class="col-12 col-md-4"></div>
                        <div class="col-12 col-md-4"></div>
                    </div>
                </div>

                <div class="cssSlider col-12">
                    <label class="card-title">Виберіть картинки</label><br><br>
                    <div class="col-12 d-block d-md-flex form-group">
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_3" id="feature_image3" name="feature_image" value="{{ $content[3]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image3"><img id="img3" class="img w-100" src="{{ $content[3]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_4" id="feature_image4" name="feature_image" value="{{ $content[4]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image4"><img id="img4" class="img w-100" src="{{ $content[4]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_5" id="feature_image5" name="feature_image" value="{{ $content[5]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image5"><img id="img5" class="img w-100" src="{{ $content[5]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-4"></div>
                        <div class="col-12 col-md-4"></div>
                        <div class="col-12 col-md-4"></div>
                    </div>
                </div>

                <div class="cssSlider col-12">
                    <label class="card-title">Виберіть картинки</label><br><br>
                    <div class="col-12 d-block d-md-flex form-group">
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_6" id="feature_image6" name="feature_image" value="{{ $content[6]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image6"><img id="img6" class="img w-100" src="{{ $content[6]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_7" id="feature_image7" name="feature_image" value="{{ $content[7]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image7"><img id="img7" class="img w-100" src="{{ $content[7]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_8" id="feature_image8" name="feature_image" value="{{ $content[8]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image8"><img id="img8" class="img w-100" src="{{ $content[8]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-4"></div>
                        <div class="col-12 col-md-4"></div>
                        <div class="col-12 col-md-4"></div>
                    </div>
                </div>

                <div class="cssSlider col-12">
                    <label class="card-title">Виберіть картинки</label><br><br>
                    <div class="col-12 d-block d-md-flex form-group">
                        <div class="col-12 col-md-6">
                            <input type="hidden" name="img_9" id="feature_image9" name="feature_image" value="{{ $content[9]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image9"><img id="img9" class="img w-100" src="{{ $content[9]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="hidden" name="img_10" id="feature_image10" name="feature_image" value="{{ $content[10]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image10"><img id="img10" class="img w-100" src="{{ $content[10]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-4"></div>
                        <div class="col-12 col-md-4"></div>
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
          tinycomments_author: 'Author name',
        });

        // check if you use more one elfinder input
        check_multi_elfider_input = 1;
    </script>
        
    </div>
</section>
@endsection