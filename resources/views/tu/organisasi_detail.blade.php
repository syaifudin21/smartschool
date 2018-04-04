@extends('tu.template')

@section('content')
<div class="card">
<div class="card-header">
<ul class="nav nav-pills card-header-pills">
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/tu/organisasi/lihat/'.$id)}}">{{$organisasiid->nama_organisasi}}</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/tu/organisasi/update/'.$id)}}">Update</a>
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
    <tr><td width="30%">Nama Pengumuman</td><td><b>{{$organisasiid->nama_organisasi}}</b></td></tr>
    <tr><td>Visi</td><td><b>{{$organisasiid->visi}}</b></td></tr>
    <tr><td>Misi</td><td><b>{{$organisasiid->misi}}</b></td></tr>
    <tr><td>Tanggal Berdiri</td><td><b>{{$organisasiid->tanggal_berdiri}}</b></td></tr>
    <tr><td>Pembina</td><td><b>{{$organisasiid->name}}</b></td></tr>
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
