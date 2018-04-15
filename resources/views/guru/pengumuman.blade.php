@extends('guru.template')

@section('content')

<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Latihan</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tambah" role="tab" aria-controls="profile" aria-selected="false">Tambah</a>
        </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Pengumuman</h1>
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


@if(Session::has('success'))
    <div class="alert alert-info alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {!! Session::get('success') !!}
    </div>
@endif

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="table-responsive-sm">
<table id="example" class="table table-hover table-sm" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Pengumuman</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th>Pembuat</th>
                <th>Objek</th>
                <th>Lampiran</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $n=1;?>
        <tbody>
            @foreach($pengumuman as $peng)
            <tr>
                <td>{{$n++}}</td>
                <td>{{$peng->nama_pengumuman}}</td>
                <td>{{tanggal_jam(date('Y-m-d-G-i-s', strtotime($peng->waktu_mulai)), true)}}</td>
                <td>{{tanggal_jam(date('Y-m-d-G-i-s', strtotime($peng->waktu_selesai)), true)}}</td>
                <td>{{$peng->name}}</td>
                <td>{{$peng->objek}}</td>
                <td>{{$peng->lampiran}}</td>
                <form method="POST" action="{{url('tu/pengumuman/delete/'.$peng->id)}}">
                <td><a href="{{url('tu/pengumuman/lihat/'.$peng->id)}}" class="btn btn-outline-success btn-sm">Lihat</a> 
                  @if(Auth::user()->id == $peng->id_user)
                  <a href="{{url('tu/pengumuman/update/'.$peng->id)}}" class="btn btn-outline-primary btn-sm">Update</a> 
                    @method('DELETE') {{csrf_field()}}
                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Delete </button>
                  @endif
                </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </div>

    <div class="tab-pane fade" id="tambah" role="tabpanel" aria-labelledby="profile-tab">
    <form method="POST" action="{{ route('pengumuman.tambah') }}">
        @csrf
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
