<?php
include '_header.php';
include '_menu_usuario.php';
?>

<div class="container" style="background-color: whitesmoke">
    <div >
        <canvas id="myChartLine" width="80%" height="47%"></canvas>
    </div> 
</div>

<script>

    $.getJSON(
            "_graficoDiario.php",
            function (data) {

                var dataLine = {
                    labels: ['0h', "1h", "2h", "3h", "4h", "5h", "6h", "7h", "8h", "9h", "10h", "11h", "12h", "13h", "14h", "15h", "16h", "17h", '18h', "19h", "20h", '21h', '22h', '23h'],
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
                }
            }
    );

</script>


<?php
include '_footer.php';
?>
