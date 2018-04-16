@extends('layouts.home')
@section('css')
<style type="text/css">
  .typed-cursor{
    opacity: 1;
    animation: typedjsBlink 0.7s infinite;
    -webkit-animation: typedjsBlink 0.7s infinite;
    animation: typedjsBlink 0.7s infinite;
  }
  @keyframes typedjsBlink{
    50% { opacity: 0.0; }
  }
</style>
@endsection

@section('content')
<div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Selamat Datang</h2>
      <h2 class="white-text"> <strong>Layanan Kami </strong>
        <span class="element"></span> 
      </h2>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/typed.min.js')}}"></script>
<script type="text/javascript">
     document.addEventListener("DOMContentLoaded", function() {
            new Typed('.element', {
            cursorChar: '|',
            strings: ["Menciptakan Dunia dalam Genggaman.", "Membantu dan Menghubungkan Guru dan Siswa", "Memudahkan Pengawasan Perkembangan Siswa"],
            startDelay: 1000,
            showCursor: true,
            autoInsertCss: true,
            backDelay: 2000,
            typeSpeed: 100,
            backSpeed: 20,
            // smartBackspace: false, // this is a default
            loop: true
          });
      });

 $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });   
</script>
@endsection