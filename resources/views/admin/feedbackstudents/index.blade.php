@extends('layouts.admin_layout')

@section('title', 'Огляд користувачів')

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
          <h3 class="card-title">У весь feedback абітурієнтів</h3>
        </div>
        <div class="card-body p-0">

          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 3%">Id</th>
                      <th>PIP</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>School</th>
                      <th>Option</th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>

              @foreach ($pag as $item)

                <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->pip }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->phone }}</td>
                      <td>{{ $item->school }}</td>
                      <td>{{ $item->option }}</td>
                      
                      <!-- <td class="project-actions text-right">

                          <form action="{{ route('action.destroy', $item->id ) }}" method="POST" style="display: inline-block;">
                            @csrf
                            {{ method_field('DELETE') }}

                            <button onClick='return confirmSubmit()' type="submit" class="delete-btn btn btn-danger btn-sm">
                              <i class="fas fa-trash">
                              </i>
                              Видалити
                            </button>

                            <script>
                              function confirmSubmit() {
                                
                              var agree=confirm("Ви бажаєте видалити користувача?");

                              if (agree)
                                return true ;
                              else
                                return false ;
                              }
                            </script>
                          </form>
                      </td> -->
                  </tr>

                @endforeach   

              </tbody>               
          </table>

          <div class="card-header">
            <h3 class="card-title">
              {{ $pag->render() }}
            </h3>  
          </div> 

        </div>
        <!-- /.card-body -->
    </div>

</section>
@endsection