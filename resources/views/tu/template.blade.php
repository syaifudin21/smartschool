<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smart School</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.datetimepicker.min.css') }}" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Smart School </a>


      <button class="navbar-toggler toglleplus" type="button" data-toggle="offcanvas" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarTogglerDemo02">
          <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
          <ul class="navbar-nav px-3">
            <li class="nav-item d-md-none"><a href="" class="nav-link">Guru</a></li>
            
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
          </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            
            <ul class="nav flex-column">
              <li class="nav-item">
                <div class="media nav-link">
                  <img class="mr-3" src="{{asset('images/guru/profil/foto.jpg')}}" alt="Generic placeholder image" width="64px">
                  <div class="media-body">
                    <h5 style="margin-bottom: 2px;">Guru</h5>
                    <p>guru</p>
                  </div>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('tu/kelas')}}">
                  <span data-feather="file"></span>
                  Kelas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('tu/mapel')}}">
                  <span data-feather="shopping-cart"></span>
                  Mata Pelajaran
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('tu/latih')}}">
                  <span data-feather="users"></span>
                  Latihan / Ulangan
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('tu/pengumuman')}}">
                  <span data-feather="shopping-cart"></span>
                  Pengumuman
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('tu/organisasi')}}">
                  <span data-feather="users"></span>
                  Organisasi
                </a>
              </li>
              
            </ul>


          </div>
        </nav>

        
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="display: block; background-color: white">
        @yield('content')
    </main>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('js/jquery-1.12.4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-4.1.min.js')}}"></script>

    <!-- Icons -->
    <script src="{{asset('js/feather.min.js')}}"></script>
    <script>
      feather.replace()
    </script>
    <script type="text/javascript">
      $(function () {
        'use strict'

        $('[data-toggle="offcanvas"]').on('click', function () {
          $('.offcanvas-collapse').toggleClass('open')
        })
      })
    </script>

    <!-- Graphs -->
    <script src="{{asset('js/Chart.min.js')}}"></script>

    @yield('script')

  </body>
</html>


