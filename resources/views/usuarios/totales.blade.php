@extends('app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <br>
            <h4> <p style="text-align: center";>Total de usuarios registrados en la plataforma: </p> </h4>
            <br>
            <h4 style="text-align: center" ;> <strong> {{$info[0]}} </strong></h4>

            <body>
                <div id="donutchart" style="width: 900px; height: 500px;"></div>
            </body>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load("current", {
                    packages: ["corechart"]
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
          ['Usiarios', 'Número'],
          ['Usuarios activos', {{$info[2]}}],
          ['Usuarios no activos', {{$info[1]}}]
        ]);
                    var options = {
                        title: 'Usuarios Activos en la plataforma',
                        pieHole: 0,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                    chart.draw(data, options);
                }
            </script>
        </div>
    </div>
</div>
@endsection