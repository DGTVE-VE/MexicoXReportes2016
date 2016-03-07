@extends('app') @section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <br>
            <br>
            <h3> <p style="text-align: center";>Usuarios totales por rangos de edades: </p> </h3>
            <br>
            <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['Rango edad', 'Menores a 15','Entre 16 y 20', 'Entre 21 y 25', 'Entre 26 y 30', 'Entre 31 y 35', 'Entre 36 y 40', 'Entre 41 y 45', 'Entre 46 y 50', 'Mas de 50'],
            [ ' ', {{$edad[0]}}, {{$edad[1]}}, {{$edad[2]}}, {{$edad[3]}}, {{$edad[4]}}, {{$edad[5]}}, {{$edad[6]}}, {{$edad[7]}}, {{$edad[8]}}
        ]]);

        var options = {
          title: 'Porcentaje de edades por rangos',
          width: 900,
          
          chart: { title:'Rangos'},
          
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>



        </div>
    </div>
</div>
@endsection