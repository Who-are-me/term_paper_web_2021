@extends('layouts.admin_layout')

@section('title', 'Огляд категорій ')

@section('home', 'Домашня')
@section('contact', 'Контакти')
@section('about', 'Про нас')
@section('base', 'Мат. база')
@section('abiturientu', 'Абітурієнту')
@section('students', 'Студенту')
@section('news', 'Новини')
@section('notification', 'повідомлень')
@section('new massages', 'нові повідомлення')
@section('friend requests', 'запрошення друзів')
@section('new reports', 'нові репости')
@section('mins', 'хвелин')
@section('hours', 'годин')
@section('days', 'днів')
@section('see all notification', 'Подивитися всі повідомленя')
@section('title-menu', 'Адмін-панель')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4><i class="icon fa fa-check"> </i>{{ session('success') }}</h4>
            </div>
        @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">





        <div class="card">
        <div class="card-header">
          <h3 class="card-title">Всі категорії</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 3%">
                          ID
                      </th>
                      <th>
                          TITLE
                      </th>
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>

              @foreach ($cat as $qwerty)

                <tr>
                      <td>
                        {{ $qwerty->id }}
                      </td>

                      <td>
                        {{ $qwerty->title }}
                      </td>
                      
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('category.edit', $qwerty->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Радактувати
                          </a>

                          <form action="{{ route('category.destroy', $qwerty->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                              Видалити
                            </button>
                          </form>
                      </td>
                  </tr>

                @endforeach   

              </tbody>   
          </table>         
        </div>
        <!-- /.card-body -->
    </div>

    <div class="container-fluid" >
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{$cat->render()}}</h3>  
        </div>
      </div>
    </div>

</section>
@endsection