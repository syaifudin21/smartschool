@extends('tu.template')

@section('content')


<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link" href="{{url('/tu/latih/lihat/'.$latihid->id)}}">{{$latihid->nama_latih}}</a>
        </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Soal {{$latihid->nama_latih}}</h1>
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
    <li class="breadcrumb-item"><a href="{{url('tu/latih')}}">Latihan</a></li>
    <li class="breadcrumb-item"><a href="{{url('/tu/latih/lihat/'.$latihid->id)}}">{{$latihid->nama_latih}}</a></li>
    <li class="breadcrumb-item"><a href="{{url('/tu/latih/soal/'.$latihid->id)}}">Soal</a></li>
    <li class="breadcrumb-item active" aria-current="page">Priview</li>
  </ol>
</nav>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="table-responsive-sm">

@foreach($soallall as $soalid)
<div class="card  mb-3" >
  <div class="card-body">
  <div class="media">
    <div class="media-body" style="min-height: 100px">
      {!!$soalid->soal!!}
    </div>
    @if($soalid->lampiran!=null)
    <img class="ml-3" src="{{asset('images/soal/'.$soalid->lampiran)}}" alt="Generic placeholder image">
    @endif
  </div>
  <blockquote class="blockquote text-right">
    <footer class="blockquote-footer">{{tanggal_indo(date('Y-m-d-G-i-s', strtotime($soalid->updated_at)), true)}}</footer>
  </blockquote>

<table id="example" class="table table-hover table-sm" style="width:100%">

    <tr class="{{($soalid->benar_1==1) ? "bg-warning" : "" }}">
      <td width="5%">A. </td>
      <td>{{$soalid->jawaban_1}}</td>
      <td>{{$soalid->lampiran_1}}</td>
    </tr>
    <tr class="{{($soalid->benar_2==1) ? "bg-warning" : "" }}">
      <td width="5%">B. </td>
      <td>{{$soalid->jawaban_2}}</td>
      <td>{{$soalid->lampiran_2}}</td>
    </tr>
    <tr class="{{($soalid->benar_3==1) ? "bg-warning" : "" }}">
      <td width="5%">C. </td>
      <td>{{$soalid->jawaban_3}}</td>
      <td>{{$soalid->lampiran_3}}</td>
    </tr>
    <tr class="{{($soalid->benar_4==1) ? "bg-warning" : "" }}">
      <td width="5%">D. </td>
      <td>{{$soalid->jawaban_4}}</td>
      <td>{{$soalid->lampiran_4}}</td>
    </tr>
    <tr class="{{($soalid->benar_5==1) ? "bg-warning" : "" }}">
      <td width="5%">E. </td>
      <td>{{$soalid->jawaban_5}}</td>
      <td>{{$soalid->lampiran_5}}</td>
    </tr>
</table>
  </div>
  <div class="card-footer ">
    <form method="POST" action="{{url('tu/latih/soal/delete/'.$soalid->id)}}">
        <a href="{{url('tu/latih/soal/update/'.$soalid->id)}}" class="btn btn-outline-primary btn-sm">Update</a> 
        @method('DELETE') {{csrf_field()}}
        <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Delete </button>
    </form>
  </div>
</div>

@endforeach


</div>
    </div>

</div>
@endsection

@section('script')

@endsection
