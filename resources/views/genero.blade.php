@extends('app') @section('content')
            <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages': ['bar']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {var data = google.visualization.arrayToDataTable([
          ['', 'Hombres', 'Mujeres', 'Indefinido'],
          ['Genero', {{$infot[0]}}, {{$infot[1]}}, {{$infot[2]}}]]);

                    var options = {
                        chart: {
                            title: '',
                            subtitle: '',
                        },

                        bars: 'vertical',

                        vAxis: {
                            format: 'decimal'
                        },
                        height: 500,
                        vAxis: {
                            format: 'decimal'
                        },
                        colors: ['#1b9e77', '#d95f02', '#7570b3'],


                    };

                    var chart = new google.charts.Bar(document.getElementById('chart_div'));

                    chart.draw(data, options);
                }
            </script>


            </head>
            <body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br>            
            <h3> <p style="text-align: center";>Usuarios por genero: </p> </h3>

            <br>          
                <div id="chart_div" style="width: 900px; height: 500px;"></div>
            </body>

        </div>
    </div>
</div>
@endsection