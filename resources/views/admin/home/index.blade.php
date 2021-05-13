@extends('layouts.admin_layout')

@section('title', 'Головна')
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
            <h1 class="m-0">Головна</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $posts_count }}</h3>
                <p>Абітурієнту</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>
                <p>Студенту</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ion-stats-bars ion-bag ion-person-add-->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>


                <p>Новини</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row --> 
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

@endsection