<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Адмін панель - @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
  <!-- colorbox -->
  <link rel="stylesheet" href="/admin/dist/css/colorbox.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">


<!-- verification login start -->
@guest
@if (Route::has('login'))
<div class="container" style="margin-top: 90px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- verification login end -->
@else


<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">@yield('home')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/contact" class="nav-link">@yield('contact')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/about" class="nav-link">@yield('about')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/base" class="nav-link">@yield('base')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/abiturientu" class="nav-link">@yield('abiturientu')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/students" class="nav-link">@yield('students')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/tidings" class="nav-link">@yield('news')</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>

<!-- login menu start -->
      @guest 
      @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <a class="dropdown-item" href="{{ url('backend/register') }}"
              onclick="event.preventDefault();
              document.getElementById('register-form').submit();">
              {{ __('Register user') }}
            </a>

            <!-- <a class="dropdown-item" href="{{ route('login') }}"
              onclick="event.preventDefault();
              document.getElementById('login-form').submit();">
              {{ __('TEST Log in') }}
            </a> -->

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>

            <form id="register-form" action="{{ url('backend/register') }}" method="GET" class="d-none">
              @csrf
            </form>

            <!-- <form id="login-form" action="{{ route('login') }}" method="POST" class="d-none">
              @csrf
            </form> -->

          </div>
        </li>
      @endguest
<!-- login menu end -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="backend" class="brand-link">
      <img src="/admin/dist/img/antena.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">@yield('title-menu')</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<!-- homeAdmin -->
          <li class="nav-item">
            <a href="{{ route('homeAdmin') }}" class="nav-link">  
              <i class="nav-icon far fa-newspaper"></i>
              <p>
                Головна
              </p>
            </a>
          </li>


<!-- abiturientu -->
          <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-user-graduate"></i>
              <p>
              Абітурієнту
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Редактувати сторінку</p>
                </a>
              </li>
            </ul>
          </li> 


<!-- student -->
          <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="nav-icon far fa-user"></i>
              <p>
              Студенту
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Редактувати сторінку</p>
                </a>
              </li>
            </ul>
          </li> 


<!-- news -->
          <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="nav-icon far fa-newspaper"></i>
              <p>
                Новини
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('news.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Переглянути всі новини</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('news.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Добавити новину</p>
                </a>
              </li>
              
            </ul>
          </li> 


        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->

  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>
<script src="/admin/admin.js"></script>
<!-- colorbox -->
<script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>


</body>
</html>
@endguest