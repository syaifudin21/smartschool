@extends('tu.template')

@section('content')
<div class="card">
<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Organisasi</a>
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
        {!! Session::get('success') !!}
    </div>
@endif

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="table-responsive-sm">
<table id="example" class="table table-hover table-sm" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Organisasi</th>
                <th>Tahun Berdiri</th>
                <th>Pembina</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $n=1;?>
        <tbody>
            @foreach($organisasi as $org)
            <tr>
                <td>{{$n++}}</td>
                <td>{{$org->nama_organisasi}}</td>
                <td>{{tanggal(date('Y-m-d-G-i-s', strtotime($org->tanggal_berdiri)), true)}}</td>
                <td>{{$org->name}}</td>
                <form method="POST" action="{{url('tu/organisasi/delete/'.$org->id)}}">
                <td><a href="{{url('tu/organisasi/lihat/'.$org->id)}}" class="btn btn-outline-success btn-sm">Lihat</a> <a href="{{url('tu/organisasi/update/'.$org->id)}}" class="btn btn-outline-primary btn-sm">Update</a> 
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
    <form method="POST" action="{{ route('organisasi.tambah') }}">
        @csrf
        <div class="form-group row">
            <label for="nama_organisasi" class="col-sm-4 col-form-label text-md-right">Nama Organisasi</label>
            <div class="col-md-6">
                <input id="nama_organisasi" type="text" class="form-control{{ $errors->has('nama_organisasi') ? ' is-invalid' : '' }}" name="nama_organisasi" value="{{ old('nama_organisasi') }}" required autofocus>
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
                <textarea id="visi" class="form-control{{ $errors->has('visi') ? ' is-invalid' : '' }}"  name="visi" autofocus rows="3">{{ old('visi') }}</textarea>
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
                <textarea id="misi" class="form-control{{ $errors->has('misi') ? ' is-invalid' : '' }}"  name="misi" autofocus rows="3">{{ old('misi') }}</textarea>
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
                <input id="tanggal_berdiri" type="date" class="form-control{{ $errors->has('tanggal_berdiri') ? ' is-invalid' : '' }}" name="tanggal_berdiri" value="{{ old('tanggal_berdiri') }}" required autofocus>
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
