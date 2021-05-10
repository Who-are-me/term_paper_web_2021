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
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">





        <div class="card">
        <div class="card-header">
          <h3 class="card-title">Всі категорії</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
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
                @foreach ($categories as $category)
                <tr>
                      <td>
                        {{ $category['id'] }}
                      </td>

                      <td>
                        {{ $category['title'] }}
                      </td>
                      
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Радактувати
                          </a>

                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Видалити
                          </a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->





     
    </div><!-- /.container-fluid -->
</section>
@endsection