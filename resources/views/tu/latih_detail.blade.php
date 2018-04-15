@extends('tu.template')

@section('content')

<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/tu/latih/lihat/'.$id)}}">{{$latihid->nama_latih}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tu/latih/update/'.$id)}}">Update</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tu/latih/soal/'.$id)}}">Soal</a>
        </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Latihan {{$latihid->nama_latih}}</h1>
<div class="btn-toolbar mb-2 mb-md-0">
  <div class="btn-group mr-2">
    <a href="{{url('tu/latih/soal/pengumuman/'.$id)}}" class="btn btn-sm btn-outline-secondary">Tambah Pengumuman</a>
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
    <li class="breadcrumb-item active" aria-current="page">{{$latihid->nama_latih}}</li>
  </ol>
</nav>

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
          <tr><td width="30%">Nama Latihan</td><td><b>{{$latihid->nama_latih}}</b></td></tr>
          <tr><td>Tujuan Latihan</td><td><b>{{$latihid->tujuan_latih}}</b></td></tr>
          <tr><td>Jenis Latihan</td><td><b>{{$latihid->jenis_latih}}</b></td></tr>
          <tr><td>Jumlah Soal</td><td><b>{{$totalsoal}} butir</b></td></tr>
          <tr><td>Status</td><td><b>{{$latihid->status}}</b></td></tr>
          <tr><td>Waktu Mulai</td><td><b>{{tanggal(date('Y-m-d-G-i-s', strtotime($latihid->waktu_mulai)), true)}}</b></td></tr>
          <tr><td>Waktu Selesai</td><td><b>{{tanggal(date('Y-m-d-G-i-s', strtotime($latihid->waktu_selesai)), true)}}</b></td></tr>
      </table>
      </div>

<div class="d-flex p-2">
    <h1 class="h3">Pengumuman</h1>
</div>

      <table class="table table-hover table-sm">
        <tr>
          <th>Nama Pengumuman</th>
          <th>Isi Pengumuman</th>
          <th>Mulai</th>
          <th>Selesai</th>
          <th>User</th>
          <th>Objek</th>
          <th></th>
        </tr>
        @foreach($pengumuman as $peng)
        <tr>
          <td>{{$peng->nama_pengumuman}}</td>
          <td>{!! $peng->isi !!}</td>
          <td>{{$peng->waktu_mulai}}</td>
          <td>{{$peng->waktu_selesai}}</td>
          <td>{{$peng->name}}</td>
          <td>{{$peng->objek}}</td>
          <form method="POST" action="{{url('tu/pengumuman/delete/'.$peng->id)}}">
          <td><a href="{{url('tu/pengumuman/lihat/'.$peng->id)}}" class="btn btn-outline-success btn-sm">Lihat</a> 
            @if(Auth::user()->id == $peng->id_user)
            <a href="{{url('tu/pengumuman/update/'.$peng->id)}}" class="btn btn-outline-primary btn-sm">Update</a> 
              @method('DELETE') {{csrf_field()}}
              <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Delete </button>
            @endif
          </td>
          </form>
        </tr>
        @endforeach
      </table>
     

    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('#example').DataTable();
</script>
@endsection
