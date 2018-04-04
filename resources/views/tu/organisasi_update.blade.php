@extends('tu.template')

@section('content')
<div class="card">
<div class="card-header">
<ul class="nav nav-pills card-header-pills">
  <li class="nav-item">
    <a class="nav-link" href="{{url('/tu/organisasi/lihat/'.$id)}}">{{$organisasiid->nama_organisasi}}</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/tu/organisasi/update/'.$id)}}">Update</a>
  </li>
</ul>
</div>

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
