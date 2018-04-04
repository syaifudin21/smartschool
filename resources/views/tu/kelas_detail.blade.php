@extends('tu.template')

@section('content')
<div class="card">
<div class="card-header">
<ul class="nav nav-pills card-header-pills">
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/tu/kelas/lihat/'.$id)}}">{{$kelasid->nama_kelas}}</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/tu/kelas/update/'.$id)}}">Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/tu/kelas/mapel/'.$id)}}">Tambah Mapel</a>
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
    <tr><td width="30%">Nama Kelas</td><td><b>{{$kelasid->nama_kelas}}</b></td></tr>
    <tr><td>Wali Kelas</td><td><b>{{$kelasid->name}}</b></td></tr>
    <tr><td>Tahun Ajaran</td><td><b>{{$kelasid->tahun_ajaran}}</b></td></tr>
    <tr><td>Total Siswa</td><td><b>40</b></td></tr>
    <tr><td>Total Mapel</td><td><b>{{count($kelasmapel)}}</b></td></tr>
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
