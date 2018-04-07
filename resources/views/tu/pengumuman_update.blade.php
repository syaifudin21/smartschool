@extends('tu.template')

@section('content')

<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/tu/pengumuman/lihat/'.$id)}}">{{$pengumumanid->nama_pengumuman}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{url('/tu/pengumuman/update/'.$id)}}">Update</a>
      </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Pengumuman {{$pengumumanid->nama_pengumuman}}</h1>
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
    <li class="breadcrumb-item"><a href="{{url('tu/pengumuman')}}">Pengumuman</a></li>
    <li class="breadcrumb-item"><a href="{{url('/tu/pengumuman/lihat/'.$id)}}">{{$pengumumanid->nama_pengumuman}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update</li>
  </ol>
</nav>

<div class="card">

<div class="card-body">

    <form method="POST" action="{{ route('pengumuman.update') }}">
        @method('PUT')
        @csrf
        <input type="hidden" name="id_pengumuman" value="{{$id}}">
        <div class="form-group row">
            <label for="nama_pengumuman" class="col-sm-4 col-form-label text-md-right">Nama Pengumuman</label>
            <div class="col-md-6">
                <input id="nama_pengumuman" type="text" class="form-control{{ $errors->has('nama_pengumuman') ? ' is-invalid' : '' }}" name="nama_pengumuman" value="{{$pengumumanid->nama_pengumuman}}" required autofocus>
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
                <textarea id="isi" class="form-control{{ $errors->has('isi') ? ' is-invalid' : '' }}"  name="isi" autofocus rows="3">{{$pengumumanid->isi }}</textarea>
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
                <input id="waktu_mulai" type="date" class="form-control{{ $errors->has('waktu_mulai') ? ' is-invalid' : '' }}" name="waktu_mulai" value="{{date("Y-m-d", strtotime($pengumumanid->waktu_mulai))}}" required autofocus>
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
                <input id="waktu_selesai" type="date" class="form-control{{ $errors->has('waktu_selesai') ? ' is-invalid' : '' }}" name="waktu_selesai" value="{{date("Y-m-d", strtotime($pengumumanid->waktu_selesai))}}" required autofocus>
                @if ($errors->has('waktu_selesai'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('waktu_selesai') }}</strong>
                    </span>
                @endif
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
@endsection

@section('script')
@endsection
