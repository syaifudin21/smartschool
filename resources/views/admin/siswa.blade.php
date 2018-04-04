@extends('admin.template')

@section('content')
<div class="card">
<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Siswa</a>
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
            <th>Username</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php $n=1;?>
    <tbody>
        @foreach($siswa as $sis)
        <tr>
            <td>{{$n++}}</td>
            <td>{{$sis->username}}</td>
            <td><a href="" class="btn btn-outline-primary btn-sm">Lihat</a></td>
        </tr>
        @endforeach
    </tbody>
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
