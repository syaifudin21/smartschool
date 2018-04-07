@extends('tu.template')

@section('content')

<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link" href="{{url('/tu/latih/lihat/'.$soalid->id_latih)}}">{{$soalid->nama_latih}}</a>
        </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Soal {{$soalid->nama_latih}}</h1>
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
    <li class="breadcrumb-item"><a href="{{url('/tu/latih/lihat/'.$soalid->id_latih)}}">{{$soalid->nama_latih}}</a></li>
    <li class="breadcrumb-item"><a href="{{url('/tu/latih/soal/'.$soalid->id_latih)}}">Soal</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update</li>
  </ol>
</nav>


<div class="card">

<div class="card-body">

@if(Session::has('success'))
    <div class="alert alert-info alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('success') }}
    </div>
@endif

<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<form method="POST" action="{{ route('soal.update') }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id_soal" value="{{$soalid->id}}">
        <div class="form-group row">
            <label for="soal" class="col-sm-3 col-form-label text-md-right">Pertanyaan</label>
            <div class="col-md-7">
                <textarea id="soal" class="form-control{{ $errors->has('soal') ? ' is-invalid' : '' }}"  name="soal" autofocus rows="3" placeholder="Tulisakan Pertanyaan Disini">{{$soalid->soal}}</textarea>
                @if ($errors->has('soal'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('soal') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_1" class="col-sm-3 col-form-label text-md-right">Jawaban A</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_1" {{($soalid->benar_1==1) ? "checked" : "" }}>
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_1') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_1" value="{{$soalid->jawaban_1}}"> {{$soalid->lampiran_1}}
                </div>
                @if ($errors->has('jawaban_1'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jawaban_1') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_2" class="col-sm-3 col-form-label text-md-right">Jawaban B</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_2" {{($soalid->benar_2==1) ? "checked" : "" }}>
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_2') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_2" value="{{$soalid->jawaban_2}}"> {{$soalid->lampiran_2}}
                </div>
                @if ($errors->has('jawaban_2'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jawaban_2') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_3" class="col-sm-3 col-form-label text-md-right">Jawaban C</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_3" {{($soalid->benar_3==1) ? "checked" : "" }}>
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_3') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_3" value="{{$soalid->jawaban_3}}"> {{$soalid->lampiran_3}}
                </div>
                @if ($errors->has('jawaban_3'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jawaban_3') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_4" class="col-sm-3 col-form-label text-md-right">Jawaban D</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_4" {{($soalid->benar_4==1) ? "checked" : "" }}>
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_4') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_4" value="{{$soalid->jawaban_4}}"> {{$soalid->lampiran_4}}
                </div>
                @if ($errors->has('jawaban_4'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jawaban_4') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_5" class="col-sm-3 col-form-label text-md-right">Jawaban E</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_5" {{($soalid->benar_5==1) ? "checked" : "" }}>
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_5') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_5" value="{{$soalid->jawaban_5}}"> {{$soalid->lampiran_5}}
                </div>
                @if ($errors->has('jawaban_5'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jawaban_5') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        

            <div class="form-group row">
                <div class="col-md-7 offset-md-3">
                    <button type="submit" class="btn btn-primary">Update Soal</button>
                </div>
            </div>
        </form>

</div>

</div>
</div>
<div class="card-footer">
  {{tanggal_indo(date('Y-m-d-G-i-s', strtotime($soalid->updated_at)), true)}}
   
</div>
</div>
@endsection

@section('script')

@endsection
