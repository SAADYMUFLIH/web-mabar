@extends('layouts.template')

@section('title')

@section('content')

<div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Dashboard</span>
      <input type="text" placeholder="Search..." style="width: 56%; height: 30px;">
    </div>
    <div class="topright">
      <ul>
        <li>Kazuhaaa</li>
        <li><img src="image/Kazuha.jpg" alt="profileImg"></li>
        <li><iconify-icon icon="ant-design:setting-filled"></iconify-icon></li>
      </ul>
    </div>
    <div class="contain">
      <div class="hero-img">
        <div class="hero-img-text">
          <p>Valorant</p>
          <h3>Best Tactical Shooter Game.</h3>
          <button>Play Free</button>
          <img src="image/Phoenix_Artwork_Full-removebg-preview.png" alt="">
        </div>
      </div>
      <div class="kanannya-hero-img">
        <p>Kotak Ke-2</p>
      </div>
    </div>
    <div class="contain-1">
      <p>List Games (Scroll)</p>
      <div class="kotak-1">
        <div class="kotak-1-scroll">
          <div class="item-games">Valorant</div>
          <div class="item-games">Genshin Impact</div>
          <div class="item-games">Point Blank</div>
          <div class="item-games">Fall Guys</div>
          <div class="item-games">PUBG</div>
          <div class="item-games">Apex Legends</div>
          <div class="item-games">Multiplayer 1</div>
          <div class="item-games">Multiplayer 2</div>
          <div class="item-games">Multiplayer 3</div>
          <div class="item-games">Multiplayer 4</div>
        </div>
      </div>
      <div class="kotak-2">
        <div class="grid">
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="image/VAL_2560x1440-a875b64f871200771ee9397df1d7050b.jpeg" alt="Valorant" />
              <div class="card-content">
                <h1 class="card-header">Valorant</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="image/maxresdefault.jpg" alt="Genshin Impact" />
              <div class="card-content">
                <h1 class="card-header">Genshin Impact</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="image/deretan-berita-point-blank-terbaru-yang-perlu-kamu-tahu.jpg" alt="Point Blank" />
              <div class="card-content">
                <h1 class="card-header">Point Blank</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="image/Fall-Guys-Key-Art_Thumb_JPG.jpg" alt="Fall Guys" />
              <div class="card-content">
                <h1 class="card-header">Fall Guys</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="image/capsule_616x353.jpg" alt="PUBG" />
              <div class="card-content">
                <h1 class="card-header">PUBG</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="image/apex-featured-image-16x9.jpg.adapt.crop16x9.1023w.jpg" alt="Apex Legends" />
              <div class="card-content">
                <h1 class="card-header">Apex Legends</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contain-2">
      <p style=" font-size: 20px; font-weight: bold; margin-top: 2rem; padding-bottom: 2rem;">Trend Game 2023</p>
      <!-- <div class="btncont"> -->
        <div class="tbl-card">
          <div class="btn-data">
            <p><a href="{{ Route('Gamepemain') }}">+ Tambah</a></p>
          </div>
          <table id="tbl">
            <tr>
              <th scope="col">Game</th>
              <th scope="col">Nama</th>
              <th scope="col">Jumlah Pemain</th>
              <th scope="col">Aksi</th>
            </tr>
            @foreach ($data as $myData)
            <tr>
              <td>{{ $myData->game->nama_game }}</td>
              <td>{{ $myData->pemain->name }}</td>
              <td>{{ $myData->jumlah }}</td>
              <td>
                <button  class="btn-2"> <a href='#'><iconify-icon icon="uil:trash"></iconify-icon></a></button>
              </td>
            </tr>
            @endforeach
           </table>
        </div>
    </div>
@endsection