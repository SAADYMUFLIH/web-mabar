@extends('templatee')

@section('title')

@section('content')
<div class="contitle">
      <h1>Tambah Data Game</h1>
    </div>

    <div class="card">
        <form action="/insertgame" method="POST" enctype="multipart/form-data">
            <table>
                @csrf
                    <tr>
                        <td>Foto</td>
                        <td><input type="file" name="foto" required="required" class="foto"></td>
                    </tr>
                    <tr>
                        <td>Game</td>
                        <td><input type="text" name="nama_game" required="required" placeholder="Nama"></td>
                    </tr>
                    <tr>
                        <td>Versi Game</td>
                        <td><input type="text" name="versi_game" required="required" placeholder="Versi"></td>
                    </tr>
                    <div class="btn-data">
                        <button class="ara" type="submit"><p>Save</p></button>
                    </div>
            </table>
        </form>
    </div>
@endsection