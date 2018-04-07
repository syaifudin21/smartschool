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
    <li class="breadcrumb-item active" aria-current="page">Update</li>
  </ol>
</nav>

<div class="card">

<div class="card-body">

<div class="tab-content" id="myTabContent">
    <form method="POST" action="{{ route('latih.update') }}">
        @method('PUT')
        @csrf
        <input type="hidden" name="id_latih" value="{{$id}}">
        <div class="form-group row">
            <label for="nama_latih" class="col-sm-4 col-form-label text-md-right">Nama Latihan</label>
            <div class="col-md-6">
                <input id="nama_latih" type="text" class="form-control{{ $errors->has('nama_latih') ? ' is-invalid' : '' }}" name="nama_latih" value="{{$latihid->nama_latih}}" required autofocus>
                @if ($errors->has('nama_latih'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('nama_latih') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="tujuan_latih" class="col-sm-4 col-form-label text-md-right">Tujuan Latihan</label>
            <div class="col-md-6">
                <textarea id="tujuan_latih" class="form-control{{ $errors->has('tujuan_latih') ? ' is-invalid' : '' }}"  name="tujuan_latih" autofocus rows="3">{{$latihid->tujuan_latih}}</textarea>
                @if ($errors->has('tujuan_latih'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('tujuan_latih') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="waktu_mulai" class="col-sm-4 col-form-label text-md-right">Waktu Mulai</label>
            <div class="col-md-6">
                <input id="waktu_mulai" type="date" class="form-control{{ $errors->has('waktu_mulai') ? ' is-invalid' : '' }}" name="waktu_mulai" value="{{date("Y-m-d", strtotime($latihid->waktu_mulai))}}" required autofocus>
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
                <input id="waktu_selesai" type="date" class="form-control{{ $errors->has('waktu_selesai') ? ' is-invalid' : '' }}" name="waktu_selesai" value="{{date("Y-m-d", strtotime($latihid->waktu_selesai))}}" required autofocus>
                @if ($errors->has('waktu_selesai'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('waktu_selesai') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_latih" class="col-sm-4 col-form-label text-md-right">Jenis Latihan</label>
            <div class="col-md-6">
                <select class="form-control{{ $errors->has('jenis_latih') ? ' is-invalid' : '' }}" name="jenis_latih">
                    <option value="{{$latihid->jenis_latih}}" selected>{{ucwords($latihid->jenis_latih)}}</option>
                    <option value="ujian masuk">Ujian Masuk</option>
                    <option value="ujian jurusan">Ujian Jurusan</option>
                    <option value="ujian tengah semester">Ujian Tengah Semester</option>
                    <option value="ujian akhir semester">Ujian Akhir Semester</option>
                    <option value="ujian harian">Ujian Harian</option>
                </select>
            </div>
        </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
</div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('#example').DataTable();
</script>
@endsection
