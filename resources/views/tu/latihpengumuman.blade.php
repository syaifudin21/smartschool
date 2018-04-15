@extends('tu.template')

@section('content')
<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link" href="{{url('/tu/latih/lihat/'.$id)}}">{{$latihid->nama_latih}}</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="{{url('/tu/latih/update/'.$id)}}">Update</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('/tu/latih/soal/'.$id)}}">Soal</a>
        </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Update Latihan {{$latihid->nama_latih}}</h1>
<div class="btn-toolbar mb-2 mb-md-0">
  <div class="btn-group mr-2">
    <button class="btn btn-sm btn-outline-secondary">Share</button>
    <button class="btn btn-sm btn-outline-secondary">Export</button>
  </div>
  <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
    <span data-feather="calendar"></span>
    This week
  </button>
</div>
</div>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white" style="padding: 0px">
    <li class="breadcrumb-item"><a href="{{url('tu/latih')}}">Latihan</a></li>
    <li class="breadcrumb-item"><a href="{{url('/tu/latih/lihat/'.$id)}}">{{$latihid->nama_latih}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Pengumuman</li>
  </ol>
</nav>

<div class="card">

<div class="card-body">

@if(Session::has('success'))
    <div class="alert alert-info alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {!! Session::get('success') !!}
    </div>
@endif

<div class="tab-content" id="myTabContent">
    <form method="POST" action="{{ route('pengumuman.tambah') }}">
        @csrf
        <input type="hidden" name="id_latih" value="{{$id}}">
        <div class="form-group row">
            <label for="nama_pengumuman" class="col-sm-4 col-form-label text-md-right">Nama Pengumuman</label>
            <div class="col-md-6">
                <input id="nama_pengumuman" type="text" class="form-control{{ $errors->has('nama_pengumuman') ? ' is-invalid' : '' }}" name="nama_pengumuman" value="{{ old('nama_pengumuman') }}" required autofocus>
                @if ($errors->has('nama_pengumuman'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('nama_pengumuman') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="isi" class="col-sm-4 col-form-label text-md-right">Isi Pengumuman</label>
            <div class="col-md-6">
                <textarea id="isi" class="form-control{{ $errors->has('isi') ? ' is-invalid' : '' }}"  name="isi" autofocus rows="3">{{ old('isi') }}</textarea>
                @if ($errors->has('isi'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('isi') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="waktu_mulai" class="col-sm-4 col-form-label text-md-right">Waktu Mulai</label>
            <div class="col-md-6">
                <input id="datetimepicker1" type="text" class="form-control{{ $errors->has('waktu_mulai') ? ' is-invalid' : '' }}" name="waktu_mulai" value="{{ old('waktu_mulai') }}" required autofocus>
                @if ($errors->has('waktu_mulai'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('waktu_mulai') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="waktu_selesai" class="col-sm-4 col-form-label text-md-right">Waktu Selesai</label>
            <div class="col-md-6">
                <input id="datetimepicker2" type="text" class="form-control{{ $errors->has('waktu_selesai') ? ' is-invalid' : '' }}" name="waktu_selesai" value="{{ old('waktu_selesai') }}" required autofocus>
                @if ($errors->has('waktu_selesai'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('waktu_selesai') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="waktu_selesai" class="col-sm-4 col-form-label text-md-right">Waktu Selesai</label>
            <div class="col-md-6">
               <select id="objek" class="form-control" name="objek">
                  <option value="umum">Umum</option>
                  <option value="kelas">Kelas</option>
                  <option value="guru">Guru</option>
                  <option value="siswa">Siswa</option>
              </select>
            </div>
        </div>
        <div id="hasil"></div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>

</div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
          $('#objek').on('change', function(e){
              var id = e.target.value;
              // console.log(id);
              $.get('{{ url('tu/pengumuman/load')}}/'+id, function(data){
                  console.log(id);
                  console.log(data);

                  if (id == 'kelas') {
                      $('#hasil').empty();
                      $('#hasil').append('<div class="form-group row"><label for="waktu_selesai" class="col-sm-4 col-form-label text-md-right">Kelas</label><div class="col-md-6"><select id="id_objek" class="form-control" name="id_objek"></select></div></div></div>');
                      $.each(data, function(index, element){
                          $('#id_objek').append(" <option value=" +element.id+ ">" +element.nama_kelas+ "</option>");
                      });
                  } else if(id == 'guru'){
                    $('#hasil').empty();
                      $('#hasil').append('<div class="form-group row"><label for="waktu_selesai" class="col-sm-4 col-form-label text-md-right">Guru</label><div class="col-md-6"><select id="id_objek" class="form-control" name="id_objek"></select></div></div></div>');
                      $('#id_objek').append("<option value=''>Semua Guru</option>");
                      $.each(data, function(index, element){
                          $('#id_objek').append(" <option value=" +element.id+ ">" +element.name+ "</option>");
                      });
                  } else if(id == 'siswa'){
                    $('#hasil').empty();
                      $('#hasil').append('<div class="form-group row"><label for="waktu_selesai" class="col-sm-4 col-form-label text-md-right">Siswa</label><div class="col-md-6"><select id="id_objek" class="form-control" name="id_objek"></select></div></div></div>');
                      $('#id_objek').append("<option value=''>Semua Siswa</option>");
                      $.each(data, function(index, element){
                          $('#id_objek').append(" <option value=" +element.id+ ">" +element.name+ "</option>");
                      });
                  } else {
                    $('#hasil').empty();
                  }

              });
              
          });
      });
</script>
<script type="text/javascript" src="{{asset('js/jquery.datetimepicker.full.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.datetimepicker.min.js')}}"></script>
<script type="text/javascript">
    $('#example').DataTable();
</script>
<script type="text/javascript">
    jQuery.datetimepicker.setLocale('id');

    $('#datetimepicker1').datetimepicker({
     i18n:{
      de:{
       months:[
        'Januari','Februari','Maret','April',
        'Mei','Juni','Juli','Agustus',
        'September','Oktober','November','Desember',
       ],
       dayOfWeek:[
        "Minggu", "Senin", "Selasa", "Rabu", 
        "Kamis", "Jumat", "Sabtu.",
       ]
      }
     },
     timepicker:true,
     format:'Y-m-d H:i'
    });
    $('#datetimepicker2').datetimepicker({
     i18n:{
      de:{
       months:[
        'Januari','Februari','Maret','April',
        'Mei','Juni','Juli','Agustus',
        'September','Oktober','November','Desember',
       ],
       dayOfWeek:[
        "Minggu", "Senin", "Selasa", "Rabu", 
        "Kamis", "Jumat", "Sabtu.",
       ]
      }
     },
     timepicker:true,
     format:'Y-m-d H:i'
    });
</script>
@endsection
