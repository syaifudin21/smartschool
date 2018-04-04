@extends('tu.template')

@section('content')
<div class="card">
<div class="card-header">
<ul class="nav nav-pills card-header-pills">
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
    <tr><td width="30%">Nama Latihan</td><td><b>{{$latihid->nama_latih}}</b></td></tr>
    <tr><td>Tujuan Latihan</td><td><b>{{$latihid->tujuan_latih}}</b></td></tr>
    <tr><td>Jenis Latihan</td><td><b>{{$latihid->jenis_latih}}</b></td></tr>
    <tr><td>Status</td><td><b>{{$latihid->status}}</b></td></tr>
    <tr><td>Waktu Mulai</td><td><b>{{tanggal(date('Y-m-d-G-i-s', strtotime($latihid->waktu_mulai)), true)}}</b></td></tr>
    <tr><td>Waktu Selesai</td><td><b>{{tanggal(date('Y-m-d-G-i-s', strtotime($latihid->waktu_selesai)), true)}}</b></td></tr>
</table>
</div>
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
