@extends('tu.template')

@section('content')

<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/tu/kelas/lihat/'.$id)}}">{{$kelasid->nama_kelas}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/tu/kelas/update/'.$id)}}">Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{url('/tu/kelas/mapel/'.$id)}}">Tambah Mapel</a>
      </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Kelas {{$kelasid->nama_kelas}}</h1>
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
    <li class="breadcrumb-item"><a href="{{url('tu/kelas')}}">Kelas</a></li>
    <li class="breadcrumb-item"><a href="{{url('/tu/kelas/lihat/'.$id)}}">{{$kelasid->nama_kelas}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Mata Pelajaran</li>
  </ol>
</nav>


<div class="card">

<div class="card-body">

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
    <form method="POST" action="{{ route('kelasmapel.tambah') }}">
        @csrf
        <input type="hidden" name="id_kelas" value="{{$id}}">
        <div class="form-group row">
            <label for="id_guru" class="col-sm-4 col-form-label text-md-right">Maata Pelajaran</label>
            <div class="col-md-6">
                <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="mapel_kelas">
                    @foreach($mapel as $mapel)
                    <option value="{{$mapel->id}}">{{$mapel->mapel}}</option>
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
                    <button type="submit" class="btn btn-primary">Tambah Mapel</button>
                </div>
            </div>
        </form>
        <br>
        <table class="table table-sm table-hover">
        @foreach($kelasmapel as $kelasmapel)
            <tr>
                <td> {{$kelasmapel->mapel}} </td>
                <form method="POST" action="{{url('tu/kelas/mapel/delete/'.$kelasmapel->id)}}">
                <td>
                    @method('DELETE') {{csrf_field()}}
                    <button type="submit" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash"></i> Delete </button>
                </td>
                </form>
            </tr>
        @endforeach
        </table>
</div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
</script>
@endsection
