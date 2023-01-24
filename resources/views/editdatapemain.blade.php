@extends('templatee')

@section('title')

@section('content')
<div class="contitle">
      <h1>Edit Data Game</h1>
    </div>

    <div class="card">
        <form action="/updatepemain/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            <table>
                @csrf
                    <tr>
                        <td>Foto</td>
                        <td><input type="file" name="foto" class="foto" value="{{ $data->foto }}"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="name" placeholder="Nama" value="{{ $data->name }}"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" placeholder="Versi" value="{{ $data->username }}"></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><input type="text" name="keterangan" placeholder="Versi" value="{{ $data->keterangan }}"></td>
                    </tr>
                    <div class="btn-data">
                        <button class="ara" type="submit"><p>Save</p></button>
                    </div>
            </table>
        </form>
    </div>
@endsection