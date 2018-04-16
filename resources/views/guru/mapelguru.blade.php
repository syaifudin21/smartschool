@extends('guru.template')

@section('content')

<div class="nav-scroller bg-white box-shadow">
   <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="">Matapelajaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Update</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Tambah Mapel</a>
        </li>
    </ul>
</div>

<br><br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h1 class="h2">Kelas</h1>
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
    <li class="breadcrumb-item"><a href="">Kelas</a></li>
    <li class="breadcrumb-item active" aria-current="page"></li>
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
    
</table>

<div class="d-flex">
  <div class="p-2">
<h1 class="h3">Daftar Siswa</h1>
  </div>
  <div class="ml-auto p-2">
    <div class="dropdown">
      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span data-feather="clipboard"></span> Load Data Kelas
      </button>
      <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#load" data-ket="Tambah dan Load Data">Tambah dan Load Data</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#load" data-ket="Hapus dan Load Data">Hapus dan Load Data</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#load" data-ket="Hapus Semua Mapel">Hapus Semua Mapel</a>
      </div>
    </div>
    {{-- <button class="btn btn-sm btn-outline-secondary">Tambah dan Load Data Keals Lain</button> --}}
</div>
</div>
<table class="table table-sm table-hover">
          <thead>
            <tr>
                <th>Nama Mata Pelajaran</th>
                <th class="text-center">Nilai 1</th>
                <th class="text-center">Nilai 2</th>
                <th class="text-center">Nilai 3</th>
                <th class="text-center">Nilai 4</th>
                <th class="text-center">Nilai 5</th>
                <th class="text-center">Nilai UTS</th>
                <th class="text-center">Nilai Semester</th>
            </tr>
          </thead>
        </table>
</div>
    </div>

</div>

@endsection

@section('script')
@endsection
