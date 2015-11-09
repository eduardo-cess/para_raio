<?php
include '_header.php';
include '_menu_usuario.php';
?>

<div class="container" style="background-color: whitesmoke" onload="carregaG()">
    <div >
        <canvas id="myChartLine" width="80%" height="47%"></canvas>
    </div> 
</div>

<script>
    window.onload = function () {
        carregaG();
    }

    function carregaG() {
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



                    var ctxLine = document.getElementById("myChartLine").getContext("2d");
                    window.myBar = new Chart(ctxLine).Line(dataLine, {responsive: true});
                    //setTimeout('location.reload();', 5000);
                    var tempo = window.setInterval(carregaG, 60000);

                }
        );
    }

</script>


<?php
include '_footer.php';
?>
