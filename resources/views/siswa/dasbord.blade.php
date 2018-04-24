@extends('siswa.template')
@section('warna','blue')
@section('css')
@endsection

@section('menu')
<div class="categories-wrapper light-blue darken-3" style="height: 48px">
  <div class="categories-container">
    <div class="container">
     <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#dasbord">Dasbord</a></li>
        <li class="tab col s3"><a href="#kelas">Kelas</a></li>
        <li class="tab col s3"><a href="#ekstra">Ekstrakurikuler</a></li>
        <li class="tab col s3"><a href="#pengumuman">Pengumuman</a></li>
      </ul>
    </div>
  </div>
</div>
@endsection

@section('content')
<div id="portfolio" class="section white">
<div class="container">

  <div id="dasbord" class="col s12">
    <div class="row">

      <div class="col s12 m4">
      <ul class="collection with-header">
        <li class="collection-header"><h5>Pekerjaan Rumah</h5></li>
        <li class="collection-item"><b>Matematika</b> <br> hal. 30 'Uji Kompetesi 3'</li>
        <li class="collection-item"><b>Bhs Indonesia</b> <br> hal. 3 'Uji Kompetesi 3'</li>
        <li class="collection-item"><b>Kimia</b> <br> hal. 40 'Uji Kompetesi 3'</li>
        <li class="collection-item"><b>Geografi</b> <br> hal. 22 'Uji Kompetesi 1'</li>
      </ul>
      </div>

      <div class="col s12 m4">
      <ul class="collection with-header">
        <li class="collection-header"><h5>Agenda</h5></li>
        <li class="collection-item"><b>12 Maret 2015</b> <br> Pendaftaran Siswa Baru</li>
        <li class="collection-item"><b>11 Maret 2015</b> <br> Tes Masuk</li>
        <li class="collection-item"><b>10 Maret 2015</b> <br> Tes Kejuruan</li>
        <li class="collection-item"><b>09 Maret 2015</b> <br> MOS</li>
        <li class="collection-item"><b>08 Maret 2015</b> <br> Opram</li>
      </ul>
      </div>

      <div class="col s12 m4">
      <ul class="collection with-header">
        <li class="collection-header green darken-1" style="color: white"><h5>Absensi</h5></li>
        <li class="collection-item"><b>12 Maret 2015</b> <br> masuk 07.00 pulang 14.00</li>
        <li class="collection-item"><b>11 Maret 2015</b> <br> masuk 06.40 pulang 14.10</li>
        <li class="collection-item"><b>10 Maret 2015</b> <br> masuk 07.30 pulang 14.20</li>
        <li class="collection-item"><b>09 Maret 2015</b> <br> masuk 06.20 pulang 14.30</li>
        <li class="collection-item"><b>08 Maret 2015</b> <br> masuk 06.10 pulang 14.40</li>
      </ul>
      </div>


    </div>
  </div>
  <div id="kelas" class="col s12">
  <div class="row">
      <canvas id="densityChart" width="600" height="400"></canvas>
  </div>
  </div>
  <div id="ekstra" class="col s12">Test 3</div>
  <div id="pengumuman" class="col s12">Test 4</div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script type="text/javascript">
  var densityCanvas = document.getElementById("densityChart");

  Chart.defaults.global.defaultFontSize = 12;

  var densityData = {
    label: 'Perkembangan Nilai',
    data: [40, 50, 70, 55, 65, 45, 70, 80, 60, 95, 50, 60, 70, 90, 60, 50]
  };

  var barChart = new Chart(densityCanvas, {
    type: 'bar',
    data: {
      labels: ["Matematika", "Fisika", "Kimia", "Bhs. Indonesia", "Geografi", "Al-Quran", "Aqidah Akhlaq", "Fiqih", "SKI", "Bhs. Inggris", "Biologi", "Sejarah", "Ekonomi", "PenjasOrkes", "Aswaja", "Bhs. Arab"],
      datasets: [densityData]
    }
  });

  $(document).ready(function() {
    @if(Session::has('berhasil'))
      Materialize.toast('{{ Session::get('berhasil') }}', 4000);
    @endif
    $('ul.tabs').tabs();
  });
</script>
@endsection