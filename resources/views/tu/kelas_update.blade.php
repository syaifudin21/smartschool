@extends('tu.template')

@section('content')
<div class="card">
<div class="card-header">
<ul class="nav nav-pills card-header-pills">
  <li class="nav-item">
    <a class="nav-link" href="{{url('/tu/kelas/lihat/'.$id)}}">{{$kelasid->nama_kelas}}</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/tu/kelas/update/'.$id)}}">Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/tu/kelas/mapel/'.$id)}}">Tambah Mapel</a>
  </li>
</ul>
</div>

<div class="card-body">

<form method="POST" action="{{ route('kelas.update') }}">
    @method('PUT')
    @csrf
    <input type="hidden" name="id_kelas" value="{{$id}}">
    <div class="form-group row">
        <label for="id_ta" class="col-sm-4 col-form-label text-md-right">Tahun Ajaran</label>
        <div class="col-md-6">
            <select class="custom-select {{ $errors->has('status') ? ' is-invalid' : '' }}" name="id_ta">
                <option value="{{$kelasid->id_ta}}" selected>{{$kelasid->tahun_ajaran}}</option>
                @foreach($ta as $ta)
                <option value="{{$ta->id}}">{{$ta->tahun_ajaran}}</option>
                @endforeach
            </select>
            @if ($errors->has('id_ta'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('id_ta') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_kelas" class="col-sm-4 col-form-label text-md-right">Nama Kelas</label>
        <div class="col-md-6">
            <input id="nama_kelas" type="text" class="form-control{{ $errors->has('nama_kelas') ? ' is-invalid' : '' }}" name="nama_kelas" value="{{$kelasid->nama_kelas}}" required autofocus>
            @if ($errors->has('nama_kelas'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('nama_kelas') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="id_guru" class="col-sm-4 col-form-label text-md-right">Wali Kelas</label>
        <div class="col-md-6">
            <select class="custom-select {{ $errors->has('status') ? ' is-invalid' : '' }}" name="id_guru">
                <option value="{{$kelasid->id_guru}}" selected>{{$kelasid->name}}</option>
                @foreach($guru as $gr)
                <option value="{{$gr->id}}">{{$gr->name}}</option>
                @endforeach
            </select>
            @if ($errors->has('id_guru'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('id_guru') }}</strong>
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
