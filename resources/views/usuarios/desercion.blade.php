@extends('app') @section('content')

<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        
        var datos = {!!$desercion!!};
        
        google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
        var data1 = new google.visualization.DataTable();
        data.addColumn('number', 'Day' );
        data1.addColumn('number', 'Day' );
        data.addColumn('number', 'Por día');
        data1.addColumn('number', 'Acumulado');
     
        var i = 1;
        var suma = 0;
  
        for (i = 0 ; i< datos.length; i++){
            suma = suma + datos[i].usuarios;

      data.addRows([
         
        [i,  datos[i].usuarios],
   
      ]);
            data1.addRows([
         
        [i, suma],
   
      ]);
        }

      var options = {
          
            
        chart: {
           
          title: 'Cantidad de usuarios que registraron actividad',
          subtitle: 'A lo largo del curso, por día'
        },
        width: 600,
          height: 400,
       
        axes: {
          x: {
            0: {side: 'top'}
          }
        },
          colors: ['red']
      };
        var options1 = {
        chart: {
          title: 'Cantidad de usuarios que registraron actividad',
          subtitle: 'A lo largo del curso, acumulados'
        },
        width: 600,
          height: 400,
       
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };
        
      var chart = new google.charts.Line(document.getElementById('line_top_x'));
              var chart1 = new google.charts.Line(document.getElementById('line_top_y'));


      chart.draw(data, options);
        chart1.draw(data1, options1);
    }
      
  </script>
</head>
<body> 
<br>
<div class="container">
    <div class="row">
        
  <table class="table">
     <td><div id="line_top_x"></div></td>
      
        <td><div id="line_top_y"></div></td>
  </table>
   
    </div>
    </div>
  

    
     
</body>
</html>
@endsection