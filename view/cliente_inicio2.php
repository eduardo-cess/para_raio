<?php
include '_header.php';
include '_menu_usuario.php';
?>
<ul class="nav nav-tabs">
    <!--<ul nav nav-pills nav-stacked>-->
    <li role="presentation"><a href="#">Gráfico Diário</a></li>
    <li role="presentation"><a href="#">Gráfico Semanal</a></li>
    <li role="presentation"><a href="#">Gráfico Mensal</a></li>
    <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            Gráfico Anual<span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li role="presentation"><a href="#">Gráfico Semanal</a></li>
            <li role="presentation"><a href="#">Gráfico Mensal</a></li>
        </ul>
    </li>
</ul>

<div class="container" style="background-color: whitesmoke" id="divConteiner">
    <div >
        <div id="chartdiv" width="80%" height="43%"></div>
    </div> 
</div>
<script>
            //var ctxLine = document.getElementById("grafico").getContext("2d");
    var now = new Date;
    var hora = now.getHours();
    var horas = [];
    for (i = 0; i <= hora; i++)
        horas[i] = i;



    window.onload = function () {
        carregaG();
        window.setInterval(carregaG, 30000);


    }

    function carregaG() {

    var chart;
            var chartData = [ {
            "country": "USA",
                    "visits": 4025,
                    "color": "#FF0F00"
            }, {
            "country": "China",
                    "visits": 1882,
                    "color": "#FF6600"
            }, {
            "country": "Japan",
                    "visits": 1809,
                    "color": "#FF9E01"
            }, {
            "country": "Germany",
                    "visits": 1322,
                    "color": "#FCD202"
            }, {
            "country": "UK",
                    "visits": 1122,
                    "color": "#F8FF01"
            }, {
            "country": "France",
                    "visits": 1114,
                    "color": "#B0DE09"
            }, {
            "country": "India",
                    "visits": 984,
                    "color": "#04D215"
            }, {
            "country": "Spain",
                    "visits": 711,
                    "color": "#0D8ECF"
            }, {
            "country": "Netherlands",
                    "visits": 665,
                    "color": "#0D52D1"
            }, {
            "country": "Russia",
                    "visits": 580,
                    "color": "#2A0CD0"
            }, {
            "country": "South Korea",
                    "visits": 443,
                    "color": "#8A0CCF"
            }, {
            "country": "Canada",
                    "visits": 441,
                    "color": "#CD0D74"
            }, {
            "country": "Brazil",
                    "visits": 395,
                    "color": "#754DEB"
            }, {
            "country": "Italy",
                    "visits": 386,
                    "color": "#DDDDDD"
            }, {
            "country": "Australia",
                    "visits": 384,
                    "color": "#999999"
            }, {
            "country": "Taiwan",
                    "visits": 338,
                    "color": "#333333"
            }, {
            "country": "Poland",
                    "visits": 328,
                    "color": "#000000"
            } ];
            var chart = AmCharts.makeChart("chartdiv", {
            "theme": "light",
                    type: "serial",
                    dataProvider: chartData,
                    categoryField: "country",
                    depth3D: 20,
                    angle: 30,
                    categoryAxis: {
                    labelRotation: 90,
                            gridPosition: "start"
                    },
                    valueAxes: [ {
                    title: "Visitors"
                    } ],
                    graphs: [ {

                    valueField: "visits",
                            colorField: "color",
                            type: "column",
                            lineAlpha: 0.1,
                            fillAlphas: 1
                    } ],
                    chartCursor: {
                    cursorAlpha: 0,
                            zoomable: false,
                            categoryBalloonEnabled: false
                    },
                    export: {
                    enabled: true
                    }
            });
    }


</script>


<?php
include '_footer.php';
?>
