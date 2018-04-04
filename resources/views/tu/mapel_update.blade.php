@extends('tu.template')

@section('content')
<div class="card">
<div class="card-header">
<ul class="nav nav-pills card-header-pills">
  <li class="nav-item">
    <a class="nav-link" href="{{url('/tu/mapel/lihat/'.$id)}}">{{$mapelid->mapel}}</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/tu/mapel/update/'.$id)}}">Update</a>
  </li>
</ul>
</div>

<div class="card-body">
    <form method="POST" action="{{ route('mapel.update') }}">
        @method('PUT')
        @csrf
        <input type="hidden" name="id_mapel" value="{{$id}}">
        <div class="form-group row">
            <label for="mapel" class="col-sm-4 col-form-label text-md-right">Mata Pelajaran</label>
            <div class="col-md-6">
                <input id="mapel" type="text" class="form-control{{ $errors->has('mapel') ? ' is-invalid' : '' }}" name="mapel" value="{{$mapelid->mapel}}" required autofocus>
                @if ($errors->has('mapel'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('mapel') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-sm-4 col-form-label text-md-right">Deskripsi</label>
            <div class="col-md-6">
                <input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{$mapelid->deskripsi}}" required autofocus>
                @if ($errors->has('deskripsi'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('deskripsi') }}</strong>
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
<script type="text/javascript">
    $('#example').DataTable();
</script>
@endsection
