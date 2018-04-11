@extends('tu.template')

@section('content')


 <select class="form-control" name="jenis_mapel" id="kelas">
    @foreach($kelas as $kel)
    <option value="{{$kel->id}}">{{$kel->nama_kelas}}</option>
    @endforeach
</select>

<table class="table table-bordered table-striped table-hover table-condensed tfix">
                <thead align="center">
                    <tr>
                        <td><b>ID Mapel</b></td>
                        <td><b>Nama Mapel</b></td>
                        <td><b>Id Guru</b></td>
                    </tr>
                </thead>
                <tbody id="mapel">
                @foreach($mapel as $mapel)
                    <tr>
                        <td>{{ $mapel->id_kelas }}</td>
                        <td>{{ $mapel->id_mapel }}</td>
                        <td>{{ $mapel->id_guru }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
      $('#kelas').on('change', function(e){
          var id = e.target.value;
          $.get('{{ url('coba')}}/'+id, function(data){
              console.log(id);
              console.log(data);
              $('#mapel').empty();
              $.each(data, function(index, element){
                  $('#mapel').append("<tr><td>"+element.id_kelas+"</td><td>"+element.id_mapel+"</td>"+
                  "<td>"+element.id_guru+"</td></tr>");
              });
          });
      });
  });
</script>
@endsection