@extends('template')

@section('title')

@section('content')

<div class="contitle">
      <h1>Dashboard</h1>
    </div>

      <!-- card -->
    <div class="row">
      <div class="card">
        <div class="cardbody">
          <div class="cardcontent">
            <h3>Data Pemain</h3>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAaNJREFUWEftl/E1xEAQh7+rgA7QARWgAyqgg6MCdEAFqIASqIAOnA7owPt52Rc5m83MJLmX88y/md359pfZmdkZE7PZxHj4U0CbwBw4AnYrpV+BR+AG+IioH1XoAHgABJUzwRwDT16oCJDUeDEG2gOkmtkiQAtgyxhBvjtG3283L9ApcOsJUP065ZXJvEB3wIlp59rpHtBBTOYFUpLum3aunZ4BXQKTrT3QJXBhOmrtdA5cW9d4FdoG3qybV366ZbptJvMCaVOdVhXaYqrYZxbH5BMB0lpLcruSuS+Q1iufdPqNJQU+KxX13W1RhX4GyjVXN8gQCoWDlhYOodCgYBEgdXs11zQDtQGpy7+P2e2VpOpjqkUeUw1SD7yyLLIoJCU0jHlBluMLTENbcT7qAoqMGyUhNEmqlUixrJWAPJOh5W8kH0EdtilVAvJMhh4g+bZOkm1Aka7uhcpOAW1AY6qTwLMq5YDGyp2cgr9GkxyQepOu+SpMZaDxAMgBrSJ/0mFVLBtTwVoA6YVgfiX0/K8a9BrP7a5K3TOef/k/UJdmk1PoCwoEPyUPf8g3AAAAAElFTkSuQmCC" style="height: 40px;width: 40px;"/>
            <h5>+250</h5>
          </div>
        </div>
        <div class="cardbody">
          <div class="cardcontent">
            <h3>Data Game</h3>
            <img src="https://cdn-icons-png.flaticon.com/512/75/75524.png" style="width: 40px; height: 40px;"/>
            <h5>+250</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- card shadow -->
    <div class="roww">
      <div class="cardd">
        <div class="cardbodyy">
          <div class="cardcontentt">
            <h3>Data Pemain</h3>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAaNJREFUWEftl/E1xEAQh7+rgA7QARWgAyqgg6MCdEAFqIASqIAOnA7owPt52Rc5m83MJLmX88y/md359pfZmdkZE7PZxHj4U0CbwBw4AnYrpV+BR+AG+IioH1XoAHgABJUzwRwDT16oCJDUeDEG2gOkmtkiQAtgyxhBvjtG3283L9ApcOsJUP065ZXJvEB3wIlp59rpHtBBTOYFUpLum3aunZ4BXQKTrT3QJXBhOmrtdA5cW9d4FdoG3qybV366ZbptJvMCaVOdVhXaYqrYZxbH5BMB0lpLcruSuS+Q1iufdPqNJQU+KxX13W1RhX4GyjVXN8gQCoWDlhYOodCgYBEgdXs11zQDtQGpy7+P2e2VpOpjqkUeUw1SD7yyLLIoJCU0jHlBluMLTENbcT7qAoqMGyUhNEmqlUixrJWAPJOh5W8kH0EdtilVAvJMhh4g+bZOkm1Aka7uhcpOAW1AY6qTwLMq5YDGyp2cgr9GkxyQepOu+SpMZaDxAMgBrSJ/0mFVLBtTwVoA6YVgfiX0/K8a9BrP7a5K3TOef/k/UJdmk1PoCwoEPyUPf8g3AAAAAElFTkSuQmCC" style="height: 40px;width: 40px;"/>
            <h5>+250</h5>
          </div>
        </div>
        <div class="cardbodyy">
          <div class="cardcontentt">
            <h3>Data Game</h3>
            <img src="https://cdn-icons-png.flaticon.com/512/75/75524.png" style="width: 40px; height: 40px;"/>
            <h5>+250</h5>
          </div>
        </div>
      </div>
      <div class="barr">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
     
     
     <canvas id="myChart" style="width:120%;max-width:1000px;"></canvas>
     
     <script>
     var xValues = ["PUBG", "FREE FIRE", "VALORANT", "AMOUNG US", "GENSHIN"];
     var yValues = [25, 49, 34, 30, 22];
     var barColors = ["blue", "blue","blue","blue","blue"];
     
     new Chart("myChart", {
       type: "bar",
       data: {
         labels: xValues,
         datasets: [{
           backgroundColor: barColors,
           data: yValues
         }]
       },
       options: {
         legend: {display: false},
         title: {
           display: true,
           text: "Mabar Coy Production 2022"
         }
       }
     });
     </script>
     </div>
    </div>
@endsection