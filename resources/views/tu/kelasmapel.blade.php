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
                    <option>Pilih Mata Pelajaran</option>
                    @foreach($mapel as $map)
                    <option value="{{$map->id}}">{{$map->mapel}}</option>
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
            <label for="jam" class="col-sm-4 col-form-label text-md-right">Jumlah Jam</label>
            <div class="col-md-6">
                <input id="jam" type="text" class="form-control{{ $errors->has('jam') ? ' is-invalid' : '' }}" name="jam" value="{{ old('jam') }}" required autofocus>

                @if ($errors->has('jam'))
                    <span class="invalid-feedback">
                        <strong>Mohon jangan kosongkan bagian ini</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="id_guru" class="col-sm-4 col-form-label text-md-right">Pembimbing</label>
            <div class="col-md-6">
                <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="id_guru">
                    <option value="">Pilih Pembimbing</option>
                    @foreach($guru as $guruid)
                    <option value="{{$guruid->id}}">{{$guruid->name}}</option>
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
            <tr>
                <th>Nama mapel</th>
                <th>Jumlah Jam</th>
                <th>Pembimbing</th>
                <th></th>
            </tr>
        @foreach($kelasmapel as $kelasmapel)
            <tr>
                <td> {{$kelasmapel->mapel}} </td>
                <td> {{$kelasmapel->jam}} </td>
                <td> <?php $nama = App\User::where('id',$kelasmapel->id_guru)->first();?>
                    @if($nama != null)
                    {{$nama->name}} 
                    @else
                    @endif
                </td>
                <form method="POST" action="{{url('tu/kelas/mapel/delete/'.$kelasmapel->id)}}">
                <td>
                    @method('DELETE') {{csrf_field()}}
                    
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal"
                    data-id="{{$kelasmapel->id}}" 
                    data-nama_mapel="{{$kelasmapel->mapel}}" 
                    data-id_mapel="{{$kelasmapel->id}}"
                    @if($nama != null)
                    data-nama="{{$nama->name}}"
                    @endif
                    data-id_guru="{{$kelasmapel->id_guru}}"
                    data-jam="{{$kelasmapel->jam}}"
                    >Update</button>

                    <button type="submit" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash"></i> Delete </button>
                </td>
                </form>
            </tr>
        @endforeach
        </table>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ route('kelasmapel.update') }}">
        @csrf @method('PUT')
      <input type="hidden" name="id" id="id">
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mata Pelajaran</label>
              <select class="form-control" name="id_mapel">
                  <span id="mapel"></span>
                  @foreach($mapel as $map)
                  <option value="{{$map->id}}">{{$map->mapel}}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jumlah Jam</label>
            <input id="jam" type="text" class="form-control" name="jam" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pembimbing</label>
              <select id="guru" class="form-control" name="id_guru">
                  @foreach($guru as $guruid)
                  <option value="{{$guruid->id}}">{{$guruid->name}}</option>
                  @endforeach
              </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
      $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var id = button.data('id') 
          var id_mapel = button.data('id_mapel') 
          var id_guru = button.data('id_guru') 
          var nama = button.data('nama') 
          var nama_mapel = button.data('nama_mapel') 
          var jam = button.data('jam') 
          var modal = $(this)

          modal.find('.modal-title').text('Update ' + nama_mapel)
          modal.find('#guru').append("<option value=" + id_guru + ">" + nama +"</option>")
          modal.find('#mapel').append("<option value=" + id_mapel + ">" + nama_mapel +"</option>")
          modal.find('#jam').val(jam)
          modal.find('#id').val(id)
          
        })
    </script>
@endsection
