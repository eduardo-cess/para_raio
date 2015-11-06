<?php
include '_header.php';
include '_menu_usuario.php';
include_once '../controller/ControllerDadosConsumo.php';
//

$consumo = new ControllerDadosConsumo();
$consumo->getConsumoDia(1);
        
?>

<html>

    
    <div class="container" style="background-color: whitesmoke">
        <div >
            <canvas id="myChartLine" width="80%" height="50%"></canvas>
        </div> 
        
    </div>
    

    <script>  
        for (i=0; i < 23; i++){   
            console.log(documet.getElementById("hora"+i).value;
        }
        var dataLine = {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto","agosto"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,0,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40,25,51,52,2,31,61,15,51,52,2,31,61,15,51,52,2,31,61,15,51,52,2,31,61,15,51,52,2,31,61,15,51]
                }
//                },
//                {
//                    label: "My Second dataset",
//                    fillColor: "rgba(151,187,205,0.2)",
//                    strokeColor: "rgba(151,187,205,1)",
//                    pointColor: "rgba(151,187,205,1)",
//                    pointStrokeColor: "#fff",
//                    pointHighlightFill: "#fff",
//                    pointHighlightStroke: "rgba(151,187,205,1)",
//                    data: [28, 48, 40, 19, 86, 27, 90]
//                }
            ]
        };
//        var pieData = [
//            {
//                value: 300,
//                color: "#F7464A",
//                highlight: "#FF5A5E",
//                label: "Red"
//            },
//            {
//                value: 50,
//                color: "#46BFBD",
//                highlight: "#5AD3D1",
//                label: "Green"
//            },
//            {
//                value: 100,
//                color: "#FDB45C",
//                highlight: "#FFC870",
//                label: "Yellow"
//            },
//            {
//                value: 40,
//                color: "#949FB1",
//                highlight: "#A8B3C5",
//                label: "Grey"
//            },
//            {
//                value: 120,
//                color: "#4D5360",
//                highlight: "#616774",
//                label: "dsadsaj"
//            }
//        ];
        window.onload = function () {

            var ctxLine = document.getElementById("myChartLine").getContext("2d");
//            window.myBar = new Chart(ctx2).Pie(pieData, {responsive: true});
////            var ctx = document.getElementById("myChart").getContext("2d");
            window.myBar = new Chart(ctxLine).Line(dataLine, {responsive: true});
        }
    </script>

</html>
<?php
include '_footer.php';
?>
