@extends('template')

@section('title')

@section('content')
<div class="laravel-content">
  <div class="btncont">
    <div class="btn-data">
      <p><a href="/tambahpemain">+ Tambah</a></p>
    </div>
    <div class="wrap">
      <div class="search">
        <form action="/pemain" method="GET">
          <input type="search" name="search" class="searchTerm" placeholder="Search...">
        </form>
      </div>
   </div>
  </div>

  <div class="contitle">
    <h1>Data Pemain</h1>
  </div>
</div>

  <table id="tbl">
         <tr>
            <th scope="col">Id</th>
            <th scope="col">Foto</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Di buat</th>
            <th scope="col">Aksi</th>
        </tr>
           @php
              $no = 1;
            @endphp
            @foreach ($data as $d)
            <tr>
            <td>{{ $no++ }}</td>
            <td>
            <img src="{{'fotopemain/'. $d->foto }}" alt="" style="width: 50px; height:50px; border-radius: 50%;">
            </td>
            <td>{{$d->name}}</td>
            <td>{{$d->username}}</td>
            <td>{{$d->keterangan}}</td>
            <td>{{ $d->created_at->format('D M Y') }}</td>
            <td> 
                <button style="margin-right:-20px;"> <a href='/tampilkandata/{{ $d->id }}' ><iconify-icon icon="material-symbols:edit-square-outline"></iconify-icon></a></button>
                <button style="margin-left: -20px;"> <a href='/deletedata/{{ $d->id }}'><iconify-icon icon="uil:trash"></iconify-icon></a></button>
            </td>
            </tr>
            @endforeach
      </table>
      {{$data->links('pagination::bootstrap-4 ')}}
      </div>
@endsection


 