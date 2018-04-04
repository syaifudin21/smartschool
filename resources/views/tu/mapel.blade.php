@extends('tu.template')

@section('content')
<div class="card">
<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mata Pelajaran</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tambah" role="tab" aria-controls="profile" aria-selected="false">Tambah</a>
        </li>
    </ul>
</div>

<div class="card-body">

@if(Session::has('success'))
    <div class="alert alert-info alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('success') }}
    </div>
@endif

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        
<div class="table-responsive-sm">
<table id="example" class="table table-hover table-sm" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Mata Pelajaran</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $n=1;?>
        <tbody>
            @foreach($mapel as $mapel)
            <tr>
                <td>{{$n++}}</td>
                <td>{{$mapel->mapel}}</td>
                <td>{{$mapel->deskripsi}}</td>
                <form method="POST" action="{{url('tu/mapel/delete/'.$mapel->id)}}">
                <td><a href="{{url('tu/mapel/lihat/'.$mapel->id)}}" class="btn btn-outline-success btn-sm">Lihat</a> <a href="{{url('tu/mapel/update/'.$mapel->id)}}" class="btn btn-outline-primary btn-sm">Update</a> 
                    @method('DELETE') {{csrf_field()}}
                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Delete </button>
                </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </div>

    <div class="tab-pane fade" id="tambah" role="tabpanel" aria-labelledby="profile-tab">
    <form method="POST" action="{{ route('mapel.tambah') }}">
        @csrf
        <div class="form-group row">
            <label for="mapel" class="col-sm-4 col-form-label text-md-right">Mata Pelajaran</label>
            <div class="col-md-6">
                <input id="mapel" type="text" class="form-control{{ $errors->has('mapel') ? ' is-invalid' : '' }}" name="mapel" value="{{ old('mapel') }}" required autofocus>
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
                <input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ old('deskripsi') }}" required autofocus>
                @if ($errors->has('deskripsi'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('deskripsi') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        
            <div class="form-group row">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('#example').DataTable();
</script>
@endsection