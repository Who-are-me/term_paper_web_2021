@extends('layouts.admin_layout')

@section('title', 'Редактор сторінки: Студенту')

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
            <h3 class="card-title">Редактор сторінки: Студенту (для вибору картинки, клацнути на ту, що бажаєте вибрати)</h3>
        </div>
        
              <!-- form start -->
        <form action="{{ route('students.update', $content[0]->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="cssSlider col-12">
                    <label class="card-title">Вибрати фото на прев'ю новини</label><br><br>
                    <div class="col-12 d-md-flex form-group">
                        <div class="col-12 col-md-8">
                            <input type="hidden" name="img_0" id="feature_image0" name="feature_image" value="{{ $content[0]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image0"><img id="img0" class="img w-100" src="{{ $content[0]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-8"></div>
                    </div>
                </div>

                <div class="cssSlider col-12">
                    <label class="card-title">Вибрати фото на прев'ю новини</label><br><br>
                    <div class="col-12 d-md-flex form-group">
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_1" id="feature_image1" name="feature_image" value="{{ $content[1]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image1"><img id="img1" class="img w-100" src="{{ $content[1]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_2" id="feature_image2" name="feature_image" value="{{ $content[2]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image2"><img id="img2" class="img w-100" src="{{ $content[2]->text }}" ></a>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="hidden" name="img_3" id="feature_image3" name="feature_image" value="{{ $content[3]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image3"><img id="img3" class="img w-100" src="{{ $content[3]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-8"></div>
                    </div>
                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-8"></div>
                    </div>
                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-8"></div>
                    </div>
                </div>

                <div class="cssSlider col-12">
                    <label class="card-title">Вибрати фото на прев'ю новини</label><br><br>
                    <div class="col-12 d-md-flex form-group">
                        <div class="col-12 col-md-8">
                            <input type="hidden" name="img_4" id="feature_image4" name="feature_image" value="{{ $content[4]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image4"><img id="img4" class="img w-100" src="{{ $content[4]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-8"></div>
                    </div>
                </div>

                <div class="cssSlider col-12">
                    <label class="card-title">Вибрати фото на прев'ю новини</label><br><br>
                    <div class="col-12 d-md-flex form-group">
                        <div class="col-12 col-md-8">
                            <input type="hidden" name="img_5" id="feature_image5" name="feature_image" value="{{ $content[5]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image5"><img id="img5" class="img w-100" src="{{ $content[5]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-8"></div>
                    </div>
                </div>

                <div class="cssSlider col-12">
                    <label class="card-title">Вибрати фото на прев'ю новини</label><br><br>
                    <div class="col-12 d-md-flex form-group">
                        <div class="col-12 col-md-8">
                            <input type="hidden" name="img_6" id="feature_image6" name="feature_image" value="{{ $content[6]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image6"><img id="img6" class="img w-100" src="{{ $content[6]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-8"></div>
                    </div>
                </div>

                <div class="cssSlider col-12">
                    <label class="card-title">Вибрати фото на прев'ю новини</label><br><br>
                    <div class="col-12 d-md-flex form-group">
                        <div class="col-12 col-md-8">
                            <input type="hidden" name="img_7" id="feature_image7" name="feature_image" value="{{ $content[7]->text }}">
                            <a href="" class="popup_selector" data-inputid="feature_image7"><img id="img7" class="img w-100" src="{{ $content[7]->text }}" ></a>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-flex">
                        <div class="col-12 col-md-8"></div>
                    </div>
                </div>



                <!-- <div class="form-group">
                    <label for="">Заголовок дисципліни</label>
                    <textarea name="text_0" class="editor" style="height: 600px;">{{ $content[0]->text }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Текст</label>
                    <textarea name="text_1" class="editor" style="height: 600px;">{{ $content[1]->text }}</textarea>
                </div>


                <div class="form-group">
                    <label for="">Заголовок дисципліни</label>
                    <textarea name="text_2" class="editor" style="height: 600px;">{{ $content[2]->text }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Текст</label>
                    <textarea name="text_3" class="editor" style="height: 600px;">{{ $content[3]->text }}</textarea>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image0">Вибрати фото</button>
                    <input type="text" name="img_0" class="form-control mt-2" id="feature_image0" value="{{ $content[4]->text }}" readonly>
                    <img id='img0' src="{{ $content[4]->text }}" alt="" class="img-uploaded" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <label for="">Міні текст</label>
                    <input value="{{ $content[5]->text }}" type="text" name="text_4" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image1">Вибрати фото</button>
                    <input type="text" name="img_1" class="form-control mt-2" id="feature_image1" value="{{ $content[6]->text }}" readonly>
                    <img id='img1' src="{{ $content[6]->text }}" alt="" class="img-uploaded" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <label for="">Міні текст</label>
                    <input value="{{ $content[7]->text }}" type="text" name="text_5" class="form-control" required>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image2">Вибрати фото</button>
                    <input type="text" name="img_2" class="form-control mt-2" id="feature_image2" value="{{ $content[8]->text }}" readonly>
                    <img id='img2' src="{{ $content[8]->text }}" alt="" class="img-uploaded" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <label for="">Міні текст</label>
                    <input value="{{ $content[9]->text }}" type="text" name="text_6" class="form-control" required>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image3">Вибрати фото</button>
                    <input type="text" name="img_3" class="form-control mt-2" id="feature_image3" value="{{ $content[10]->text }}" readonly>
                    <img id='img3' src="{{ $content[10]->text }}" alt="" class="img-uploaded" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <label for="">Міні текст</label>
                    <input value="{{ $content[11]->text }}" type="text" name="text_7" class="form-control" required>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image4">Вибрати фото</button>
                    <input type="text" name="img_4" class="form-control mt-2" id="feature_image4" value="{{ $content[12]->text }}" readonly>
                    <img id='img4' src="{{ $content[12]->text }}" alt="" class="img-uploaded" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image5">Вибрати фото</button>
                    <input type="text" name="img_5" class="form-control mt-2" id="feature_image5" value="{{ $content[13]->text }}" readonly>
                    <img src="{{ $content[13]->text }}" alt="" class="img-uploaded" height="15%" width="100%" style="display: block;">
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
          tinycomments_author: 'Author name',
        });

        // check if you use more one elfinder input
        check_multi_elfider_input = 1;
    </script>
        
    </div>
</section>
@endsection