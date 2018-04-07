@extends('tu.template')

@section('content')
<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/tu/organisasi/lihat/'.$id)}}">{{$organisasiid->nama_organisasi}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tu/organisasi/update/'.$id)}}">Update</a>
        </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Organisasi {{$organisasiid->nama_organisasi}}</h1>
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
    <li class="breadcrumb-item"><a href="{{url('tu/organisasi')}}">Organisasi</a></li>
    <li class="breadcrumb-item"><a href="{{url('/tu/organisasi/lihat/'.$id)}}">{{$organisasiid->nama_organisasi}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update</li>
  </ol>
</nav>


<div class="card">

<div class="card-body">

<div class="tab-content" id="myTabContent">

    <form method="POST" action="{{ route('organisasi.update') }}">
        @method('PUT')
        @csrf
        <input type="hidden" name="id_organisasi" value="{{$id}}">
        <div class="form-group row">
            <label for="nama_organisasi" class="col-sm-4 col-form-label text-md-right">Nama Organisasi</label>
            <div class="col-md-6">
                <input id="nama_organisasi" type="text" class="form-control{{ $errors->has('nama_organisasi') ? ' is-invalid' : '' }}" name="nama_organisasi" value="{{$organisasiid->nama_organisasi}}" required autofocus>
                @if ($errors->has('nama_organisasi'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('nama_organisasi') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="visi" class="col-sm-4 col-form-label text-md-right">Visi</label>
            <div class="col-md-6">
                <textarea id="visi" class="form-control{{ $errors->has('visi') ? ' is-invalid' : '' }}"  name="visi" autofocus rows="3">{{$organisasiid->visi}}</textarea>
                @if ($errors->has('visi'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('visi') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="misi" class="col-sm-4 col-form-label text-md-right">Misi</label>
            <div class="col-md-6">
                <textarea id="misi" class="form-control{{ $errors->has('misi') ? ' is-invalid' : '' }}"  name="misi" autofocus rows="3">{{$organisasiid->misi}}</textarea>
                @if ($errors->has('misi'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('misi') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal_berdiri" class="col-sm-4 col-form-label text-md-right">Tanggal berdiri</label>
            <div class="col-md-6">
                <input id="tanggal_berdiri" type="date" class="form-control{{ $errors->has('tanggal_berdiri') ? ' is-invalid' : '' }}" name="tanggal_berdiri" value="{{date("Y-m-d", strtotime($organisasiid->tanggal_berdiri))}}" required autofocus>
                @if ($errors->has('tanggal_berdiri'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('tanggal_berdiri') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="pembina" class="col-sm-4 col-form-label text-md-right">Pembina</label>
            <div class="col-md-6">
                <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="pembina">
                    <option value="{{$organisasiid->pembina}}">{{$organisasiid->name}}</option>
                    @foreach($guru as $gr)
                    <option value="{{$gr->id}}">{{$gr->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('pembina'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('pembina') }}</strong>
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
</div>
@endsection

@section('script')
@endsection
