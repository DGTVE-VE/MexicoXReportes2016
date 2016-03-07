@extends('app') @section('content')

<html>
  <head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>   
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type='text/javascript'>
     google.charts.load('current', {'packages': ['geochart']});
     google.charts.setOnLoadCallback(drawMarkersMap);

      function drawMarkersMap() {
      var data = google.visualization.arrayToDataTable([
        ['Ciudad',   'Usuarios'],
        ['Aguascalientes', {{$geo[0]}}],
        ['Baja California', {{$geo[1]}}],
        ['Baja California Sur', {{$geo[2]}}],
        ['Campeche', {{$geo[3]}}],
        ['Chiapas', {{$geo[4]}}],
        ['Chihuahua', {{$geo[5]}}],
        ['Coahuila',  {{$geo[6]}}],
        ['Colima', {{$geo[7]}}],
        ['Distrito Federal', {{$geo[8]}}],
        ['Durango',  {{$geo[9]}}],
        ['Guanajuato', {{$geo[10]}}],
        ['Guerrero', {{$geo[11]}}],
        ['Hidalgo', {{$geo[12]}}],
        ['Jalisco', {{$geo[13]}}],
        ['México', {{$geo[14]}}],
        ['Michoacán', {{$geo[15]}}],
        ['Morelos', {{$geo[16]}}],
        ['Nayarit', {{$geo[17]}}],
        ['Nuevo León', {{$geo[18]}}],
        ['Oaxaca', {{$geo[19]}}],
        ['Puebla', {{$geo[20]}}],
        ['Querétaro', {{$geo[21]}}],
        ['Quintana Roo', {{$geo[22]}}],
        ['San Luis Potosí', {{$geo[23]}}],
        ['Sinaloa',  {{$geo[24]}}],
        ['Sonora',  {{$geo[25]}}],
        ['Tabasco', {{$geo[26]}}],
        ['Tamaulipas', {{$geo[27]}}],
        ['Tlaxcala', {{$geo[28]}}],
        ['Veracruz', {{$geo[29]}}],
        ['Yucatán', {{$geo[30]}}],
        ['Zacatecas', {{$geo[31]}}]
          
      ]);

      var options = {
        region: 'MX',
        displayMode: 'markers',
        colorAxis: {colors: ['green', 'blue']}
      };

      var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    };
    </script>
  </head>
  <body>
    <h3> <p style="text-align: center";>Usuarios por Entidad Federativa: </p> </h3>
    <br>
    
     <div class="container">
    <div class="row">
<div id="chart_div" style="width: 900px; height: 500px;"></div>
        
        <br><br>
        
     <table class="table table-hover">
         <tr class="danger"><td>Estado</td><td>Usuarios</td></tr>
         <tr><td>Aguascalientes</td><td>{{$geo[0]}}</td></tr>
         <tr><td>Baja California</td><td>{{$geo[1]}}</td></tr>
         <tr><td>Baja California Sur</td><td>{{$geo[2]}}</td></tr>
         <tr><td>Campeche</td><td>{{$geo[3]}}</td></tr>
         <tr><td>Chiapas</td><td>{{$geo[4]}}</td></tr>
         <tr><td>Chihuahua</td><td>{{$geo[5]}}</td></tr>
         <tr><td>Coahuila</td><td>{{$geo[6]}}</td></tr>
         <tr><td>Colima</td><td>{{$geo[7]}}</td></tr>
         <tr><td>Distrito Federal</td><td>{{$geo[8]}}</td></tr>
         <tr><td>Durango</td><td>{{$geo[9]}}</td></tr>
         <tr><td>Guanajuato</td><td>{{$geo[10]}}</td></tr>
         <tr><td>Guerrero</td><td>{{$geo[11]}}</td></tr>
         <tr><td>Hidalgo</td><td>{{$geo[12]}}</td></tr>
         <tr><td>Jalisco</td><td>{{$geo[13]}}</td></tr>
         <tr><td>México</td><td>{{$geo[14]}}</td></tr>
         <tr><td>Michoacán</td><td>{{$geo[15]}}</td></tr>
         <tr><td>Morelos</td><td>{{$geo[16]}}</td></tr>
         <tr><td>Nayarit</td><td>{{$geo[17]}}</td></tr>
         <tr><td>Nuevo León</td><td>{{$geo[18]}}</td></tr>
         <tr><td>Oaxaca</td><td>{{$geo[19]}}</td></tr>
         <tr><td>Puebla</td><td>{{$geo[20]}}</td></tr>
         <tr><td>Querétaro</td><td>{{$geo[21]}}</td></tr>
         <tr><td>Quintana Roo</td><td>{{$geo[22]}}</td></tr>
         <tr><td>San Luis Potosíl</td><td>{{$geo[23]}}</td></tr>
         <tr><td>Sinaloa</td><td>{{$geo[24]}}</td></tr>
         <tr><td>Sonora</td><td>{{$geo[25]}}</td></tr>
         <tr><td>Tabasco</td><td>{{$geo[26]}}</td></tr>
         <tr><td>Tamaulipas</td><td>{{$geo[27]}}</td></tr>
         <tr><td>Tlaxcala</td><td>{{$geo[28]}}</td></tr>
         <tr><td>Veracruz</td><td>{{$geo[29]}}</td></tr>
         <tr><td>Yucatán</td><td>{{$geo[30]}}</td></tr>
         <tr><td>Zacatecas</td><td>{{$geo[31]}}</td></tr>
         <tr><td>Extranjeros</td><td>{{$geo[32]}}</td></tr>
         
         <?php
         $total=0;
         for($i=0; $i<=32; $i++){
            $total = $total+$geo[$i];
         }
         ?>
   
         <tr class="success"><td>Total de usuarios registrados con Entidad Federativa:</td><td>{{$total}}</td></tr>
         
        </table>
        
    </div>
</div>
  </body>
</html>  
@endsection