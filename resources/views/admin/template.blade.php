<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>

  <body>



    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Smart School </a>


      <button class="navbar-toggler toglleplus" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
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
                <a class="nav-link" href="{{url('admin/calonsiswa')}}">
                  <span data-feather="file"></span>
                  Siswa Baru
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/siswa')}}">
                  <span data-feather="shopping-cart"></span>
                  Siswa
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/guru')}}">
                  <span data-feather="users"></span>
                  Guru
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/walikelas')}}">
                  <span data-feather="users"></span>
                  Wali Kelas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/ketuakelas')}}">
                  <span data-feather="users"></span>
                  Ketua Kelas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/ekstrakurikuler')}}">
                  <span data-feather="users"></span>
                  Ekstrakurikuler
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/perpustakaan')}}">
                  <span data-feather="users"></span>
                  Perpustakaan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/pustakawan')}}">
                  <span data-feather="users"></span>
                  Pustakawan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/administrasi')}}">
                  <span data-feather="users"></span>
                  Administrasi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/tatausaha')}}">
                  <span data-feather="users"></span>
                  Tata Usaha
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/admin')}}">
                  <span data-feather="users"></span>
                  Admin
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
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-1.12.4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>


    <!-- Icons -->
    <script src="{{asset('js/feather.min.js')}}"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="{{asset('js/Chart.min.js')}}"></script>

        @yield('footer')

  </body>
</html>

