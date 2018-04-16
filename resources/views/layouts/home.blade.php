<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link type="text/css" rel="stylesheet" href="{{url('materialize/css/materialize.min.css')}}"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @yield('css')

</head>
<body>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{route('login')}}">Login</a></li>
      <li><a href="{{route('register')}}">Daftar</a></li>
      <li><a href="{{route('siswabaru')}}">Siswa Baru</a></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="{{route('login')}}">Login</a></li>
  <li><a href="{{route('register')}}">Daftar</a></li>
</ul>

            @yield('content')

{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> --}}
<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('materialize/js/materialize.min.js')}}"></script>
  
<script type="text/javascript">

  $(document).ready(function(){
     $(".sidenav").sidenav();
  });

</script>
@yield('script')
</body>
</html>
