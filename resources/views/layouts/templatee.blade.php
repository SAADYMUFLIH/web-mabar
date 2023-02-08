<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dashboard /@yield('title')</title>
    <link rel="stylesheet" href="/input.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font google -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Noto+Sans+JP:wght@100&family=Oswald:wght@200;300;400&family=Poppins:wght@100;300;400;500;600;700&family=Quicksand:wght@300;400&family=Roboto+Mono&family=Roboto:wght@400;500;700&family=Rubik:wght@300;500;600;800&display=swap" rel="stylesheet">

    
  </head>
  <body>
    <div class="contain">
      <div class="sdbar">
      <menu class="menu">
        <div class="sidetop">
          <div class="logoo">
            <img src="/img/stik.png" alt="">
          </div>
          <div class="menu__top">
            <p><span>MABAR</span> COYY</p>
           </div>
        </div>
  
        <nav class="menu__nav nav">
          <ul class="nav__list">
            <li class="nav__item" data-text="Dashboard">
              <a href="/Dashboard" class="nav__item-link link">
                <span><iconify-icon icon="ic:round-home"></iconify-icon></span>
                <p class="link__text">Dashboard</p>
              </a>
            </li>
            <li class="nav__item" data-text="Data Pemain">
              <a href="" class="nav__item-link link">
                <span><iconify-icon icon="ic:baseline-bar-chart"></iconify-icon></span>
                <p class="link__text">Data Pemain</p>
              </a>
            </li>
            <li class="nav__item" data-text="Data Pemain">
              <a href="/game" class="nav__item-link link">
                <span><iconify-icon icon="ic:baseline-bar-chart"></iconify-icon></span>
                <p class="link__text">Data Game</p>
              </a>
            </li>
          </ul>
      </menu>
      </div>
      <div class="topbar">
        <div class="itemtop">
          <h1 style="color: white;">.</h1>
          <ul>
            <li>Saady Muflih</li>
            <li class="menu-item">
              <a href="#0">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAaNJREFUWEftl/E1xEAQh7+rgA7QARWgAyqgg6MCdEAFqIASqIAOnA7owPt52Rc5m83MJLmX88y/md359pfZmdkZE7PZxHj4U0CbwBw4AnYrpV+BR+AG+IioH1XoAHgABJUzwRwDT16oCJDUeDEG2gOkmtkiQAtgyxhBvjtG3283L9ApcOsJUP065ZXJvEB3wIlp59rpHtBBTOYFUpLum3aunZ4BXQKTrT3QJXBhOmrtdA5cW9d4FdoG3qybV366ZbptJvMCaVOdVhXaYqrYZxbH5BMB0lpLcruSuS+Q1iufdPqNJQU+KxX13W1RhX4GyjVXN8gQCoWDlhYOodCgYBEgdXs11zQDtQGpy7+P2e2VpOpjqkUeUw1SD7yyLLIoJCU0jHlBluMLTENbcT7qAoqMGyUhNEmqlUixrJWAPJOh5W8kH0EdtilVAvJMhh4g+bZOkm1Aka7uhcpOAW1AY6qTwLMq5YDGyp2cgr9GkxyQepOu+SpMZaDxAMgBrSJ/0mFVLBtTwVoA6YVgfiX0/K8a9BrP7a5K3TOef/k/UJdmk1PoCwoEPyUPf8g3AAAAAElFTkSuQmCC"/>
              </a>
              <ol class="sub-menu">
                <li class="sub-menu-item"><a href="#0"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="height: 30px; width: 30px; margin-left: -5px; padding-top: 5px;"><path fill="currentColor" d="M5 21q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h7v2H5v14h7v2Zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5Z"/></svg>Logout</a></li>
              </ol>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </div>

<div class="cardcontent">
  @yield('content')
</div>
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  </body>
</html>
