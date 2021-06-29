@extends('layouts.admin_layout')

@section('title', 'Головна')

@section('home', 'Домашня')
@section('contact', 'Контакти')
@section('about', 'Про нас')
@section('base', 'Мат. база')
@section('abiturientu', 'Абітурієнту')
@section('students', 'Студенту')
@section('news', 'Новини')
@section('title-menu', 'Адмін-панель')


@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Головна</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">


          <div class="col-lg-4 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>Home</h3>
                <p>Домашня сторінка</p>
              </div>
              <div class="icon">
                <i class="fas fa-home"></i>
              </div>
              <a href="{{ route('welcome.index')}}" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>About</h3>
                <p>Про циклову</p>
              </div>
              <div class="icon">
                <i class="fas fa-align-left"></i>
              </div>
              <a href="{{ route('about.index')}}" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <div class="small-box bg-light">
              <div class="inner">
                <h3>Mat.base</h3>
                <p>Матеріальна база</p>
              </div>
              <div class="icon">
                <i class="fas fa-tools"></i>
              </div>
              <a href="{{ route('base.index')}}" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Entrant</h3>
                <p>Абітурієнту</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('entrant.index')}}" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Students</h3>
                <p>Студенту</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ route('students.index')}}" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $news_count }}</h3>
                <p>Новини</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="news" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <div class="small-box bg-light">
              <div class="inner">
                <h3>{{ $feedback_count }}</h3>
                <p>Feedback абітурієнтів</p>
              </div>
              <div class="icon">
                <i class="far fa-comments"></i>
              </div>
              <a href="{{ route('feedback.index') }}" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Teachers</h3>
                <p>Викладачі</p>
              </div>
              <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
              </div>
              <a href="{{ route('teachers.index') }}" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Feedback</h3>
                <p>Зворотній зв'язок</p>
              </div>
              <div class="icon">
                <i class="far fa-comments"></i>
              </div>
              <a href="{{ route('contact.index') }}" class="small-box-footer">Більше інформації<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        </div>
      </div>
    </section>

@endsection