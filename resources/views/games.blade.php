@extends('template')

@section('title')

@section('content')
<div class="laravel-content">
  <div class="btncont">
    <div class="btn-data">
      <p><a href="/tambahgame">+ Tambah</a></p>
    </div>
    <div class="wrap">
      <div class="search">
        <form action="/game" method="GET">
          <input type="search" name="search" class="searchTerm" placeholder="Search...">
        </form>
      </div>
   </div>
  </div>

  <div class="contitle">
    <h1>Data Game</h1>
  </div>
</div>

  <table id="tbl">
    <tr>
      <th>ID</th>
      <th>Foto</th>
      <th>Nama Game</th>
      <th>Versi Game</th>
      <th>Ditambahkan</th>
      <th class="action">Action</th>
    </tr>
           @php
              $no = 1;
            @endphp
            @foreach ($data as $g)
            <tr>
            <td>{{ $no++ }}</td>
            <td>
            <img src="{{'fotopemain/'.$g->foto}}" alt="" style="width: 50px; height:50px; border-radius: 50%;">
            </td>
            <td>{{$g->nama_game}}</td>
            <td>{{$g->versi_game}}</td>
            <td>{{ $g->created_at->format('D M Y') }}</td>
            <td> 
                <button style="margin-right:-20px;"> <a href='/tampilgame/{{ $g->id }}' ><iconify-icon icon="material-symbols:edit-square-outline"></iconify-icon></a></button>
                <button style="margin-left: -20px;"> <a href='/deletegame/{{ $g->id }}'><iconify-icon icon="uil:trash"></iconify-icon></a></button>
            </td>
            </tr>
            @endforeach
</table>
{{$data->links('pagination::bootstrap-4 ')}}
</div>
@endsection


 