<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Smart Scholl') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
  


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Smart School') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                  <a href="{{url('admin/')}}" class="list-group-item list-group-item-action active">
                    Tahun Ajaran
                  </a>
                  <a href="{{url('admin/siswa')}}" class="list-group-item list-group-item-action">Siswa</a>
                  <a href="{{url('admin/calonsiswa')}}" class="list-group-item list-group-item-action">Calon Siswa</a>
                  <a href="{{url('admin/guru')}}" class="list-group-item list-group-item-action">Guru</a>
                  <a href="{{url('admin/walikelas')}}" class="list-group-item list-group-item-action">Wali Kelas</a>
                  <a href="{{url('admin/ketuakelas')}}" class="list-group-item list-group-item-action">Ketua Kelas</a>
                  <a href="{{url('admin/ekstrakurikuler')}}" class="list-group-item list-group-item-action">Admin Ekstrakurikuler</a>
                  <a href="{{url('admin/perpustakaan')}}" class="list-group-item list-group-item-action">Koordinator Perpustakaan</a>
                  <a href="{{url('admin/pustakawan')}}" class="list-group-item list-group-item-action">Pustakawan</a>
                  <a href="{{url('admin/administrasi')}}" class="list-group-item list-group-item-action">Administrasi</a>
                  <a href="{{url('admin/tatausaha')}}" class="list-group-item list-group-item-action">Tata Usaha</a>
                  <a href="{{url('admin/admin')}}" class="list-group-item list-group-item-action">Admin</a>
                </div>
            </div>
            <div class="col-sm-9">
                @yield('content')
            </div>
        </div>
        </div>
        </main>
    </div>

<script type="text/javascript" src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-1.12.4.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>


@yield('script')
</body>
</html>
