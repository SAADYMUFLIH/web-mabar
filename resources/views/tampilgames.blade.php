@extends('templatee')

@section('title')

@section('content')
<div class="contitle">
      <h1>Edit Data Game</h1>
    </div>

    <div class="card">
        <form action="/updategame/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            <table>
                @csrf
                    <tr>
                        <td>Foto</td>
                        <td><input type="file" name="foto" class="foto" value="{{ $data->foto }}"></td>
                    </tr>
                    <tr>
                        <td>Game</td>
                        <td><input type="text" name="nama_game" placeholder="Nama" value="{{ $data->nama_game }}"></td>
                    </tr>
                    <tr>
                        <td>Versi Game</td>
                        <td><input type="text" name="versi_game" placeholder="Versi" value="{{ $data->versi_game }}"></td>
                    </tr>
                    <div class="btn-data">
                        <button class="ara" type="submit"><p>Save</p></button>
                    </div>
            </table>
        </form>
    </div>
@endsection