@extends('tu.template')

@section('content')
<div class="card">
<div class="card-header">
<ul class="nav nav-pills card-header-pills">
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/tu/mapel/lihat/'.$id)}}">{{$mapelid->mapel}}</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/tu/mapel/update/'.$id)}}">Update</a>
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
    <tr><td width="30%">Nama Mapel</td><td><b>{{$mapelid->mapel}}</b></td></tr>
    <tr><td>Deskripsi</td><td>{!!$mapelid->deskripsi!!}</td></tr>
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
