@extends('tu.template')

@section('content')

<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tu/latih/lihat/'.$id)}}">{{$latihid->nama_latih}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tu/latih/update/'.$id)}}">Update</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/tu/latih/soal/'.$id)}}">Soal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tu/latih/soal/lihat/'.$id)}}">Priview</a>
        </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Soal Latihan {{$latihid->nama_latih}}</h1>
<div class="btn-toolbar mb-2 mb-md-0">
  <div class="btn-group mr-2">
    <button class="btn btn-sm btn-outline-secondary">Share</button>
    <button  data-toggle="modal" data-target="#import" class="btn btn-sm btn-outline-secondary">Import</button>
    <a href="{{url('tu/latih/soal/export/'.$id)}}" class="btn btn-sm btn-outline-secondary">Export</a>
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
    <li class="breadcrumb-item active" aria-current="page">Soal</li>
  </ol>
</nav>

@if(Session::has('success'))
    <div class="alert alert-info alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {!! Session::get('success') !!}
    </div>
@endif
@if(Session::has('gagal'))
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {!! Session::get('gagal') !!}
    </div>
@endif

<div class="tab-content" id="myTabContent">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Soal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tambah Soal</a>
  </li>
</ul>
<br>
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <table id="example" class="table table-hover table-sm" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Soal</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $n=1;?>
        <tbody>
        @foreach($soal as $soal)
            <tr>
                <td>{{$n++}}</td>
                <td> {{$soal->soal}} </td>
                <form method="POST" action="{{url('tu/latih/soal/delete/'.$soal->id)}}">
                <td>
                    <a href="{{url('tu/latih/soal/update/'.$soal->id)}}" class="btn btn-outline-primary btn-sm">Update</a> 
                    @method('DELETE') {{csrf_field()}}
                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Delete </button>
                </td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
  </div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    
      <form method="POST" action="{{ route('latihsoal.tambah') }}">
        @csrf
        <input type="hidden" name="id_latih" value="{{$id}}">
        <div class="form-group row">
            <label for="soal" class="col-sm-3 col-form-label text-md-right">Pertanyaan</label>
            <div class="col-md-7">
                <textarea id="soal" class="form-control{{ $errors->has('soal') ? ' is-invalid' : '' }}"  name="soal" autofocus rows="3" placeholder="Tulisakan Pertanyaan Disini">{{ old('soal') }}</textarea>
                @if ($errors->has('soal'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('soal') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_1" class="col-sm-3 col-form-label text-md-right">Jawaban a</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_1">
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_1') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_1">
                </div>
                @if ($errors->has('jawaban_1'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jawaban_1') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_2" class="col-sm-3 col-form-label text-md-right">Jawaban b</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_2">
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_2') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_2">
                </div>
                @if ($errors->has('jawaban_2'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jawaban_2') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_3" class="col-sm-3 col-form-label text-md-right">Jawaban c</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_3">
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_3') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_3">
                </div>
                @if ($errors->has('jawaban_3'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jawaban_3') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_4" class="col-sm-3 col-form-label text-md-right">Jawaban d</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_4">
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_4') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_4">
                </div>
                @if ($errors->has('jawaban_4'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jawaban_4') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="jawaban_5" class="col-sm-3 col-form-label text-md-right">Jawaban e</label>
            <div class="col-md-7">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" name="jawaban" value="benar_5">
                    </div>
                  </div>
                  <input type="text" class="form-control {{ $errors->has('jawaban_5') ? ' is-invalid' : '' }}" aria-label="Text input with radio button" name="jawaban_5">
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
                    <button type="submit" class="btn btn-primary">Tambah Soal</button>
                </div>
            </div>
        </form>
  </div>
</div>

</div>


<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="import" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="import">Update </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ route('latihsoal.import') }}" enctype="multipart/form-data">
        @csrf
      <input type="hidden" name="id_latih" value="{{$id}}">
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mata Pelajaran</label>
            <input type="text"  readonly class="form-control" id="mapel">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Import File</label>
            <input type="file" class="form-control" name="file" id="recipient-name">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Import</button>
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
