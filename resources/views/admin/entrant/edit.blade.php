@extends('layouts.admin_layout')

@section('title', 'Редактор сторінки: Абітурієнту')

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
            <h3 class="card-title">Редактор сторінки: Абітурієнту</h3>
        </div>
        
              <!-- form start -->
        <form action="{{ route('entrant.update', $content[0]->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image0">Вибрати фото 1 для слайдеру</button>
                    <input type="text" name="img_0" class="form-control mt-2" id="feature_image0" value="{{ $content[0]->text  }}" readonly>
                    <img id='img0' src="{{ $content[0]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image1">Вибрати фото 2 для слайдеру</button>
                    <input type="text" name="img_1" class="form-control mt-2" id="feature_image1" value="{{ $content[1]->text  }}" readonly>
                    <img id='img1' src="{{ $content[1]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image2">Вибрати фото 3 для слайдеру</button>
                    <input type="text" name="img_2" class="form-control mt-2" id="feature_image2" value="{{ $content[2]->text  }}" readonly>
                    <img id='img2' src="{{ $content[2]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>


                <div class="form-group">
                    <label for="">Текст під слайдером</label>
                    <textarea name="text_0" class="editor" style="height: 600px;">{{ $content[3]->text }}</textarea>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image3">Фото 1</button>
                    <input type="text" name="img_3" class="form-control mt-2" id="feature_image3" value="{{ $content[4]->text  }}" readonly>
                    <img id='img3' src="{{ $content[4]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <label for="">Міні текст під фото</label>
                    <input value="{{ $content[5]->text }}" type="text" name="text_1" class="form-control" id="" required>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image4">Фото 2</button>
                    <input type="text" name="img_4" class="form-control mt-2" id="feature_image4" value="{{ $content[6]->text  }}" readonly>
                    <img id='img4' src="{{ $content[6]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <label for="">Міні текст під фото</label>
                    <input value="{{ $content[7]->text }}" type="text" name="text_2" class="form-control" id="" required>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image5">Фото 3</button>
                    <input type="text" name="img_5" class="form-control mt-2" id="feature_image5" value="{{ $content[8]->text  }}" readonly>
                    <img id='img5' src="{{ $content[8]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <label for="">Міні текст під фото</label>
                    <input value="{{ $content[9]->text }}" type="text" name="text_3" class="form-control" id="" required>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image6">Фото 4</button>
                    <input type="text" name="img_6" class="form-control mt-2" id="feature_image6" value="{{ $content[10]->text  }}" readonly>
                    <img id='img6' src="{{ $content[10]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <label for="">Міні текст під фото</label>
                    <input value="{{ $content[11]->text }}" type="text" name="text_4" class="form-control" id="" required>
                </div>


                <div class="form-group">
                    <label for="">Текст під слайдером</label>
                    <textarea name="text_5" class="editor" style="height: 600px;">{{ $content[12]->text }}</textarea>
                </div>


                <div class="form-group">
                    <label for="">Заголовок над фото групи</label>
                    <textarea name="text_6" class="editor" style="height: 600px;">{{ $content[13]->text }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image7">Фото групи</button>
                    <input type="text" name="img_7" class="form-control mt-2" id="feature_image7" value="{{ $content[14]->text  }}" readonly>
                    <img id='img7' src="{{ $content[14]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <label for="">Міні текст під фото</label>
                    <input value="{{ $content[15]->text }}" type="text" name="text_7" class="form-control" id="" required>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image8">Додаткове фото 1 під групою</button>
                    <input type="text" name="img_8" class="form-control mt-2" id="feature_image8" value="{{ $content[16]->text  }}" readonly>
                    <img id='img8' src="{{ $content[16]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image9">Додаткове фото 2 під групою</button>
                    <input type="text" name="img_9" class="form-control mt-2" id="feature_image9" value="{{ $content[17]->text  }}" readonly>
                    <img id='img9' src="{{ $content[17]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>
                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image10">Додаткове фото 3 під групою</button>
                    <input type="text" name="img_10" class="form-control mt-2" id="feature_image10" value="{{ $content[18]->text  }}" readonly>
                    <img id='img10' src="{{ $content[18]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>


                <!-- video -->
                <div class="form-group">
                    <label for="">Відео та текст</label>
                    <textarea name="text_8" class="editor" style="height: 600px;">{{ $content[19]->text }}</textarea>
                </div>


                <div class="form-group">
                    <label for="">Про місце роботи</label>
                    <textarea name="text_9" class="editor" style="height: 600px;">{{ $content[20]->text }}</textarea>
                </div>


                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image11">Вибрати фото 1 для слайдеру</button>
                    <input type="text" name="img_11" class="form-control mt-2" id="feature_image11" value="{{ $content[21]->text  }}" readonly>
                    <img id='img11' src="{{ $content[21]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image12">Вибрати фото 2 для слайдеру</button>
                    <input type="text" name="img_12" class="form-control mt-2" id="feature_image12" value="{{ $content[22]->text  }}" readonly>
                    <img id='img12' src="{{ $content[22]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
                </div>

                <div class="form-group">
                    <button type="submit" class="popup_selector btn btn-primary" data-inputid="feature_image13">Вибрати фото 3 для слайдеру</button>
                    <input type="text" name="img_13" class="form-control mt-2" id="feature_image13" value="{{ $content[23]->text  }}" readonly>
                    <img id='img13' src="{{ $content[23]->text }}" alt="" class="img" height="15%" width="100%" style="display: block;">
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