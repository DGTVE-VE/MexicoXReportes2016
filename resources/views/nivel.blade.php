@extends('app') @section('content')

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            
 
            ['', 'Doctorado = {{$estudio[0]}}', 'Maestria = {{$estudio[1]}}', 'Técnico Superior = {{$estudio[2]}}', 'Licenciatura = {{$estudio[3]}}', 'Bachillerato = {{$estudio[4]}}', 'Secundaria = {{$estudio[5]}}', 'Primaria = {{$estudio[6]}}', 'Ninguno = {{$estudio[7]}}', 'Otros = {{$estudio[8]}}', 'No especificado = {{$estudio[9]}}', 'Doctorado en Ciencias o Ingeniería = {{$estudio[10]}}', 'Doctorado en otra área = {{$estudio[11]}}', 'Nada = {{$estudio[12]}}'],
            ['Grado',{{$estudio[0]}}, {{$estudio[1]}}, {{$estudio[2]}}, {{$estudio[3]}}, {{$estudio[4]}}, {{$estudio[5]}}, {{$estudio[6]}}, {{$estudio[7]}},  {{$estudio[8]}}, {{$estudio[9]}}, {{$estudio[10]}}, {{$estudio[11]}}, {{$estudio[12]}}
                                                         ]]);
            
        var options = {
          chart: {
            title: 'Nivel de estudios usuarios',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
     <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br>            
            <h3> <p style="text-align: center";>Usuarios por Nivel de estudios: </p> </h3>

            <br>          
      
    <div id="columnchart_material" style="width: 900px; height: 500px;"></div>
     </div>
    </div>
</div>
  </body>
</html>  
@endsection