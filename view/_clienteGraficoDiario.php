<?php
//include '_header.php';


?>





<div class="container" style="background-color: whitesmoke">
    <div >
        <canvas id="myChartLine" width="80%" height="40%"></canvas>
    </div> 
</div>

<script language="Javascript">

//    window.onload = function () {
//        setTimeout('location.reload();', 1000);
//    }

    $.getJSON(
            "_dadosGraficoDiario.php",
            function (data) {
                var now = new Date;
                var hora = now.getHours();
                // alert(now.getHours());
                var horas = [];

                for (i = 0; i <= hora; i++)
                    horas[i] = i;


                var dataLine = {
                    labels: horas,
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(36,68,174,0.65)",
                            strokeColor: "rgba(228,18,18,0.7)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: data
                        }
                    ]
                };

                window.onload = function () {

                    var ctxLine = document.getElementById("myChartLine").getContext("2d");
                    window.myBar = new Chart(ctxLine).Line(dataLine, {responsive: true});
                    //setTimeout('location.reload();', 5000);
                }
            }
    );

</script>






