@extends('templatee')

@section('title')

@section('content')
<div class="contitle">
      <h1>Tambah Data Pemain</h1>
    </div>

    <div class="card">
        <form action="/insertpemain" method="POST" enctype="multipart/form-data">
            <table>
                @csrf
                    <tr>
                        <td>Foto</td>
                        <td><input type="file" name="foto" required="required" class="foto"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="name" required="required" placeholder="Nama"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" required="required" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><input type="text" name="keterangan" required="required" placeholder="keterangan"></td>
                    </tr>
                    <div class="btn-data">
                        <button class="ara" type="submit"><p>Save</p></button>
                    </div>
            </table>
        </form>
    </div>
@endsection